
<header class="cs-header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky d-block p-0 bg-white" data-scroll-header>
    <div class="d-block w-100 secondary-nav">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-flex-start align-items-center">
                    <span class="text-white"><span class="fe-phone"></span>&nbsp;Contáctanos</span>&nbsp;<a class="text-white" href="#">+593 910-784-8015</a>
                    <ul class="d-flex justify-content-space-around list-inline align-items-center ml-4 mb-0">
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-facebook sb-dark sb-sm mr-2" href="#">
                            <i class="fe-facebook"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-twitter sb-dark sb-sm mr-2" href="#">
                            <i class="fe-twitter"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-instagram sb-dark sb-sm mr-2" href="#">
                            <i class="fe-instagram"></i>
                        </a></li>
                        <li class="list-inline-item"><a class="text-white social-btn sb-outline sb-google sb-dark sb-sm mr-2" href="#">
                            <i class="fe-google"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{route('app.home')}}">
            <img class="navbar-floating-logo d-none d-lg-block" width="153" src="{{asset('img/logo/logo-light.png')}}"
                 alt="Around"/>
            <img class="navbar-stuck-logo" width="153" src="{{asset('img/logo/logo-dark.png')}}"
                 alt="Around"/>
            <img class="d-lg-none" width="58" src="{{asset('img/logo/logo-icon.png')}}" alt="Around"/>
        </a>
        <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-search font-size-xl mr-2"></i>
            </a>&nbsp;
            <a class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
               data-view="#modal-signin-view">
                <i class="fe-user font-size-xl mr-2"></i>
            </a>
            <a class="btn btn-translucent-light ml-grid-gutter d-none d-lg-inline-block navbar-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a>
            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block navbar-stuck-btn"
               href="#modal-signin" data-toggle="modal" data-view="#modal-signup-view">Crear cuenta</a></div>
        <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="cs-offcanvas-cap navbar-box-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="cs-offcanvas-body">
                <!-- Menu-->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown-mega">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Iniciativas</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-column dropdown-column-img bg-secondary"
                               href="index.html"
                               style="background-image: url({{asset('img/demo/menu-banner.jpg')}});">
                            </a>
                            <div class="dropdown-column">
                                <a class="dropdown-item" href="index.html">Web Template
                                    Presentation</a><a class="dropdown-item" href="demo-business-consulting.html">Business
                                    Consulting</a><a class="dropdown-item" href="demo-shop-homepage.html">Shop
                                    Homepage</a><a class="dropdown-item" href="demo-booking-directory.html">Booking /
                                    Directory</a><a class="dropdown-item" href="demo-creative-agency.html">Creative
                                    Agency</a><a class="dropdown-item" href="demo-web-studio.html">Web Studio</a><a
                                        class="dropdown-item" href="demo-product-software.html">Product Landing -
                                    Software</a>
                            </div>
                            <div class="dropdown-column">
                                <a class="dropdown-item" href="demo-product-gadget.html">Product
                                    Landing - Gadget</a>
                                <a class="dropdown-item" href="demo-mobile-app.html">Mobile App
                                    Showcase</a>
                                <a class="dropdown-item" href="demo-coworking-space.html">Coworking
                                    Space</a>
                                <a class="dropdown-item" href="demo-event-landing.html">Event Landing</a>
                                <a class="dropdown-item" href="demo-marketing-seo.html">Digital Marketing &amp;
                                    SEO</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-mega">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Gestión de Innovación</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">Blog</h5><a class="dropdown-item" href="blog-grid-rs.html">Grid
                                    Right Sidebar</a><a class="dropdown-item" href="blog-grid-ls.html">Grid Left
                                    Sidebar</a><a class="dropdown-item" href="blog-grid-ns.html">Grid No Sidebar</a><a
                                        class="dropdown-item" href="blog-list-rs.html">List Right Sidebar</a><a
                                        class="dropdown-item" href="blog-list-ls.html">List Left Sidebar</a><a
                                        class="dropdown-item" href="blog-list-ns.html">List No Sidebar</a><a
                                        class="dropdown-item" href="blog-single-rs.html">Single Post Right Sidebar</a><a
                                        class="dropdown-item" href="blog-single-ls.html">Single Post Left Sidebar</a><a
                                        class="dropdown-item" href="blog-single-ns.html">Single Post No Sidebar</a>
                            </div>
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">Portfolio</h5><a class="dropdown-item"
                                                                             href="portfolio-style-1.html">Grid Style
                                    1</a><a class="dropdown-item" href="portfolio-style-2.html">Grid Style 2</a><a
                                        class="dropdown-item" href="portfolio-style-3.html">Grid Style 3</a><a
                                        class="dropdown-item" href="portfolio-single-side-gallery-grid.html">Project
                                    Side Gallery (Grid)</a><a class="dropdown-item"
                                                              href="portfolio-single-side-gallery-list.html">Project
                                    Side Gallery (List)</a><a class="dropdown-item"
                                                              href="portfolio-single-carousel.html">Project Carousel</a><a
                                        class="dropdown-item" href="portfolio-single-wide-gallery.html">Project Wide
                                    Gallery</a>
                            </div>
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">Shop</h5><a class="dropdown-item" href="shop-ls.html">Grid
                                    Left Sidebar</a><a class="dropdown-item" href="shop-rs.html">Grid Right
                                    Sidebar</a><a class="dropdown-item" href="shop-ns.html">Grid No Sidebar</a><a
                                        class="dropdown-item" href="shop-single.html">Single Product</a><a
                                        class="dropdown-item" href="checkout.html">Cart &amp; Checkout</a><a
                                        class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Analítica</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">Dashboard</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="dashboard-orders.html">Orders</a></li>
                                    <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                                    <li><a class="dropdown-item" href="dashboard-messages.html">Messages</a></li>
                                    <li><a class="dropdown-item" href="dashboard-followers.html">Followers</a></li>
                                    <li><a class="dropdown-item" href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">Account Settings</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="account-profile.html">Profile Info</a></li>
                                    <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                                    <li><a class="dropdown-item" href="account-notifications.html">Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="signin-illustration.html">Sign In - Illustration</a></li>
                            <li><a class="dropdown-item" href="signin-image.html">Sign In - Image</a></li>
                            <li><a class="dropdown-item" href="signin-signup.html">Sign In - Sign Up</a></li>
                            <li><a class="dropdown-item" href="password-recovery.html">Password Recovery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Recursos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.html">About</a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">Contacts</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                                    <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                                    <li><a class="dropdown-item" href="{{route('app.contacto')}}">Contacts v.3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">Help Center</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                                    <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                                    <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">404 Not Found</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                                    <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                    data-toggle="dropdown">Coming Soon</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                                    <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Acerca de</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="docs/dev-setup.html">
                                    <div class="d-flex align-items-center">
                                        <div class="font-size-xl text-muted"><i class="fe-file-text"></i></div>
                                        <div class="pl-3"><span class="d-block text-heading">Documentation</span>
                                            <small class="d-block text-muted">Kick-start customization</small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="components/typography.html">
                                    <div class="d-flex align-items-center">
                                        <div class="font-size-xl text-muted"><i class="fe-layers"></i></div>
                                        <div class="pl-3"><span class="d-block text-heading">UI Kit<span
                                                        class="badge badge-danger ml-2">50+</span></span>
                                            <small class="d-block text-muted">Flexible components</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="docs/changelog.html">
                                    <div class="d-flex align-items-center">
                                        <div class="font-size-xl text-muted"><i class="fe-edit"></i></div>
                                        <div class="pl-3"><span class="d-block text-heading">Changelog<span
                                                        class="badge badge-success ml-2">v1.1</span></span>
                                            <small class="d-block text-muted">Regular updates</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="mailto:contact@createx.studio">
                                    <div class="d-flex align-items-center">
                                        <div class="font-size-xl text-muted"><i class="fe-life-buoy"></i></div>
                                        <div class="pl-3"><span class="d-block text-heading">Support</span>
                                            <small class="d-block text-muted">contact@createx.studio</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
