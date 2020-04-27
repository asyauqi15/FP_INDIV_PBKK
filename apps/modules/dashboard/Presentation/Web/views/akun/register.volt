{% extends 'layout.volt' %}

{% block title %}Daftar{% endblock %}

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
    <h1 class="title">Daftar Antrivit</h1>
    <p>{{ this.flashSession.output() }}</p>
    <form class="px-4 py-3" method="POST" action="{{ url('register/submit') }}">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="email@example.com" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
        </div>
        <input type="hidden" name="jenis_akun" value="0">
        <button type="submit" class="btn btn-primary btn-submit">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <p class="after-form">Sudah memiliki akun? <a href="{{url('login')}}">Login Di Sini!</a></p>
</div>
{% endblock %}