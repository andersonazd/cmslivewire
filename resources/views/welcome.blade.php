<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        @livewireStyles

    </head>
    <body>
        @php
            $count = 15;
            $data= [
                'titulo' => 'laravel livewire',
                'descripcion' => 'Un curso de aam'
            ]
        @endphp

        <livewire:post-component/>

    @livewireScripts
    </body>
</html>
