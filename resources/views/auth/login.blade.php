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
                                            <img src="{{ asset('assets/images/logo.jpg') }}" class="logo-img">
                                        </div>

                                        <h6 class="h5 mb-0">¿Cómo estás?</h6>
                                        <p class="text-muted mt-2 mb-5">Ingresa con tu correo y contraseña.</p>

                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="form-group">

                                                {{-- email or username --}}
                                                <label for="exampleInputEmail1">Correo</label>
                                                <x-form.input placeholder="Email o nombre de usuario..." type="username"
                                                    name="username" class="form-control" id="exampleInputEmail1"
                                                    value="{{ old('username') }}" />

                                                @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-5">
                                                {{-- password --}}
                                                <label for="exampleInputPassword1">Contraseña</label>
                                                <x-form.input placeholder="Ingrese una contraseña..." type="password"
                                                    name="password" class="form-control" id="exampleInputPassword1" />

                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- submit --}}
                                            <x-form.input type="submit" class="btn btn-theme" value="Login" />

                                            <a href="#l" class="forgot-link float-right text-primary">¿Olvidaste tu
                                                contraseña?</a>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right">
                                        <div class="overlay rounded-right"></div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <p class="text-muted text-center mt-3 mb-0">¿Todavía no tenés un perfil? <a
                            href="{{ route('register')}}" class="text-primary ml-1">Registrate</a></p>

                </div>
            </div>
        </div>
    </body>

</html>
