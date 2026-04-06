<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="keywords" content="@yield('meta_keyword') - {{$setting->meta_key}}">
    <meta name="description" content="@yield('meta_description') -{{$setting->meta_description}}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="{{$setting->site_name}}"/>
    <meta property="og:description" content="@yield('meta_description')"/>
    <title>{{$setting->site_name}}</title>
    @if (trim($__env->yieldContent('thumbnail')))
        <meta property="og:image"
              content="{{ asset( env('PUBLIC_PATH') . 'uploads/original/' ) }}/@yield('thumbnail')"/>
    @else
        <meta property="og:image" content="{{asset(env('PUBLIC_PATH').'/images')}}/logo/logo-dark.png"/>
    @endif
    <meta property="og:image:width" content="1000"/>
    <meta property="og:image:height" content="600"/>
    <meta name="twitter:image" content="{{ asset( env('PUBLIC_PATH') . 'uploads/original/' ) }}/@yield('thumbnail')"/>
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:card" content="summary_large_image"/>
    <link rel="icon" href="{{asset('images/favicon/favicon.png')}}" type="image/png">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('use.fontawesome.com/releases/v5.15.3/css/all.css')}}">
    @yield('new_css')
    <link rel="stylesheet" href="{{asset('css/libraries.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "107576118185414");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body>

<div class="wrapper">
    <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout3">
        <div class="header-topbar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                <li>
                                    <i class="icon-phone"></i><a href="tel: {{$setting->phone}}">Emergency Line:
                                        {{$setting->phone}}
                                    </a>
                                </li>
                                <li><i class="icon-location"></i><a href="{{route('page.posttype','contact-us')}}">Location:{{$setting->location1}} </a>
                                </li>
                                <li><i class="icon-clock"></i><a href="{{route('page.posttype','contact-us')}}">{{$setting->welcome_title}}</a>
                                </li>
                            </ul><!-- /.contact__list -->
                            <div class="d-flex">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="{{$setting->facebook_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$setting->instagram_link}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$setting->twitter_link}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->

                            </div>
                        </div>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <nav class="navbar navbar-expand-lg sticky-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('images/logo/logo-dark.png')}}" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav__item">
                            <a href="{{url('/')}}" class="nav__item-link">Home</a>
                        </li>
                        <?php /* ?>
                      <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Hospital</a>
                        <ul class="dropdown-menu">
                          <li class="nav__item">
                            <a href="about-us.php" class="nav__item-link">About Hospital</a>
                          </li><!-- /.nav-item -->

                           <li class="nav__item">
                            <a href="team.php" class="nav__item-link">Leadership Team</a>
                          </li><!-- /.nav-item -->
                           <li class="nav__item">
                            <a href="team.php" class="nav__item-link">Management Team</a>
                          </li><!-- /.nav-item -->

                        </ul><!-- /.dropdown-menu -->
                      </li><!-- /.nav-item -->
                      <?php */?>
                        @if ($navigations->count())
                            @foreach ($navigations as $row)
                                <li class="nav__item">
                                    <a href="{{ url('page/' . posttype_url($row->uri)) }}"class="nav__item-link">{{ $row->post_type }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul><!-- /.navbar-nav -->
                    <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                </div><!-- /.navbar-collapse -->
                <!--<div class="d-none d-xl-flex align-items-center position-relative ml-30">-->
                <!--    <a href="{{route('appointment')}}" class="btn btn__primary btn__rounded ml-30">-->
                <!--        <i class="icon-calendar"></i>-->
                <!--        <span>Appointment</span>-->
                <!--    </a>-->
                <!--</div>-->
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header>
    <!-- /.Header -->
