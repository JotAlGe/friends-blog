<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        {{-- livewire styles --}}
        @livewireStyles
    </head>

    <body>

        {{-- headers --}}
        @include('partials.header')

        <div class="container">


            {{-- post form --}}
            @include('partials.post')


            <div class="col-md-7 mx-auto">

                @livewire('post.index')

            </div>
        </div>



        @include('partials.scripts-home')

        {{-- livewire scripts --}}
        @livewireScripts
    </body>

</html>
