

from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")
def contract(request):
    return HttpResponse("contract1")
def polls(request):
    return HttpResponse("polls")


