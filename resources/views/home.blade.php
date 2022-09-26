<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- head --}}
        @include('partials.head')

        {{-- livewire styles --}}
        @livewireStyles
    </head>

    <body>

        {{-- headers --}}
        @include('partials.header')

        <div class="container">


            {{-- post form --}}
            @livewire('post.create')


            <div class="col-md-7 mx-auto">

                @livewire('post.index')

            </div>
        </div>



        @include('partials.scripts-home')

        {{-- livewire scripts --}}
        @livewireScripts
    </body>

</html>
