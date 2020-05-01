<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Final Project PBKK">
    <meta name="author" content="Ahmad Syauqi">
    <title>{% block title %}{% endblock %} | ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {% block styles %}{% endblock %}

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger" style="position: block; margin-bottom: 20px;">
        <a class="navbar-brand text-light" href="/">ANTRIVIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
            <li class="nav-item dropdown form-inline my-2 my-lg-0">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Akun
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('editprofil')}}">Edit Profil</a>
                  <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                </div>
              </li>
        </div>
    </nav>
    
    <!-- Page content -->
    <div class="main">
        {% block content %}{% endblock %}
    </div>
    
    <script src="{{ url('assets/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

    {% block scripts %}{% endblock %}
</body>
</html>


