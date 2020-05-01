{% extends 'user/userlayout.volt' %}

{% block title %}Dashboard{% endblock %}

{% block styles %}
    <style>
        .table{
            margin-top: 30px;
        }
    </style>
{% endblock %}

{% block content %}
<div class="container">
    <table>
        <tr>
            <td>Status</td>
            <td>: Belum Mengantre</td>
        </tr>
        <tr>
            <td>Mengantre di Rumah Sakit</td>
            <td>: Harapan Bunda</td>
        </tr>
        <tr>
            <td>Nomor Antrean</td>
            <td>: 100</td>
        </tr>
        <tr>
            <td>Nomor Rumah Sakit Saat ini</td>
            <td>: 10</td>
        </tr>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Alamat</th>
                <th scope="col">Desa</th>
                <th scope="col">Kota/Kabupaten</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Antrean</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Harapan Bunda</td>
                <td>Disana</td>
                <td>Pojok</td>
                <td>Kecil</td>
                <td>Besar</td>
                <td>1/11</td>
                <td>Lihat | Antre</td>
            </tr>
        </tbody>
    </table>
    
</div>
{% endblock %}