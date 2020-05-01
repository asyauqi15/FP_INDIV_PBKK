{% extends 'adminrumahsakit/adminrumahsakitlayout.volt' %}

{% block title %}Admin Rumah Sakit{% endblock %}

{% block styles %}
<style>
    .antrean-show{
        text-align: center;
        margin-top: 10%;
    }

    .antrean{
        font-size: 8em;
        font-weight: 500;
    }
    .btn{
            margin: 1em 3em;
            padding: 1.5em 5em;
        }
</style>
{% endblock %}

{% block content %}
<div class="antrean-show">
    <P>Status: <?php echo $rumah_sakit->getStatusAntrean();?></P>
    <?php $mydate=getdate(date("U")); ?>
    <h1>Antrean</h1>
    <h1><?php echo "$mydate[weekday], $mydate[mday] $mydate[month], $mydate[year]"; ?></h1>
    <p class="antrean">10/100</p>
    <table>
        <tr><a class="btn btn-danger" href="{{url('/')}}">Back</a></tr>
        <tr><a class="btn btn-danger" href="{{url('/')}}">Next</a></tr>
    </table>
    <form method="POST" action="{{ url('/bukatutupantrean/submit') }}">
        <?php
            if($rumah_sakit->getStatusAntrean()==0)
            {
                echo "<input type='hidden' name='status_baru' value='1'>";
                echo "<button type='submit' class='btn btn-danger btn-submit'>Buka Antrean</button>";
            }
            else
            {
                echo "<input type='hidden' name='status_baru' value='0'>";
                echo "<button type='submit' class='btn btn-danger btn-submit'>Tutup Antrean</button>";
            }
        ?>
    </form>
</div>

<!-- <?php var_dump($this->session->akun);?> -->
{% endblock %}