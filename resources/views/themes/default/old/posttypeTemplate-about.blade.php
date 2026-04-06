@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('new_css')
    <link href="{{ asset('themes-assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('themes-assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('themes-assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('themes-assets/css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('themes-assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('themes-assets/css/magnific-popup.css') }}">
    <!-- Main custom Css -->
    <link href="{{ asset('themes-assets/css/custom.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('scripts')
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <!-- Validator js file -->
    <script src="{{ asset('themes-assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('themes-assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('themes-assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('themes-assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('themes-assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('themes-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('themes-assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('themes-assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('themes-assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('themes-assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('themes-assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('themes-assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('themes-assets/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('themes-assets/js/function.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".testimonial-slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script>
        const data = {
            labels: ["HTML", "React", "Java",
                "Python"
            ],
            datasets: [{
                data: [25, 25, 25, 25],
                backgroundColor: ["#012f6b", "#01b2aa", "#012f6b",
                    "#01b2aa"
                ],
                hoverBackgroundColor: ["#38587f", "#077c77", "#38587f",
                    "#077c77"
                ]
            }]
        };
        const options = {
            plugins: {
                legend: true,
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            const label = data.labels[tooltipItem.index] || '';
                            const value = data.datasets[0].data[tooltipItem.index];
                            return `${label}`;
                        }
                    }
                },
                textInside: {
                    text: 'BEING "WELL REGARED" MEANS',
                    color: 'blue',
                    fontSize: 24
                }
            }
        };
        Chart.register({
            id: 'textInside',
            afterDatasetsDraw: function(chart, _) {
                const ctx = chart.ctx;
                const width = chart.width;
                const height = chart.height;
                const fontSize = options.plugins.textInside.fontSize;
                ctx.font = fontSize + 'px Arial';
                ctx.fillStyle = options.plugins.textInside.color;
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.
                const text = options.plugins.textInside.text;
                const textX = Math.round(width / 2);
                const textY = Math.round(height / 2);
                ctx.fillText(text, textX, textY);
            }
        });
        const textChart =
            new Chart(document.getElementById('chart1'), {
                type: 'doughnut',
                data: data,
                options: options,
                responsive: true
            });
    </script>
@endsection
@section('content')

    <!-- Subpage Header Start -->
    <div class="subpage-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Sub page Header start -->
                    <div class="subpage-header-box">
                        <h1 class="text-anime-style-3">About Us</h1>
                        <ol class="breadcrumb wow fadeInUp">
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ol>
                    </div>
                    <!-- Sub page Header End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Subpage Header End -->

    <!-- About Us Caring Section End -->
    <div class="page-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Page About Content Start -->
                    <div class="page-about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3">{{ $data->caption }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Page About Body Start -->
                        <div class="page-about-body">
                            <p class=" wow fadeInUp"> {!! $data->content !!} </p>
                        </div>
                        <!-- Page About Body End -->
                    </div>
                    <!-- Page About Content End -->
                </div>

                <div class="col-lg-6">
                    <div class="about-page-img">
                        <!-- About Image Start -->
                        <div class="page-about-image">
                            <div class="page-about-image-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('themes-assets/images/hos.png') }}" alt="">
                                </figure>
                            </div>

                            <div class="page-about-image-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('themes-assets/images/hoss.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Caring Section End -->

    <!-- We Improving Section Start -->
    <div class="we-improving">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Improving Image Start -->
                    <div class="improving-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('uploads/original/' . $who_we_are->thumbnail) }}" alt="">
                        </figure>
                    </div>
                    <!-- Improving Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Improving Content Start -->
                    <div class="improving-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $who_we_are->category }}</h3>
                            <h2 class="text-anime-style-3">{{ $who_we_are->category_caption }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Improving Body Start -->
                        <div class="improving-body">
                            <p class="wow fadeInUp">{!! $who_we_are->category_content !!}</p>
                        </div>
                        <!-- Improving Body End -->

                        <!-- Improving Btn Start -->
                        {{-- <div class="improving-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="#" class="btn-video popup-youtube"><i class="fas fa-play-circle"></i> Play
                                Video</a>
                        </div> --}}
                        <!-- Improving Btn End -->
                    </div>
                    <!-- Improving Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- We Improving Section End -->

    <!-- Top Services Section Start -->
    <div class="top-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"> {{ $objective->category }}</h3>
                        <h2 class="text-anime-style-3">{!! $objective->category_caption !!}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row" style="height: 600px;">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Services Item Start -->
                    <div class="services-item">

                        <div class="services-content">

                            @foreach ($ourObjectives as $key => $object)
                                @if ($key <= 1)
                                    <p> <i class="fa-solid fa-arrow-right"></i>{{ $object->post_title }}
                                    </p>
                                @endif
                            @endforeach
                        </div>
                        <div class="services-content tyu">
                            @foreach ($ourObjectives as $key => $object)
                                @if ($key > 1 && $key <= 3)
                                    <p><i class="fa-solid fa-arrow-right"></i> {{ $object->post_title }}
                                    </p>
                                @endif
                            @endforeach
                        </div>



                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Services Item Start -->
                    <div class="services-item ">
                        <div class="services-img">
                            <img src="{{ asset('uploads/original/' . $objective->thumbnail) }}" alt="">

                        </div>

                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-3 col-md-12">
                    <!-- Services Item Start -->
                    <div class="services-item wow fadeInUp" data-wow-delay="0.5s">

                        <div class="services-content">

                            @foreach ($ourObjectives as $key => $object)
                                @if ($key > 3 && $key <= 5)
                                    <p><i class="fa-solid fa-arrow-right"></i> {{ $object->post_title }}
                                    </p>
                                @endif
                            @endforeach
                        </div>
                        <div class="services-content tyu">

                            @foreach ($ourObjectives as $key => $object)
                                @if ($key > 5 && $key <= 7)
                                    <p><i class="fa-solid fa-arrow-right"></i> {{ $object->post_title }}
                                    </p>
                                @endif
                            @endforeach
                        </div>

                    </div>
                    <!-- Services Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Top Services Section End -->


    <!-- health Services Section Start -->
    <div class="health-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-10 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ $carefortheHealth->category }}</h3>
                        <h2 class="text-anime-style-3">{{ $carefortheHealth->category_caption }} </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <!-- health Services Content Start -->
                    <div class="health-services-content">
                        <h2 class="wow fadeInUp">{{ $carehealths[0]->post_title }}</h2>
                        {!! $carehealths[0]->post_content !!}
                      

                    </div>
                    <!-- health Services Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- health Services Info Start  -->
                    <div class="health-service-info">
                        <!-- health Services Item Start  -->
                        <div class="health-service-item wow fadeInUp">
                            {{-- <div class="icon-box">
                                <img src="images/icon-health-service.svg" alt="">
                            </div> --}}
                            <div class="health-info-content">
                                <h3> {{ $carehealths[1]->post_title }}</h3>
                                {!! $carehealths[1]->post_content !!}

                            </div>
                        </div>
                        <!-- health Services Item Start  -->

                        <!-- health Services Item End  -->
                        <div class="health-service-item wow fadeInUp" data-wow-delay="0.25s">
                            {{-- <div class="icon-box">
                                <img src="images/icon-health-service.svg" alt="">
                            </div> --}}
                            <div class="health-info-content">
                                <h3> {{ $carehealths[2]->post_title }}</h3>
                                {!! $carehealths[2]->post_content !!}
                            </div>
                        </div>
                        <!-- health Services Item Start  -->


                    </div>
                </div>
                <!-- health Services Info End  -->
            </div>
        </div>
    </div>
    <!-- health Services Section End  -->
    <div class="serve">
        <div class="container">


            <div class="row">
                @foreach ($statistics as $stats)
                    <div class="col-md-3 col-6">
                        <!-- Specialist Item Start -->
                        <div class="specialist-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <i class="fa-solid fa-{{ $stats->price }}"></i>
                            </div>
                            <div class="specialist-content">
                                @if ($stats->post_title == 'Years Of Excellences')
                                    @php
                                        function getAge($then)
                                        {
                                            $then = date('Ymd', strtotime($then));
                                            $diff = date('Ymd') - $then;
                                            echo substr($diff, 0, -4);
                                        }
                                    @endphp
                                    <h3>{{ getAge(strip_tags($stats->post_content."-01-01")) }}</h3>
                                @else
                                    <h3>{{ strip_tags($stats->post_content) }}</h3>
                                @endif

                                <h5>{{ $stats->post_title }}</h5>

                            </div>
                        </div>
                        <!-- Specialist Item End -->
                    </div>
                @endforeach
               
            </div>
        </div>
    </div>
   
    <div class="clients-testimonials bb">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"
                            style="font-size: 30px;color: #fff;">{{ $strength->category }}</h3>
                        {!! str_replace(
                            '<p>',
                            '<p style="font-size: 25px;color: #025d9c;margin-bottom: 50px;font-weight: 600;line-height: 32px;">',
                            $strength->category_content,
                        ) !!}

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            @foreach ($ourStrengths as $key => $stre)
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <h3>{{ $stre->post_title }}</h3>
                                        {!! $stre->post_content !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                </div>
            </div>
        </div>


    @stop
