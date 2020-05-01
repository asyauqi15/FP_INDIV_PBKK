<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Final Project PBKK">
    <meta name="author" content="Ahmad Syauqi">
    <title>{% block title %}{% endblock %} | ADMIN ANTRIVIT</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        /* The sidebar menu */
        .sidenav {
        height: 100%; /* Full-height: remove this if you want "auto" height */
        width: 200px; /* Set the width of the sidebar */
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #dc3546; /* Black */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
        }

        /* The navigation menu links */
        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        /* font-size: 25px; */
        color: #fff;
        display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
        color: #f1f1f1;
        }

        /* Style page content */
        .main {
        margin-left: 200px; /* Same as the width of the sidebar */
        padding: 0px 10px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style>

    {% block styles %}{% endblock %}

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger" style="position: block; margin-bottom: 20px;">
        <a class="navbar-brand text-light" href="#">ADMIN</a>
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
    <!-- Side navigation -->
    <div class="sidenav">
        <a href="{{url('/')}}">Dashboard</a>
        <a href="{{url('/listadminrumahsakit')}}">List Admin Rumah Sakit</a>
        <a href="{{url('/listpasien')}}">List Pasien</a>
        <a href="{{url('/listantrean')}}">List Antrean</a>
        <a href="{{url('/profilrumahsakit')}}">Profil Rumah Sakit</a>
    </div>
    
    <!-- Page content -->
    <div class="main">
        {% block content %}{% endblock %}
    </div>
    
    <script src="{{ url('assets/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

    {% block scripts %}{% endblock %}
</body>
</html>


