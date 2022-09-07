<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets/css/header.css')}}">

<nav class="navbar navbar-expand-xl navbar-dark bg-dark px-5">
    <a href="#" class="navbar-brand">
        <img src="{{asset('assets/images/logo.jpg')}}">

    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <form class="navbar-form form-inline">
            <div class="input-group search-box">
                <input type="text" id="search" class="form-control" placeholder="Search here...">
                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
            </div>
        </form>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-gears"></i><span>Projects</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-users"></i><span>Team</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>Reports</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Careers</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img
                        src=" {{ asset('assets/images/'. Auth::user()->profile_photo) }} " class="avatar" alt="Avatar">
                    Antonio Moreno <b class="caret"></b></a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
                    <div class="divider dropdown-divider"></div>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-form.input type="submit" value="Cerrar Sesión" class="dropdown-item text-danger" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>


@include('partials.scripts')
