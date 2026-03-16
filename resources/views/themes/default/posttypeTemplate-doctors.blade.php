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

    <script>
        $('.doctor_details').on('click', function() {
            var doctor_name = $(this).data('title');
            var subtitle = $(this).data('sub_title');
            var uid = $(this).data('uid');
            var associated_title = $(this).data('associated_title');
            var post_tags = $(this).data('post_tags');
            var post_excerpt = $(this).data('post_excerpt');
            var post_content = $(this).data('post_content');
            var d_image = $(this).data('d_image');
            $('#myModal').find('.modal-title').html(doctor_name);

            $('#myModal').find('.modal-body .sub_title').html(subtitle);
            $('#myModal').find('.modal-body .d-image').attr('src', d_image);
            $('#myModal').find('.modal-body .content').html(post_content);
            $('#myModal').find('.modal-body .excerpt').html(post_excerpt);
            if (associated_title != "") {
                $('#myModal').find('.modal-body .associated_title').attr('href', associated_title);
            }
            if (uid != "") {
                $('#myModal').find('.modal-body .uid').attr('href', uid);
            }
            if (post_tags != "") {
                $('#myModal').find('.modal-body .post_tags').attr('href', post_tags);
            }
            $('#myModal').modal('show');


        })
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
                        <h1 class="text-anime-style-3">Our Doctors</h1>
                        <ol class="breadcrumb wow fadeInUp">
                            <li><a href="index.html">Home</a></li>
                            <li>Our Doctors</li>
                        </ol>
                    </div>
                    <!-- Sub page Header End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Subpage Header End -->

    <div class="meet-our-team our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page About Content Start -->
                    <div class="page-about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Blood Hospital</h3>
                            <h2 class="text-anime-style-3">Our Teams</h2>
                        </div>
                        <!-- Section Title End -->


                    </div>
                    <!-- Page About Content End -->
                </div>
                @if ($posts->count() > 0)
                    @foreach ($posts as $value)
                        <div class="col-lg-3 col-md-6">
                            <!-- Team Member Item Start -->
                            <div class="team-member-item wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <!-- Team Image Start -->
                                <div class="team-image">
                                    <figure class="image-anime">
                                        @if ($value->page_thumbnail)
                                            <img src="{{ asset('uploads/original/' . $value->page_thumbnail) }}"
                                                alt="member img">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" alt="img" loading="lazy">
                                        @endif
                                    </figure>

                                </div>
                                <!-- Team Image End -->

                                <!-- Team Body Start -->
                                <div class="team-body">
                                    <div class="team-content">
                                        @if ($value->post_category)
                                            <h3>{{ loop_category($value->post_category)->category }}</h3>
                                        @endif
                                        <h2><a href="javascript:void(0);" class="doctor_details"
                                                data-d_image="{{ $value->page_thumbnail != '' ? asset('uploads/original/' . $value->page_thumbnail) : asset('images/default.png') }}"
                                                data-title="{{ $value->post_title }}"
                                                data-sub_title="{{ $value->sub_title }}" data-uid="{{ $value->uid }}"
                                                data-associated_title="{{ $value->associated_title }}"
                                                data-post_tags="{{ $value->post_tags }}"
                                                data-post_excerpt="{{ $value->post_excerpt }}"
                                                data-post_content="{{ $value->post_content }}">{{ $value->post_title }}</a>
                                        </h2>
                                        <p>{{ $value->sub_title }}
                                        </p>
                                    </div>
                                    <div class="team-social-list">
                                        <ul>
                                            @if ($value->uid)
                                                <li><a href="{{ $value->uid }}" class="social-icon"><i
                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                            @endif
                                            @if ($value->associated_title)
                                                <li><a href="{{ $value->associated_title }}" class="social-icon"><i
                                                            class="fa-brands fa-twitter"></i></a></li>
                                            @endif
                                            @if ($value->post_tags)
                                                <li><a href="tel:{{ $value->post_tags }}" class="social-icon"><i
                                                            class="fas fa-phone-alt"></i></a></li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                                <!-- Team Body End -->
                            </div>
                            <!-- Team Member Item End -->
                        </div>
                    @endforeach
                    <!-- /.col-lg-4 -->
                @endif
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="pagination-area">
                        <ul class="pagination justify-content-center">
                            {{ $posts->links() }}
                        </ul>
                    </nav><!-- .pagination-area -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div>
    </div>

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
                                    <h3>{{ getAge(strip_tags($stats->post_content . '-01-01')) }}</h3>
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
    <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="myModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="myModalToggleLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="team-image">
                                <figure class="image-anime">
                                    <img src="" class="d-image" alt="member img">

                                </figure>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sub_title"></div>
                            <div class="excerpt"></div>
                            <div class="content"></div>
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="{{ $value->uid }}" class="social-icon uid"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>

                                    <li><a href="{{ $value->associated_title }}" class="social-icon associated_title"><i
                                                class="fa-brands fa-twitter"></i></a></li>

                                    <li><a href="tel:{{ $value->post_tags }}" class="social-icon post_tags"><i
                                                class="fas fa-phone-alt"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div> --}}
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
    <!-- ========================
            Team layout 2
        ========================== -->
    <section class="team-layout2 pb-40">
        <div class="container">
            <div class="row">
                <!-- Member #1 -->
                @if ($posts->count() > 0)
                    @foreach ($posts as $value)
                        <div class="col-lg-3 col-md-6">
                            <!-- Team Member Item Start -->
                            <div class="team-member-item wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <!-- Team Image Start -->
                                <div class="team-image">
                                    <figure class="image-anime">
                                        @if ($value->page_thumbnail)
                                            <img src="{{ asset('uploads/original/' . $value->page_thumbnail) }}"
                                                alt="member img">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" alt="img" loading="lazy">
                                        @endif
                                    </figure>
                                </div>
                                <!-- Team Image End -->

                                <!-- Team Body Start -->
                                <div class="team-body">
                                    <div class="team-content">
                                        <h3>{{$value->sub_title}}</h3>
                                        <h2>{{$value->post_title}}</h2>
                                        <p>{{ Str::substr($value->post_content, 0, 50) }}
                                        </p>
                                        <a href="{{url(geturl($value['uri'], $value['page_key']))}}"
                                        class="btn btn__secondary btn__link btn__rounded">
                                         <span>Read More</span>
                                         <i class="icon-arrow-right"></i>
                                     </a>
                                    </div>
                                    <div class="team-social-list">
                                        <ul>
                                            @if ($value->uid)
                                            <li><a href="{{$value->uid}}" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                             @if ($value->associated_title)
                                            <li><a href="{{$value->associated_title}}" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                                            @endif
                                             @if ($value->post_tags)
                                            <li><a href="tel:{{$value->post_tags}}" class="social-icon"><i class="fas fa-phone-alt"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!-- Team Body End -->
                            </div>
                            <!-- Team Member Item End -->
                        </div>
                        {{-- <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                @if ($value->page_thumbnail)
                            <img src="{{asset('uploads/original/' . $value->page_thumbnail)}}" alt="member img">
                             @else
                                 <img src="{{asset('images/default.png')}}" alt="img" loading="lazy">
                                 @endif
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="{{url(geturl($value['uri'], $value['page_key']))}}">{{$value->post_title}}</a></h5>
                                 @if ($value->post_category)
                                <p class="member__job">{{loop_category($value->post_category)->category}}</p>
                                @endif
                                <p class="member__desc">{{$value->sub_title}} </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <a href="{{url(geturl($value['uri'], $value['page_key']))}}"
                                       class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <ul class="social-icons list-unstyled mb-0">
                                    @if ($value->uid)
                                    <li><a href="{{$value->uid}}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                     @if ($value->associated_title)
                                    <li><a href="{{$value->associated_title}}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                     @if ($value->post_tags)
                                    <li><a href="tel:{{$value->post_tags}}" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    @endif
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div>
                    @endforeach
                    <!-- /.col-lg-4 -->
                @endif
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="pagination-area">
                        <ul class="pagination justify-content-center">
                            {{ $posts->links() }}
                        </ul>
                    </nav><!-- .pagination-area -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team layout 2  --> --}}
@stop
