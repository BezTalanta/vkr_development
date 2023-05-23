from config.utils import execute_sql

from django.core.cache import cache

from dbsetter.differential_diagnosis_tables.request_diff_diags import DATA


# Saves all diags to cache for good performance
def cache_diags():
    summary_result = {}

    for item in DATA:
        current_check = DATA[item]
        current_data = {}

        # Parse sql
        if len(current_check['subtables_name']) == 0:
            execution_result = execute_sql(current_check['sql'][0])
            execution_result_descr = [d.name for d in execution_result[1]]

            current_data = []
            for record in execution_result[0]:
                current_data.append(
                    dict(zip(execution_result_descr, record))
                )
        else:
            for i, sql in enumerate(current_check['sql']):
                execution_result = execute_sql(sql)
                execution_result_descr = [d.name for d in execution_result[1]]

                sub_name = current_check['subtables_name'][i]
                current_data[sub_name] = []
                for record in execution_result[0]:
                    current_data[sub_name].append(
                        dict(zip(execution_result_descr, record)))

        summary_result[item] = {}
        summary_result[item]['data'] = current_data
        summary_result[item]['part_name'] = current_check['part_name']
        summary_result[item]['note'] = current_check['note']
        summary_result[item]['type_table'] = current_check['type_table']
        summary_result[item]['type_result'] = current_check['type_result']

    for i, item in enumerate(summary_result):
        cache.set(f'diags_{i}', {item: summary_result[item]}, None)

    cache.set('diags_all', summary_result, None)
    return summary_result


# Get all diags with cache using
def get_all_diags():
    result = cache.get('diags_all')
    if result is None:
        return cache_diags()
    return result


# Get all diags by name with cache using
def get_all_diags_by_name(name):
    try:
        ind = list(DATA.keys()).index(name)
    except Exception:
        raise ValueError(f'Unknown name: {name}')

    result = cache.get(f'diags_{ind}')
    if result is None:
        cache_diags()

    result = cache.get(f'diags_{ind}')
    if result is None:
        raise ValueError(f'Unknown name: {name} after cache')
    return result
