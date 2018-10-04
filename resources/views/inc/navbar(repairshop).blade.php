<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-------------------------Navigation----------------------------------->
<nav class="navbar navbar-expand-lg navbar-default sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarColor02">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    &nbsp;
                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    
                
                </ul>
    
               
                    <!-- Authentication Links -->
                    @guest
                          <li class="nav-item nav-bullet" style=" display: inline-block;
                        list-style: none;"  >
                            <a class="nav-link text-uppercase" href="{{ url ('login') }}">login</a>
                        </li>
                        <li class="nav-item nav-bullet" style=" display: inline-block;
                        list-style: none;">
                            <a class="nav-link text-uppercase" href="{{ url ('register') }}">Register</a>
                        </li>
                    @else
                      
                        {{-- @if($notif->count() > 0)
                    <li class="nav-item nav-bullet">
                    <a href="mechanic/show">
                            <i class="material-icons md-18" style="color: red">notifications</i>
                        </a>    
                        </li>
                        @endif --}}

                        @if (Auth::check())
                        {{-- <li class="nav-item dropdown nav-bullet" style=" display: inline-block;
                        list-style: none;">
                            <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i> Notifications <span class="badge badge-danger" id="count-notification">{{ auth()->user()->unreadNotifications->count()}}</span>
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                                @if (auth()->user()->unreadNotifications->count())
                                    @foreach(auth()->user()->unreadNotifications as $notifications)
                                <a class="dropdown-item" href="#">
                                </a>
                                @endforeach
                                @else
                                <a href="#" class="dropdown-item">No notification</a>
                                @endif
                            </div>
                        </li>
                        @endif --}}
                        <li class="nav-item dropdown nav-bullet" style=" display: inline-block;
                        list-style: none;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right text-uppercase" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url ('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ url ('/mechaniclist') }}">
    
                                <form id="logout-form" action="{{ url ('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        
    </nav>
    