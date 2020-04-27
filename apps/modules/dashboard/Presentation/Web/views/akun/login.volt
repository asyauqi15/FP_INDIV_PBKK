{% extends 'layout.volt' %}

{% block title %}Masuk{% endblock %}

{% block styles %}
    <style>
        .title{
            text-align: center;
        }
        .after-form{
            text-align: center;
        }

        .btn-submit{
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
{% endblock %}

{% block content %}
<div>
    <h1 class="title">Login Antrivit</h1>
    <p>{{ this.flashSession.output() }}</p>
    <form class="px-4 py-3" method="POST" action="{{ url('login/submit') }}">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <input type="hidden" name="jenis_akun" value="0">
        <button type="submit" class="btn btn-primary btn-submit">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <p class="after-form">Belum memiliki akun? <a href="{{url('register')}}">Daftar Di Sini!</a></p>
</div>
{% endblock %}