from django.shortcuts import render, redirect
from django.urls import reverse
from django.views import View
from django.views.generic import FormView
from django.contrib.auth import authenticate, login
from django.contrib.auth import get_user_model

from .forms import UserCreationForm, UserLoginForm


class LoginView(View):
    '''Login low-level CBV'''
    def get(self, request, *args, **kwargs):
        return render(request, 'account/login.html', {
            'form': UserLoginForm,
        })

    def post(self, request):
        form = UserLoginForm(request.POST)
        if form.is_valid():
            get_user = authenticate(username=form.cleaned_data['email'],
                                    password=form.cleaned_data['password'])
            if get_user is None:
                form.errors['email'] = ['Данные введены неверно']
            else:
                login(request, get_user)
                return redirect(reverse('home'))
        return render(request, 'account/login.html', {
            'form': form,
        })


class RegisterFormView(FormView):
    form_class = UserCreationForm
    template_name = 'account/signup.html'


class RegisterView(View):
    '''Signup low-level CBV'''
    def get(self, request, *args, **kwargs):
        return render(request, 'account/register.html')

    def post(self, request, *args, **kwargs):
        created_user = get_user_model().objects.create_user(
            username=request.POST['username'],
            password=request.POST['password'],
            first_name=request.POST['first_name'],
            last_name=request.POST['last_name']
        )
        login(request, created_user)
        return redirect(reverse('home'))
