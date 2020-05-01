{% extends 'user/userlayout.volt' %}

{% block title %}Edit Profil{% endblock %}

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
<div class="container">
    <h1 class="title">Edit Profil</h1>
    <p>{{ this.flashSession.output() }}</p>
    <form class="px-4 py-3" method="POST" action="{{ url('/editprofil/submit') }}">
        <input type="hidden" name="id_akun" value="<?php echo $akun->getIdAkun(); ?>">
        <input type="hidden" name="jenis_akun" value="<?php echo $akun->getJenisAkun(); ?>">
        <input type="hidden" name="id_rumah_sakit" value="<?php echo $akun->getIdRumahSakitAkun(); ?>">
        <input type="hidden" name="id_villages" value="<?php echo $akun->getIdVillagesAkun(); ?>">
        <input type="hidden" name="id_pasien" value="<?php echo $akun->getIdPasienAkun(); ?>">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username" required="required" value="<?php echo $akun->getUsername(); ?>">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="email@example.com" name="email" required="required" value="<?php echo $akun->getEmail(); ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" value="<?php echo $akun->getPassword(); ?>">  
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required="required" value="<?php echo $akun->getPassword(); ?>">
        </div>
        <div class="dropdown-divider"></div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required="required" value="<?php echo $akun->getNamaLengkapAkun(); ?>">
        </div>
        <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat_lengkap" required="required" value="<?php echo $akun->getAlamatLengkapAkun(); ?>">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="custom-select">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </select>    
        </div>
        <div class="form-group">
            <label>Jenis Identitas</label>
            <select name="jenis_identitas" class="custom-select">
                <option selected>Pilih Jenis Identitas</option>
                <option value="1">KTP</option>
                <option value="2">SIM</option>
                <option value="3">Pass Port</option>
            </select>    
        </div>
        <div class="form-group">
            <label>Nomor Identitas</label>
            <input type="text" class="form-control" placeholder="Nomor Identitas" name="nomor_identitas" required="required" value="<?php echo $akun->getNomorIdentitasAkun(); ?>">
        </div>
        <button type="submit" class="btn btn-danger btn-submit">Simpan</button>
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