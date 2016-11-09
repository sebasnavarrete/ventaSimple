<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            {!! HTML::image("assets/images/logo.png" , "...",array('class' => 'navbar-brand-logo')) !!}
            <span class="navbar-brand-text"> Sistema de Ventas</span>
        </div>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                  {!! HTML::image("assets/portraits/beagle.jpg" , "...",array('class' => '')) !!}
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Perfil</a>
                        </li>
                        <li role="presentation">
                            <a href="{!! route('administracion') !!}" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Administración</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Salir</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{!! route('administracion') !!}" title="Administración" role="button">
                        <i class="icon wb-settings" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="{!! route('/') !!}" title="Inicio" role="button">
                        <i class="icon wb-dashboard" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>