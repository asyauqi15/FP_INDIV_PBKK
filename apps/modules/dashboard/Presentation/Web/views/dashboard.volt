{% extends 'layout.volt' %}

{% block title %}Home{% endblock %}

{% block styles %}

<style>

</style>

{% endblock %}

{% block content %}
<h1> Selamat Datang! </h1>
<?php var_dump($this->session->akun)?>
{% endblock %}

{% block scripts %}

{% endblock %}