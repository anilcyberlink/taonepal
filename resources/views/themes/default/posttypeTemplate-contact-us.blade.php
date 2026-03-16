@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <section class="google-map py-0">
        {!! $setting->google_map2!!}
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel ">
                        <div class=" ">
                            <div>
                            <h6><i class="icon-phone"></i><a href="tel:{{$setting->phone}}"> {{$setting->phone}}, {{$setting->phone2}}</a></h6>
                            </div>
                            <div>
                            <h6><i class="icon-location"></i><a href="#"> {{$setting->location1}}</a></h6>
                            </div>
                            <div>
                            <h6><i class="icon-email"></i><a href=""> {{$setting->email_primary}}, {{$setting->email_secondary}}</a></h6>
                            </div>
                            <div>
                            <h6><i class="icon-clock"></i><a href=""> {{$setting->welcome_title}}</a></h6>
                            </div>
                        </div>
                        <ul class="social-icons list-unstyled mb-0 mr-30">
                            <li><a href="{{$setting->facebook_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$setting->instagram_link}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{$setting->twitter_link}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul><!-- /.social-icons -->
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
@endsection
