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
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<div id="app">
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                         role="img"><title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                              fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Position Job Apply</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Position</h1>
                    <p class="col-md-8 fs-4">Escribe una URL y te diremos cuántas imágenes tiene el sitio y cuántos
                        archivos
                        css</p>

                    <form @click.prevent="onSubmit" action="{{route('counter.ajx_counter')}}" class="row g-3" method="POST">
                        @csrf
                        <div class="col-auto">
                            <label for="website" class="visually-hidden">Url</label>
                            <input name="website" type="text" class="form-control" id="website"
                                   placeholder="Ej: www.google.cl">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Averiguar</button>
                        </div>
                    </form>
                    {{--<ul>--}}
                        {{--<li v-for="extension in counts">--}}
                            {{--@{{ count }}--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                </div>
            </div>


            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
            </footer>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="js/app.js"></script>
</div>
</body>
</html>
