{% extends 'admin/adminlayout.volt' %}

{% block title %}LIST RUMAH SAKIT{% endblock %}

{% block styles %}
    <style>
        .add{
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block content %}
<a class="btn btn-danger add" href="{{url('addrumahsakit')}}">Tambah Rumah Sakit</a>
<p>{{ this.flashSession.output() }}</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kuota</th>
            <th scope="col">Terisi</th>
            <th scope="col">Dokter</th>
            <th scope="col">Perawat</th>
            <th scope="col">Tenaga Medis Lainnya</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;

        foreach($rumah_sakit as $rs => $rsv)
        {
            $count+=1;
            echo '<tr>';
            echo '<td>'.$count.'</td>';
            echo '<td>'.$rsv->getNamaRumahSakit().'</td>';
            echo '<td>'.$rsv->getAlamatRumahSakit().'</td>';
            echo '<td>'.$rsv->getKuotaRumahSakit().'</td>';
            echo '<td>'.$rsv->getKuotaTerisiRumahSakit().'</td>';
            echo '<td>'.$rsv->getJumlahDokterRumahSakit().'</td>';
            echo '<td>'.$rsv->getJumlahPerawatRumahSakit().'</td>';
            echo '<td>'.$rsv->getJumlahTenagaMedisLainnya().'</td>';
            echo '<td><a class="btn btn-primary" href="#">Edit</a>  <a class="btn btn-danger" href="#">Hapus</a></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
  </table>
{% endblock %}