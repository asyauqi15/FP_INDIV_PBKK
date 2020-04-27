{% extends 'admin/adminlayout.volt' %}

{% block title %}Tambah Admin Rumah Sakit{% endblock %}

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
        .container{
            padding-top: 2em;
        }
    </style>
{% endblock %}

{% block content %}
<div class="container">
    <h1 class="title">Register Admin Antrivit</h1>
    <p>{{ this.flashSession.output() }}</p>
    <form class="px-4 py-3" method="POST" action="{{ url('/addadmin/submit') }}">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="email@example.com" name="email" required="required">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required"> 
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required="required">
        </div>
        <input type="hidden" name="jenis_akun" value="2">
        <button type="submit" class="btn btn-danger btn-submit">Daftar</button>
    </form>
</div>
{% endblock %}

{% block scripts %}
<script>
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
{% endblock %}