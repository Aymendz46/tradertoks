<!------------------------------>
    <!-- HEADER -->
    <header class="nav-desktop">
        <a href="{{ route('home') }}"><img src="./images/logo/Logo.svg" class="logo-link"></a>
        <nav class="inactive">
            <!--div class="overlay"></div-->
            <ul class="links">
                <li><a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About Me</a></li>
                <li><a href="{{ route('course') }}" class="{{ (request()->is('course')) ? 'active' : '' }}">Course</a></li>
                <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Me</a></li>
                @auth
                <li><a href="#" onclick="logout()">Logout</a></li>
                @endauth
                @guest
                <li><a href="#" onclick="login()"">Login</a></li>
                @endguest

            </ul>
        </nav>
        <a href="javascript:void(0);" class="icon open" onclick="displayMenu()">
            <span class="material-icons">
            menu      
        </span>
        </a>
        <a href="javascript:void(0);" class="icon close" onclick="hideMenu()">
            <span class="material-icons close">
            close      
        </span>
        </a>
    </header>
    <!-- mobile's HEADER -->
    <header class="nav-mobile">
        <a href="{{ route('home') }}"><img src="./images/logo/Logo.svg" class="logo-link"></a>

        <a href="javascript:void(0);" class="icon open" onclick="showMenuMobile()">
            <span class="material-icons">
            menu      
            </span>
        </a>
    </header>
    <!-- mobile's HEADER modal -->
    <div id="nav-modal" class="hide">
        <div class="nav-modal-content">
            <div class="top">
                <a href="{{ route('home') }}"><img src="./images/logo/Logo.svg" class="logo-link"></a>
                <a href="javascript:void(0);" class="icon close" onclick="hideMenuMobile()">
                    <span class="material-icons close">
                    close      
                    </span>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About Me</a></li>
                    <li><a href="{{ route('course') }}" class="{{ (request()->is('course')) ? 'active' : '' }}">Course</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact-me')) ? 'active' : '' }}">Contact Me</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="overlay">
    </div>
    <div id="logout-container">
        <div id="logout-modal">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <h4>Are you sure you want to logout ?</h4>
                <div class="row-btn">
                    <button type="submit" onclick="event.preventDefault();this.closest('form').submit();">Logout</button>
                    <button id="cancel" type="button">No</button>
                </div>
            </form>
        </div>
    </div>

    <div id="login-register-container">
        <div id="login-modal" class="show">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h4>Login</h4>
                <div class="row">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <input id="remember_me" type="checkbox" name="remember" checked hidden>
                
                <div class="row-btn">
                    <div class="dont">
                        <span onclick="showRegister()">I don't have an account</span>
                    </div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <div id="register-modal">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h4>Create an account</h4>
                <div class="row">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="row">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <input id="remember_me" type="checkbox" name="remember" checked hidden>
                
                <div class="row-btn">
                    <div class="dont">
                        <span onclick="showLogin()">Already have an account !</span>
                    </div>
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
    
    
