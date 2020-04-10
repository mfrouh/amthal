<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="@lang('home.dir')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/fontawesome-free-5.7.2-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/taginput/tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/news.css') }}" rel="stylesheet">
    <script src="{{ asset('/1.7.1/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/chart.js') }}" type="text/javascript" ></script>
    <livewire:styles>




</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-white bg-primary shadow-sm" style="position:fixed;width: 100%;z-index: 99999;">
            <div class="container">
                <a class="navbar-brand text-white " href="{{ url('/') }}">
                  @lang('home.amthal')
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav  @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif">
                        <li class="nav-item ">
                            <a class="nav-link text-white smaller" href="/amthal"> @lang('home.amthal')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white smaller" href="/aqwal"> @lang('home.aqwal')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white smaller" href="/writers"> @lang('home.writers')</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav text-black @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif" >
                        <!-- Authentication Links -->
                        @livewire('search')
                        @guest
                            <li class="nav-item  ">
                                <a class="nav-link text-white smaller" href="{{ route('login') }}">@lang('home.login')</a>
                            </li>
                        @else
                        @php
                            $lang=app()->getlocale();
                        @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right text-@lang('home.left') text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       خروج
                                    </a>
                                    <a class="dropdown-item " href="/article">
                                     @lang('home.aqwal')
                                    </a>
                                    <a class="dropdown-item " href="/post">
                                        @lang('home.amthal')
                                    </a>
                                    <a class="dropdown-item " href="/writer">
                                       @lang('home.writers')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        {{-- <li class="nav-item  text-white">
                            @if(app()->getlocale()=='ar')
                            <a class="nav-link text-white" href="/lang/en">EN</a>
                            @else
                            <a class="nav-link text-white" href="/lang/ar">ع</a>
                            @endif
                        </li> --}}

                    </ul>
                </div>
            </div>
        </nav>
        <main  class="py-8" style="padding-top: 5rem!important;">
                @yield('content')
        </main>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
    </div>
</body>

<script>

    // Get the modal
     var modal = document.getElementById("myModal");
     $(".img").click(function(e) {
           e.preventDefault();
           var modal = document.getElementById("myModal");
           var modalImg = document.getElementById("img01");
           modal.style.display = "block";
           modalImg.src = this.src;
     });

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];

     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
       modal.style.display = "none";
     }
     function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
        $('.fa-toggle-off').removeClass('fa-toggle-off').addClass('fa-toggle-on');
     }

     /* Set the width of the side navigation to 0 */
     function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
       $('.fa-toggle-on').removeClass('fa-toggle-on').addClass('fa-toggle-off');
     }



</script>
<script src="{{ asset('/js/more.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/jquery-3.3.1.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"  type="text/javascript" ></script>
<script src="{{ asset('/js/printThis.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/taginput/tagsinput.js') }}" type="text/javascript" ></script>
<livewire:scripts>
</html>
