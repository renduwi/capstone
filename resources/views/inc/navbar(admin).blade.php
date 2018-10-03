
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
                    <li class="nav-item nav-bullet" style=" display: inline-block;
                    list-style: none;">
                        <a class="nav-link text-uppercase" href="/admin/repair">Repair Shop</a>
                    </li>
                    <li class="nav-item nav-bullet" style=" display: inline-block;
                    list-style: none;">
                        <a class="nav-link text-uppercase" href="/mechaniclist">Mechanic</a>
                    </li>
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
