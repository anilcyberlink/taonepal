@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
@if($data->banner)
    <section class="page-title page-title-layout1 bg-overlay">
        <div class="bg-img"><img src="{{asset('uploads/original/' . $data->banner)}}" alt="background"></div>
       
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <h1 class="pagetitle__heading text-white">{{$data->post_type}}</h1>
                    <p class="pagetitle__desc text-white">
                        {!! $data->caption !!}
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="{{ url('page/' . posttype_url($doctor->uri)) }}" class="btn btn__primary btn__rounded mr-30">
                            <span>Find A Doctor</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{ url('page/' . posttype_url($service_uri->uri)) }}" class="btn btn__white btn__rounded">
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
                    <h1 class="pagetitle__heading text-white">{{$data->post_type}}</h1>
                     <h6 class="text-white">{{$data->caption}}</h6>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
            @endif

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="about__Text">                      
                            {!! $data->content !!}                      

                    </div>
                </div><!-- /.col-lg-12 -->

            </div>
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->
@endsection

