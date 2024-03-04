<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Unicode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/clients/CSS/style.css') }}">
    @yield('css')
</head>

<body>
    {{-- @section('sitebar')
        <p>Main sitebar</p>
    @endsection --}}
    @include('Clients.blocks.header')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidebar')
                            @include('Clients.blocks.sidebar')
                        @show
                    </aside>
                </div>
                <div class="col-8">
                    <div class='content'>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Clients.blocks.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @yield('Js')
</body>

</html>
