from django.urls import path
from django.contrib.auth.views import LogoutView

from .views import (
    LoginView,          # Low level
    # LoginFormView,      # High level, maybe we will use it the future
    RegisterFormView,
)

urlpatterns = [
    path('login/', LoginView.as_view(), name='login'),
    path('logout/', LogoutView.as_view(), name='logout'),
    path('signup/', RegisterFormView.as_view(), name='signup'),
]
