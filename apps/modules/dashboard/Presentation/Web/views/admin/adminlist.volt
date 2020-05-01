{% extends 'admin/adminlayout.volt' %}

{% block title %}LIST ADMIN{% endblock %}

{% block content %}
<a class="btn btn-danger" href="{{url('addadmin')}}">Tambah Admin</a>

<p>{{ this.flashSession.output() }}</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;

        foreach($akun as $ak => $akv)
        {
            if($akv->getJenisAkun() == 2)
            {
                $count+=1;
                echo '<tr>';
                echo '<td>'.$count.'</td>';
                echo '<td>'.$akv->getUsername().'</td>';
                echo '<td>'.$akv->getEmail().'</td>';
                echo '<td>'.$akv->getNamaLengkapAkun().'</td>';
                echo '<td><a class="btn btn-primary" href="#">Edit</a>  <a class="btn btn-danger" href="#">Hapus</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>
{% endblock %}