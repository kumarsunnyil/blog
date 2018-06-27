
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets1/images/logo2.png" type="image/x-icon">
    <meta name="description"
          content="Right here you can see by yourself how exactly the quality image gallery should look like. Feel free to use these awesome, super customizable and mobile-friendly image galleries to make your website more interesting and appealing for its visitors.">
    <title>HTML Image Gallery</title>
    <link rel="stylesheet"
          href="./mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/tether/tether.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/soundcloud-plugin/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/dropdown/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/theme/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/mobirise/css/mbr-additional.css"
          type="text/css">


</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Sunils Code') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallerypage">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">Contactus</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Products <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{--
                            TODO
                                change the route in the dropdown to point to the actual file.
                                currently this is pointing to the logout functionality
                            --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Roofings
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Engineering
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Fabrication
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else

                        <form class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>


<section class="mbr-gallery mbr-slider-carousel cid-qBK2ZYNhQk" id="gallery2-69" data-rv-view="1817">
    <div class="container">
        <div>
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                 data-tags="Beautiful">
                                <div href="#lb-gallery2-69" data-slide-to="0" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1438159510492-d44b489bd1b6-1350x900-800x533.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                 data-tags="Beautiful">
                                <div href="#lb-gallery2-69" data-slide-to="1" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1440658172029-9d9e5cdc127c-1426x863-800x484.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                 data-tags="Creative">
                                <div href="#lb-gallery2-69" data-slide-to="2" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1461744498292-5df270c6ba06-1350x900-800x533.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                 data-tags="Creative">
                                <div href="#lb-gallery2-69" data-slide-to="3" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1463946377180-f5185c2783e5-1351x900-800x532.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Cool">
                                <div href="#lb-gallery2-69" data-slide-to="4" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1472152083436-a6eede6efad9-1349x901-800x534.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                 data-tags="Awesome">
                                <div href="#lb-gallery2-69" data-slide-to="5" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1472345113808-03a78a564cc5-1353x899-800x531.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Cool">
                                <div href="#lb-gallery2-69" data-slide-to="6" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1468549940493-46152524296c-1252x962-800x614.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Cool">
                                <div href="#lb-gallery2-69" data-slide-to="7" data-toggle="modal"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1473294312123-83488e2f8e8f-1352x900-800x532.jpg"
                                            alt=""><span class="icon-focus"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
                 data-keyboard="true" data-interval="false" id="lb-gallery2-69">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1438159510492-d44b489bd1b6-1350x900.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1440658172029-9d9e5cdc127c-1426x863.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1461744498292-5df270c6ba06-1350x900.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1463946377180-f5185c2783e5-1351x900.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1472152083436-a6eede6efad9-1349x901.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1472345113808-03a78a564cc5-1353x899.jpg"
                                            alt=""></div>
                                <div class="carousel-item"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1468549940493-46152524296c-1252x962.jpg"
                                            alt=""></div>
                                <div class="carousel-item active"><img
                                            src="https://mobirise.com/bootstrap-gallery/assets1/images/photo-1473294312123-83488e2f8e8f-1352x900.jpg"
                                            alt=""></div>
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev"
                               href="#lb-gallery2-69"><span class="mbri-left mbr-iconfont"
                                                            aria-hidden="true"></span><span
                                        class="sr-only">Previous</span></a><a
                                    class="carousel-control carousel-control-next" role="button" data-slide="next"
                                    href="#lb-gallery2-69"><span class="mbri-right mbr-iconfont"
                                                                 aria-hidden="true"></span><span
                                        class="sr-only">Next</span></a><a class="close" href="#" role="button"
                                                                          data-dismiss="modal"><span class="sr-only">Close</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cid-qBQ0ECPp3H" id="video3-81" data-rv-view="1891">
    <figure class="mbr-figure align-center container">
        <div class="video-block" style="width: 80%;">
            <div>
                <iframe class="mbr-embedded-video"
                        src="https://www.youtube.com/embed/o7p61pUbRUs?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0"
                        width="1280" height="720" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </figure>
</section>


<script src="https://mobirise.com/bootstrap-gallery/assets1/web/assets/jquery/jquery.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/popper/popper.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/tether/tether.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/js/bootstrap.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/touch-swipe/jquery.touch-swipe.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/dropdown/js/script.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
<script src="assets1/smooth-scroll/smooth-scroll.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/masonry/masonry.pkgd.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/jarallax/jarallax.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/theme/js/script.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/player.min.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/script.js"></script>
<script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-slider-video/script.js"></script>


</body>
</html>