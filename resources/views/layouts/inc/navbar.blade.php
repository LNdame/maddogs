
<nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                
                <div class="row">
                    <div class="col-6 col-md-4">
                        <div id="gtco-logo"><a href="index.html"><img src="images/logo.png" alt="Free HTML5 Website Template by GetTemplates.co"></a></div>
                    </div>
                    <div class="col-6 col-md-4 text-left menu-1">
                        <ul>
                            <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li ><a href="{{url('/services')}}">Services</a> </li>
                            
                           <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>

                        
                
                    </div>
                    <!-- Right Side Of Navbar -->
                    <div class="col-6 col-md-4 text-right menu-1">
                        <ul>
                            <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{route('banks.index')}}">Manage Banks</a>
                                </li>
                                <li>
                                    <a href="{{route('companies.index')}}">Manage Companies</a>
                                </li>
                                
                            </ul>
                        </li>
                    @endif
                        </ul>
                    </div>
                </div>
                
            </div>
        </nav>


