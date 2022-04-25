<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="icon" type="image/x-icon" href="{{ asset ('Glider-512.webp') }}" />
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('Glider-512.webp')}}" height="30" alt="alt"/>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest

                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/pages/historia">Historia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/pages/filmy">Kilka filmików</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/pages/galeria">Galeria</a>
                            </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><kbd class='bg-primary text-light'>{{ __('Zaloguj się') }}</kbd></a>
                                </li>
                                
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/uploads/profilepics/{{Auth::user()->profilepic}}" style="width:30px; height:30px; float:left;border-radius: 50%;"> 
                                    <kbd class='bg-light text-primary' >
                                     
                                    {{ Auth::user()->name }}
                                    </kbd>
                                </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/profil">Profil</a>
                                        @can('isAdmin')
                                        <a class="dropdown-item" href="/admin_content/userslist">Lista użytkowników</a>
                                        @endcan
                                        <a class="dropdown-item" href="{{route('pages.edit',Auth::user()->id)}}">Edytuj dane konta</a>
                                        <a class="dropdown-item" href="/pages/comments">Zostaw opinie</a>
                                        <a class="dropdown-item" href="/pages/historia">Historia</a>
                                        <a class="dropdown-item" href="/pages/filmy">Kilka filmików</a>
                                        <a class="dropdown-item" href="/pages/galeria">Galeria</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            @yield('content')
        </main>
    </div>
      <footer class="py-4 bg-dark fixed-bottom">
            <div class="d-flex justify-content-around px-4 px-lg-5"><p class="m-0 text-white">Przemysław Gosik grupa I.0 5.2</p>
            <p class="m-0 text-white">Programowanie aplikacji internetowych </p>
            <p class="m-0 text-white">&copy;  2022</p>
            </div>
            
        </footer>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script type='text/javascript' ">
    @yield('funkcje')
    </script>
    @yield('js-files')
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous">
</script>
</html>
