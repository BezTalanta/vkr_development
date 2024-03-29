from drf_yasg import openapi


SW_GET_DIAGNOSES = {
    'responses': {
        '200': openapi.Response(
            description='Выводит все диагнозы, внизу представлен один пример',
            examples={
                'application/json': {
                    "I10-I15.2": {
                        "Гипертоническая болезнь (вне криза)": {
                            "omps": [
                                "ЭКГ"
                            ],
                            "tactics": [
                                "1. Рекомендовать обратиться в поликлинику."
                            ],
                            "sub_diagnoses": {
                                "При повышении САД не более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Не требует антигипертензивной терапии  на этапе оказания неотложной медицинской помощи"
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                },
                                "При повышении САД более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Каптоприл 12,5 - 25 мг или Моксонидин 0,4 мг сублингвально",
                                        "Контроль АД через 20 минут после терапии."
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                }
                            },
                            "diagnose_recommendation": "Контроль уровня АД; Прием назначенной антигипертензивной терапии"
                        }
                    }
                }
            }
        ),
    },
}


SW_GET_DIAGNOSES_BY_CODE = {
    'manual_parameters': [
        openapi.Parameter(
            'code',
            in_=openapi.IN_QUERY,
            type=openapi.TYPE_STRING,
            required=True
        ),
    ],
    'responses': {
        '200': openapi.Response(
            description='Выводит диагноз или совокупность диагнозов',
            examples={
                'application/json': {
                    "I10-I15.2": {
                        "Гипертоническая болезнь (вне криза)": {
                            "omps": [
                                "ЭКГ"
                            ],
                            "tactics": [
                                "1. Рекомендовать обратиться в поликлинику."
                            ],
                            "sub_diagnoses": {
                                "При повышении САД не более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Не требует антигипертензивной терапии  на этапе оказания неотложной медицинской помощи"
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                },
                                "При повышении САД более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Каптоприл 12,5 - 25 мг или Моксонидин 0,4 мг сублингвально",
                                        "Контроль АД через 20 минут после терапии."
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                }
                            },
                            "diagnose_recommendation": "Контроль уровня АД; Прием назначенной антигипертензивной терапии"
                        }
                    }
                }
            }
        ),
        '418': 'code параметр не обнаружен',
    },
}


SW_GET_DIAGNOSES_BY_PART_OF_CODE = {
    'manual_parameters': [
        openapi.Parameter(
            'part_of_code',
            in_=openapi.IN_QUERY,
            type=openapi.TYPE_STRING,
            required=True
        ),
    ],
    'responses': {
        '200': openapi.Response(
            description='Выводит диагноз или совокупность диагнозов',
            examples={
                'application/json': {
                    "I10-I15.2": {
                        "Гипертоническая болезнь (вне криза)": {
                            "omps": [
                                "ЭКГ"
                            ],
                            "tactics": [
                                "1. Рекомендовать обратиться в поликлинику."
                            ],
                            "sub_diagnoses": {
                                "При повышении САД не более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Не требует антигипертензивной терапии  на этапе оказания неотложной медицинской помощи"
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                },
                                "При повышении САД более чем на 20 мм. рт. ст. от привычного": {
                                    "sub_diag_omps": [
                                        "Каптоприл 12,5 - 25 мг или Моксонидин 0,4 мг сублингвально",
                                        "Контроль АД через 20 минут после терапии."
                                    ],
                                    "sub_diag_recommendation": "Рекомендаций нет"
                                }
                            },
                            "diagnose_recommendation": "Контроль уровня АД; Прием назначенной антигипертензивной терапии"
                        }
                    }
                }
            }
        ),
        '418': 'part_of_code параметр не обнаружен',
    },
}


SW_SHOW_ALL_DIAGNOSES = {
    'responses': {
        '200': openapi.Response(
            description='Выводит диагнозы списком',
        ),
    },
}
