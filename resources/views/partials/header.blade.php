<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets/css/header.css')}}">

<nav class="navbar navbar-expand-xl navbar-dark bg-dark px-5">
    <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{asset('assets/images/logo-horizontal.png')}}" class="logo">
    </a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <form class="navbar-form form-inline" action="{{ route('posts.index') }}">
            @csrf
            <div class="input-group search-box">
                <input type="text" id="search" class="form-control" placeholder="Search here..." name="search">
                <button type="submit">
                    {{-- <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span> --}}
                    Buscar
                </button>
            </div>
        </form>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img
                        src=" {{ asset('assets/images/'. Auth::user()->profile_photo) }} " class="avatar" width="50"
                        alt="Avatar">
                    {{ auth()->user()->name }} <b class="caret"></b></a>
                <div class="dropdown-menu">
                    <a href="{{route('users.show', Auth::user())}}" class="dropdown-item"><i class="fa fa-user-o"></i>
                        Profile</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
                    <div class="divider dropdown-divider"></div>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-form.input type="submit" value="Cerrar Sesi??n" class="dropdown-item text-danger" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>


@include('partials.scripts')
