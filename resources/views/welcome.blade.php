<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body class="antialiased">


<div class="container add">
    <div class="m-4">

        <p class="alert-success alert">composer create-project laravel/laravel .</p>
        <p class="alert-success alert">composer require laravel/ui</p>
        <p class="alert-success alert">npm install bootstrap @popperjs/core</p>
        <p class="alert-success alert">npm install sass --save-dev</p>
        <p class="alert-info alert">
            plugins: [ <br>
            laravel({ <br>
            input: [ <br>
            'resources/scss/app.scss', <br>
            'resources/js/app.js', <br>
            ], <br>
            refresh: true, <br>
            }), <br>
            ], <br>
        </p>
        <p class="alert-success alert">// resources/scss/app.scss <br>
            @import "~bootstrap/scss/bootstrap";</p>
        <p class="alert-success alert">// resources/js/app.js
            import * as bootstrap from 'bootstrap';</p>
        <p class="alert-dark alert"> собака vite(['resources/scss/app.scss', 'resources/js/app.js']) </p>
        <p class="alert-danger alert">npm run dev -  (остановить ctrl + с )</p>
        <p class="alert-danger alert">npm run build</p>

    </div>

</div>


</body>
</html>
