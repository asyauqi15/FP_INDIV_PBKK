{% extends 'admin/adminlayout.volt' %}

{% block title %}LIST USER{% endblock %}{% block content %}
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Identitas</th>
            <th scope="col">Nomor Identitas</th>
            <!-- <th scope="col">Tempat Rawat</th> -->
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;

        foreach($akun as $ak => $akv)
        {
            if($akv->getJenisAkun() == 0)
            {
                $count+=1;
                echo '<tr>';
                echo '<td>'.$count.'</td>';
                echo '<td>'.$akv->getUsername().'</td>';
                echo '<td>'.$akv->getEmail().'</td>';
                echo '<td>'.$akv->getNamaLengkapAkun().'</td>';
                echo '<td>'.$akv->getJenisKelaminAkun().'</td>';
                echo '<td>'.$akv->getAlamatLengkapAkun().'</td>';
                echo '<td>'.$akv->getJenisIdentitasAkun().'</td>';
                echo '<td>'.$akv->getNomorIdentitasAkun().'</td>';
                echo '<td><a class="btn btn-primary" href="#">Edit</a>  <a class="btn btn-danger" href="#">Hapus</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>
{% endblock %}