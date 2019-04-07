<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div class="d-flex" id="app">

        <!-- Sidebar -->
        <div class="bg-light" id="sidebar-wrapper">
          <div class="sidebar-heading bg-primary">Tvrtka </div>
          <div class="list-group list-group-flush">
            <router-link to="/dashboard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-tachometer-alt"></i> Upravljačka ploča</router-link>
            <router-link to="/datacolection" class="list-group-item list-group-item-action bg-light"><i class="fas fa-file-alt"></i> Opći podaci</router-link>
            <router-link to="/workplaces" class="list-group-item list-group-item-action bg-light"><i class="fas fa-building"></i> Mjesta rada</router-link>
            <router-link to="/measuresplan" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book"></i> Plan mjera</router-link>
            <router-link to="/documentation" class="list-group-item list-group-item-action bg-light"><i class="fas fa-folder-open"></i> Dokumentacija</router-link>
            <router-link to="/processing" class="list-group-item list-group-item-action bg-light"><i class="fas fa-cogs"></i> Obrada</router-link>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

<div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                
              </button>

              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-bars"></i> <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                </ul>



                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </nav> 

            <main class="py-4">
                <router-view></router-view>
            </main>
</div>

    </div>
</body>
</html>
