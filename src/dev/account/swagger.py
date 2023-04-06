from drf_yasg import openapi

SW_GET_TOKEN = {
    'manual_parameters': [
        openapi.Parameter(
            'email', in_=openapi.IN_QUERY, type=openapi.TYPE_STRING
        ),
        openapi.Parameter(
            'password', in_=openapi.IN_QUERY, type=openapi.TYPE_STRING
        ),
    ],
    'responses': {
        '200': openapi.Response(
            description='Параметры вывода',
            examples={
                'application/json': {
                    'token': '932c47474b7c9bdbfb2ad334d9b7b508824c0851',
                }
            }
        ),
        '401': 'Не авторизован по параметрам, либо не подтвержден email',
    },
}

SW_CREATE_USER = {
    'manual_parameters': [
        openapi.Parameter('email',
                            in_=openapi.IN_QUERY,
                            type=openapi.TYPE_STRING),
        openapi.Parameter('password',
                            in_=openapi.IN_QUERY,
                            type=openapi.TYPE_STRING),
        openapi.Parameter('first_name',
                            in_=openapi.IN_QUERY,
                            type=openapi.TYPE_STRING),
        openapi.Parameter('last_name',
                            in_=openapi.IN_QUERY,
                            type=openapi.TYPE_STRING),
    ],
    'responses': {'201': 'Успешно создан новый аккаунт',
                '400': 'Ошибка, которая вернется в ответе'}
}

SW_GET_PROFILE = {
    'manual_parameters': [
        openapi.Parameter('token',
                            in_=openapi.IN_HEADER,
                            type=openapi.TYPE_STRING),
    ],
    'responses': { # fields = ('email', 'first_name', 'last_name', 'is_email_confirmed')
        '200': openapi.Response(
            description='Параметры вывода',
            examples={
                'application/json': {
                    'email': 'admin@admin.ru',
                    'first_name': 'admin',
                    'last_name': 'admin',
                    'is_email_confirmed': 'true',
                }
            }
        ),
        '400': 'Ошибка будет указана в ответе'
    }
}
