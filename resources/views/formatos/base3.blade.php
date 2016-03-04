<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 2.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Historias Médicas (la Base)</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png')}}">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
     <!-- CSS for full screen (Layout-2)-->
    <link href="{{asset('css/style-fullscreen.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{asset('css/custom-style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->
    <link href="{{asset('css/style-fullscreen.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
   <!-- <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->


</head>

<body>
    <!-- Start Page Loading -->

    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">

                    <ul class="left">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="/" class="brand-logo darken-1"><img src="{{ asset('images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{ asset('images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Configurar</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Salir</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrador</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active"><a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
                    </li>
                    <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="css-typography.html">Typography</a>
                                        </li>
                                        <li><a href="css-icons.html">Icons</a>
                                        </li>
                                        <li><a href="css-shadow.html">Shadow</a>
                                        </li>
                                        <li><a href="css-media.html">Media</a>
                                        </li>
                                        <li><a href="css-sass.html">Sass</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="ui-badges.html">Badges</a>
                                        </li>
                                        <li><a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li><a href="ui-collections.html">Collections</a>
                                        </li>
                                        <li><a href="ui-accordions.html">Accordian</a>
                                        </li>
                                        <li><a href="ui-tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="ui-navbar.html">Navbar</a>
                                        </li>
                                        <li><a href="ui-pagination.html">Pagination</a>
                                        </li>
                                        <li><a href="ui-preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li><a href="ui-media.html">Media</a>
                                        </li>
                                        <li><a href="ui-toasts.html">Toasts</a>
                                        </li>
                                        <li><a href="ui-tooltip.html">Tooltip</a>
                                        </li>
                                        <li><a href="ui-waves.html">Waves</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="table-basic.html">Basic Tables</a>
                                        </li>
                                        <li><a href="table-data.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li><a href="form-layouts.html">Form Layouts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="page-contact.html">Contact Page</a>
                                        </li>
                                        <li><a href="page-todo.html">ToDos</a>
                                        </li>
                                        <li><a href="page-blog-1.html">Blog Type 1</a>
                                        </li>
                                        <li><a href="page-blog-2.html">Blog Type 2</a>
                                        </li>
                                        <li><a href="page-404.html">404</a>
                                        </li>
                                        <li><a href="page-500.html">500</a>
                                        </li>
                                        <li><a href="page-blank.html">Blank</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> eCommers</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="eCommerce-products-page.html">Products Page</a>
                                        </li>
                                        <li><a href="eCommerce-pricing.html">Pricing Table</a>
                                        </li>
                                        <li><a href="eCommerce-invoice.html">Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="media-gallary-page.html">Gallery Page</a>
                                        </li>
                                        <li><a href="media-hover-effects.html">Image Hover Effects</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="user-profile-page.html">User Profile</a>
                                        </li>
                                        <li><a href="user-login.html">Login</a>
                                        </li>
                                        <li><a href="user-register.html">Register</a>
                                        </li>
                                        <li><a href="user-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="user-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li><a href="user-session-timeout.html">Session Timeout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>
                                        <li><a href="charts-chartist.html">Chartist</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li><a href="charts-xcharts.html">xCharts</a>
                                        </li>
                                        <li><a href="charts-flotcharts.html">Flot Charts</a>
                                        </li>
                                        <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                    <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
                    </li>
                    <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
                    </li>
                    <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                    </li>
                    <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->

                @yield('content')


            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">

                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>

                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>

                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Archivo central </h5>
                    <p class="grey-text text-lighten-4">Manejo de documentos institucionales.</p>
                    
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Historias Médicas</h5>
                    <p class="grey-text text-lighten-4">Sistema para registro, manejo y control  de las Historias Médicas.</p>
                    <div id="polar-chart-holder">
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> 
                <span class="right"> desarrollado por <a class="grey-text text-lighten-4" href=""></a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


    <!-- chartist -->
    <script type="text/javascript" src="{{ asset('js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart-script.js')}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/sparkline/sparkline-script.js')}}"></script>

    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jvectormap/vectormap-script.js')}}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">



    </script>
</body>

</html>