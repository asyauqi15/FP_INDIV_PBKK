{% extends 'layout.volt' %}

{% block title %}Masuk{% endblock %}

{% block styles %}
    <style>
        body{
            text-align: center;
        }
        .btn{
            margin: 3em;
            padding: 1.5em;
        }
        img{
            margin: 1em;
        }
        body {
            padding: 5rem 0rem;
        }
    </style>
{% endblock %}

{% block content %}
<div class="container">
    <img src="{{url('assets/img/logo.png')}}">
    <h6>Cegah Penularan Penyakit di Rumah Sakit dengan mengantri dengan Antrivit!</h6>
    <table>
        <tr><a class="btn btn-danger" href="{{url('register')}}">Daftar</a></tr>
        <tr><a class="btn btn-danger" href="{{url('login')}}">Masuk</a></tr>
    </table>
</div>
{% endblock %}