<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <section class="px-8 py-4">
    
       <header class="container mx-auto mb-5">
       <h1> <img src="{{asset('public/image/lobo.png')}}" alt="">
       </h1>
       </header>
    </section >
    <section class="px-8">
       
            <main class="container mx-auto">
               @auth
                    <div class="lg:flex lg:justify-between">
                         @include('sidebar-link')
                        <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                            @yield('content')
                        </div>
                         @include('friends-link')
                    </div>
                @else
                @yield('content')
              @endauth
            </main>
      
    </section >
</div>
</body>
</html>
