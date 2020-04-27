{% extends 'admin/adminlayout.volt' %}

{% block title %}Tambah Rumah Sakit{% endblock %}

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
    <h1 class="title">Tambah Rumah Sakit Antrivit</h1>
    <p>{{ this.flashSession.output() }}</p>
    <form class="px-4 py-3" method="POST" action="{{ url('/addrumahsakit/submit') }}">
        <div class="form-group">
            <label>Nama Rumah Sakit</label>
            <input type="text" class="form-control" placeholder="Nama Rumah Sakit" name="nama_rumah_sakit" required="required">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat_rumah_sakit" required="required">
        </div>
        <button type="submit" class="btn btn-danger btn-submit">Daftar</button>
    </form>
</div>
{% endblock %}