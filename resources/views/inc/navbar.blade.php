<div class="container-fluid">
    
      <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <div class="dropdown">
                    <a class="nav-link" href="/" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                        <span class="navbar-toggler-icon" >
                      </a>
                
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/">Home</a>
                        <a class="dropdown-item" href="/about">About us</a>
                        <a class="dropdown-item" href="/services">Services</a>
                      </div>
            </div>

                <a class="navbar-brand " href="/">Eazy Booking</a>

               
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {!! Form::open(['action'=>'UserviewController@search' , 'method'=>'POST','class'=>"form-inline"]) !!}
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 600px;" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  
                    {!! Form::close() !!}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">{{_('Register')}}</a>
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
            </div>
        </nav>
        <br>
        <br>
        
</div>

