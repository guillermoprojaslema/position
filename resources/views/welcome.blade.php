<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Position</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Styles -->
    {{--<style>--}}
    {{--html, body {--}}
    {{--background-color: #fff;--}}
    {{--color: #636b6f;--}}
    {{--font-family: 'Nunito', sans-serif;--}}
    {{--font-weight: 200;--}}
    {{--height: 100vh;--}}
    {{--margin: 0;--}}
    {{--}--}}

    {{--.full-height {--}}
    {{--height: 100vh;--}}
    {{--}--}}

    {{--.flex-center {--}}
    {{--align-items: center;--}}
    {{--display: flex;--}}
    {{--justify-content: center;--}}
    {{--}--}}

    {{--.position-ref {--}}
    {{--position: relative;--}}
    {{--}--}}

    {{--.top-right {--}}
    {{--position: absolute;--}}
    {{--right: 10px;--}}
    {{--top: 18px;--}}
    {{--}--}}

    {{--.content {--}}
    {{--text-align: center;--}}
    {{--}--}}

    {{--.title {--}}
    {{--font-size: 84px;--}}
    {{--}--}}

    {{--.links > a {--}}
    {{--color: #636b6f;--}}
    {{--padding: 0 25px;--}}
    {{--font-size: 13px;--}}
    {{--font-weight: 600;--}}
    {{--letter-spacing: .1rem;--}}
    {{--text-decoration: none;--}}
    {{--text-transform: uppercase;--}}
    {{--}--}}

    {{--.m-b-md {--}}
    {{--margin-bottom: 30px;--}}
    {{--}--}}
    {{--</style>--}}


</head>
<body class="container">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Position</h1>
                <p class="col-md-8 fs-4">Escriba una URL y te diremos cuántas imágenes tiene el sitio y cuántos archivos
                    css</p>

                <form action="#" class="row g-3" method="get">
                    <div class="col-auto">
                        <label for="input" class="visually-hidden">Url</label>
                        <input type="text" class="form-control" id="input" placeholder="Ej: www.google.cl">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Averiguar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
