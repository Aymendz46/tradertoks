<!------------------------------>
        <!-- HEADER -->
        <header class="nav-desktop">
            <a href="{{ route('home') }}"><img src="./images/logo/Logo.svg" class="logo-link"></a>
            <nav class="inactive">
                <!--div class="overlay"></div-->
                <ul class="links">
                    <li><a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('videos') }}" class="{{ (request()->is('videos')) ? 'active' : '' }}">Videos</a></li>
                    <li><a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About Me</a></li>
                    <li><a href="{{ route('course') }}" class="{{ (request()->is('course')) ? 'active' : '' }}">Course</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Me</a></li>
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
                        <li><a href="{{ route('videos') }}" class="{{ (request()->is('videos')) ? 'active' : '' }}">Videos</a></li>
                        <li><a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About Me</a></li>
                        <li><a href="{{ route('course') }}" class="{{ (request()->is('course')) ? 'active' : '' }}">Course</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact-me')) ? 'active' : '' }}">Contact Me</a></li>
                    </ul>
                </nav>
            </div>
        </div>