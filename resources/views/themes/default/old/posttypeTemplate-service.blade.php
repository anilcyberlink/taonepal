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
    <link href="{{ asset('themes-assets/css/animate.css') }}css/animate.css" rel="stylesheet">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('themes-assets/css/magnific-popup.css') }}">
    <!-- Main custom Css -->
    <link href="{{ asset('themes-assets/css/custom.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('scripts')
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="{{ asset('themes-assets/') }}/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('themes-assets/') }}/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('themes-assets/') }}/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="{{ asset('themes-assets/') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('themes-assets/') }}/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('themes-assets/') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('themes-assets/') }}/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="{{ asset('themes-assets/') }}/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('themes-assets/') }}/js/gsap.min.js"></script>
    <script src="{{ asset('themes-assets/') }}/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('themes-assets/') }}/js/SplitText.js"></script>
    <script src="{{ asset('themes-assets/') }}/js/ScrollTrigger.min.js"></script>
    <!-- Wow js file -->
    <script src="{{ asset('themes-assets/') }}/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('themes-assets/') }}/js/function.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".slick-sliders").slick({

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

@endsection
@section('content')

    <!-- Subpage Header Start -->
    <div class="subpage-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Sub page Header start -->
                    <div class="subpage-header-box">
                        <h1 class="text-anime-style-3">Our Services</h1>
                        <ol class="breadcrumb wow fadeInUp">
                            <li><a href="index.html">Home</a></li>
                            <li>Our Services</li>
                        </ol>
                    </div>
                    <!-- Sub page Header End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Subpage Header End -->

    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">our services</h3>
                        <h2 class="text-anime-style-3">Our Major Service</h2>
                    </div>
                </div>
            </div>
            @if (!empty($majorServices))
                {{-- @dump($majorServices) --}}
                <div class=" slick-sliders">
                    @foreach ($majorServices as $service)
                        <!-- Our Service Item Start -->
                        <div class="our-services-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="service-item-image">
                                <img src="{{ asset('uploads/medium/' . $service->page_thumbnail) }}" alt="">
                            </div>
                            <div class="services-item-content">
                                <h3>{{ $service->post_title }}</h3>
                                {!! $service->post_content !!}
                                {{-- <p>Expert consultations with board-certified cardiologists to assess --}}

                            </div>

                        </div>
                        <!-- Our Service Item End -->
                    @endforeach
                    @foreach ($majorServices as $service)
                        <!-- Our Service Item Start -->
                        <div class="our-services-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="service-item-image">
                                <img src="{{ asset('uploads/medium/' . $service->page_thumbnail) }}" alt="">
                            </div>
                            <div class="services-item-content">
                                <h3>{{ $service->post_title }}</h3>
                                {!! $service->post_content !!}
                                {{-- <p>Expert consultations with board-certified cardiologists to assess --}}

                            </div>

                        </div>
                        <!-- Our Service Item End -->
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="service-specialist">
        <div class="container">
            <div class="row section-row ">
                <div class="col-md-3"><img src="{{ asset('uploads/original/' . $bloodRelatedConditions->thumbnail) }}"
                        alt=""></div>
                <div class="col-md-9">
                    <div class="section-title" style="margin-bottom: 50px;">
                        <h2 class="text-anime-style-3" style="margin-left:30px;"> Blood Related Conditions We Treat</h2>
                    </div>
                    {!! $bloodRelatedConditions->category_content !!}
                </div>

            </div>
            @if (!empty($bloodRelatedTreatments))
                <div class="row">

                    <div class="col-md-12">
                        <div class="section-title" style="margin-bottom: 50px;">
                            <h2 class="text-anime-style-3"> Blood Related Treatments</h2>
                        </div>
                    </div>

                    @foreach ($bloodRelatedTreatments as $treatment)
                        <div class="col-md-3 col-6">
                            <!-- Specialist Item Start -->
                            <div class="specialist-item wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="content">

                                    <div class="icon-box">
                                        <img src="{{ asset('uploads/medium/' . $treatment->page_thumbnail) }}"
                                            alt="">
                                    </div>
                                    <div class="specialist-content">
                                        <h3>{{ $treatment->post_title }}</h3>
                                        {{-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Specialist Item End -->
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>


    <!-- Our Culture Section Start -->
    @if (!empty($medicalServices))
        <div class="our-culture">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-md-6">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">MORE SERVICES</h3>
                            <h2 class="text-anime-style-3">Other Medical Services</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content">
                            <p class="wow fadeInUp">{{ $medicalService->category_content }}
                            </p>
                        </div>
                        <!-- Section Title Content End -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="culture-image-gallery wow fadeInUp">
                        @foreach ($medicalServices as $service)
                            <div class="caulture-img">
                                <div class="plub">{{ $service->post_title }}</div>
                                <div class="photo-gallery">
                                    <img src="{{ asset('uploads/medium/' . $service->page_thumbnail) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="caulture-img">
                        <div class="plub">Cardiology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-2.jpg"><img src="images/2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Pathology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-3.jpg"><img src="images/3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">General
                            Surgery</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-4.jpg"><img src="images/cultuer-4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Anesthesiology</div>
                        <div class="photo-gallery">
                            <a href="images/4.jpg"><img src="images/4.jpeg" alt=""></a>
                        </div>
                    </div>

                    <div class="caulture-img">
                        <div class="plub">Pulmonology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-6.jpg"><img src="images/5.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Urology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-7.jpg"><img src="images/6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Radiology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-8.jpg"><img src="images/cultuer-8.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Dermatology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-9.jpg"><img src="images/cultuer-9.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="caulture-img">
                        <div class="plub">Ophthalmology</div>
                        <div class="photo-gallery">
                            <a href="images/cultuer-10.jpg"><img src="images/cultuer-10.jpg" alt=""></a>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Our Culture Section End -->




    {{-- @if ($data->banner)
        <section class="page-title page-title-layout1 bg-overlay">
            <div class="bg-img"><img src="{{ asset('uploads/original/' . $data->banner) }}" alt="background"></div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <h1 class="pagetitle__heading text-white">{{ $data->post_type }}</h1>
                        <p class="pagetitle__desc text-white">
                            {!! $data->caption !!}
                        </p>
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="{{ url('page/' . posttype_url($doctor->uri)) }}"
                                class="btn btn__primary btn__rounded mr-30">
                                <span>Find A Doctor</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ url('page/' . posttype_url($service_uri->uri)) }}"
                                class="btn btn__white btn__rounded">
                                <span>Our Services</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->
    @else
        <section class="page-title page-title-layout5 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading text-white">{{ $data->post_type }}</h1>
                        <h6 class="text-white">{{ $data->caption }}</h6>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->
    @endif
    <section class="pt-80 pb-80 services-layout2 ">
        <div class="container">

            <div class="row">
                <!-- service item #1 -->
                @if ($posts->count() > 0)
                    @foreach ($posts as $value)
                        <div class="col-lg-4 col-md-3 col-sm-2">
                            <div class="service-item">
                                <div class="service__img">
                                    <a href="{{ url(geturl($value['uri'], $value['page_key'])) }}">
                                        @if ($value->page_thumbnail)
                                            <img src="{{ asset('uploads/medium/' . $value->page_thumbnail) }}"
                                                alt="img"loading="lazy">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" alt="img"loading="lazy">
                                        @endif
                                    </a>
                                </div><!-- /.service__img -->
                                <div class="service__content">
                                    <h4 class="service__title"> <a
                                            href="{{ url(geturl($value['uri'], $value['page_key'])) }}">{{ $value->post_title }}</a>
                                    </h4>
                                    <p class="service__desc">
                                        {!! $value->post_excerpt !!}
                                    </p>
                                    <a href="{{ url(geturl($value['uri'], $value['page_key'])) }}"
                                        class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__content -->
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- /.service-item -->
            </div><!-- /.row -->
            <nav class="pagination-area">
                <ul class="pagination justify-content-center">
                    {{ $posts->links() }}

                </ul>
            </nav><!-- .pagination-area -->
        </div><!-- /.container -->
    </section><!-- /.services --> --}}
@stop
