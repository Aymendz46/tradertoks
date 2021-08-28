<!------------------------------>
        <!-- HEADER -->
        <header class="nav-desktop">
            <a href="index.html"><img src="./images/logo/Logo.svg" class="logo-link"></a>
            <nav class="inactive">
                <!--div class="overlay"></div-->
                <ul class="links">
                    <li><a href="./index.html" class="active">Home</a></li>
                    <li><a href="./videos.html">Videos</a></li>
                    <li><a href="./about.html">About Me</a></li>
                    <li><a href="./course.html">Course</a></li>
                    <li><a href="./contact-me.html">Contact Me</a></li>
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
            <a href="index.html"><img src="./images/logo/Logo.svg" class="logo-link"></a>

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
                    <a href="index.html"><img src="./images/logo/Logo.svg" class="logo-link"></a>
                    <a href="javascript:void(0);" class="icon close" onclick="hideMenuMobile()">
                        <span class="material-icons close">
                        close      
                        </span>
                    </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="./index.html" class="active">Home</a></li>
                        <li><a href="./videos.html">Videos</a></li>
                        <li><a href="./about.html">About Me</a></li>
                        <li><a href="./course.html">Course</a></li>
                        <li><a href="./contact-me.html">Contact Me</a></li>
                    </ul>
                </nav>
            </div>
        </div>