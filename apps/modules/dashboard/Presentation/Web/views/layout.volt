<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Final Project PBKK">
    <meta name="author" content="Ahmad Syauqi">
    <title>{% block title %}{% endblock %} | ANTRIVIT</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {% block styles %}{% endblock %}

</head>
<body>
    {% block content %}{% endblock %}
    
    <script src="{{ url('assets/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

    {% block scripts %}{% endblock %}
</body>
</html>


