{{-- <form action="{{ route('register') }}" method="post">
@csrf

<input placeholder="Ingrese su nombre..." type="text" name="name"><br>
@error('name')
{{ $message }}
@enderror
<br>

<input placeholder="Ingrese su email..." type="email" name="email"><br>
@error('email')
{{ $message }}
@enderror
<br>

<input placeholder="Ingrese una contraseña..." type="password" name="password"><br>
@error('password')
{{ $message }}
@enderror
<br>

<input placeholder="Repetir contraseña..." type="password" name="password_confirmation"><br>
@error('password_confirmation')
{{ $message }}
@enderror
<br>

<input type="submit" value="Registrarse">
</form>
--}}

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    </head>

    <body>
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5 logo">
                                            {{-- <h3 class="h4 font-weight-bold text-theme">Login</h3> --}}
                                            <img src="{{ asset('assets/images/logo.jpg') }}" class="logo-img">
                                        </div>

                                        <h6 class="h5 mb-0">Registrate</h6>
                                        <p class="text-muted mt-2 mb-5">Ingresa tus datos.</p>

                                        <form action="{{ route('register') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Nombre:</label>
                                                <input placeholder="Ingrese su nombre..." type="text" name="name"
                                                    class="form-control" id="exampleInputEmail">

                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo</label>
                                                <input placeholder="Ingrese su email..." type="email" name="email"
                                                    class="form-control" id="exampleInputEmail1">

                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contraseña</label>
                                                <input placeholder="Ingrese una contraseña..." type="password"
                                                    name="password" class="form-control" id="exampleInputPassword1">

                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-5">
                                                <label for="exampleInputPassword1">Repetir la contraseña</label>
                                                <input placeholder="Repetir contraseña..." type="password"
                                                    name="password_confirmation" class="form-control"
                                                    id="exampleInputPassword1">

                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-theme">Registrarse</button>
                                            <a href="#l" class="forgot-link float-right text-primary">¿Olvidaste tu
                                                contraseña?</a>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right register">
                                        <div class="overlay rounded-right"></div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <p class="text-muted text-center mt-3 mb-0">¿Ya eres parte de la comunidad? <a
                            href="{{ route('login')}}" class="text-primary ml-1">Ingresa acá</a></p>

                </div>
            </div>
        </div>
    </body>

</html>
