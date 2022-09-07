<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    </head>

    <body>
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5 logo">
                                            <img src="{{ asset('assets/images/logo.jpg') }}" class="logo-img">
                                        </div>

                                        <h6 class="h5 mb-0">Registrate</h6>
                                        <p class="text-muted mt-2 mb-5">Ingresa tus datos.</p>

                                        <form action="{{ route('register') }}" method="post">
                                            @csrf

                                            {{--name  --}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Nombre:</label>
                                                <x-form.input placeholder="Ingrese su nombre..." type="text" name="name"
                                                    id="exampleInputEmail" value="{{ old('name') }}" />

                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- lastname --}}
                                            <div class="form-group">
                                                <label for="lastname">Apellido:</label>

                                                <x-form.input placeholder="Ingrese su apellido..." type="text"
                                                    name="lastname" id="lastname" value="{{ old('lastname') }}" />

                                                @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- username --}}
                                            <div class="form-group">
                                                <label for="username">Usuario:</label>

                                                <x-form.input name="username" placeholder="Nombre de usuario..."
                                                    id="username" value="{{ old('username') }}" />


                                                @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- email --}}
                                            <div class="form-group">
                                                <label for="email">Correo</label>

                                                <x-form.input placeholder="Ingrese su email..." type="email"
                                                    name="email" id="email" value="{{ old('email') }}" />

                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- password --}}
                                            <div class="form-group">
                                                <label for="password">Contraseña</label>

                                                <x-form.input placeholder="Ingrese una contraseña..." type="password"
                                                    name="password" id="password" />

                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- password repeat --}}
                                            <div class="form-group">
                                                <label for="password_confirmation">Repetir la contraseña</label>
                                                <x-form.input placeholder="Repetir contraseña..." type="password"
                                                    name="password_confirmation" id="password_confirmation" />

                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>



                                            {{-- submit --}}

                                            <x-form.input type="submit" class="btn btn-theme" value="Registrarse" />
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
