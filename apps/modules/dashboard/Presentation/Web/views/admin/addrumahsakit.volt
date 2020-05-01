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
            <label>Provinsi</label>
            <select name="province" class="custom-select">
                <option selected>Pilih Provinsi</option>
                <option value="tes1">Tes 1</option>
                <option value="tes2">Tes 2</option>
                <option value="tes3">Tes 3</option>
                <option value="tes4">Tes 4</option>
              </select>
        </div>
        <div class="form-group">
            <label>Kota / Kabupaten</label>
            <select name="regency" class="custom-select">
                <option selected>Pilih Kota / Kabupaten</option>
                <option value="tes1">Tes 1</option>
                <option value="tes2">Tes 2</option>
                <option value="tes3">Tes 3</option>
                <option value="tes4">Tes 4</option>
              </select>
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <select name="district" class="custom-select">
                <option selected>Pilih Kecamatan</option>
                <option value="tes1">Tes 1</option>
                <option value="tes2">Tes 2</option>
                <option value="tes3">Tes 3</option>
                <option value="tes4">Tes 4</option>
              </select>
        </div>
        <div class="form-group">
            <label>Kelurahan / Desa</label>
            <select name="village" class="custom-select">
                <option selected>Pilih Kelurahan / Desa</option>
                <option value="tes1">Tes 1</option>
                <option value="tes2">Tes 2</option>
                <option value="tes3">Tes 3</option>
                <option value="tes4">Tes 4</option>
              </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat_rumah_sakit" required="required">
        </div>
        <button type="submit" class="btn btn-danger btn-submit">Daftar</button>
    </form>
</div>
{% endblock %}