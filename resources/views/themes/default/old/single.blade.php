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
                    <h1 class="pagetitle__heading text-white">{{$data->post_title}}</h1>
                    <p class="pagetitle__desc text-white">
                        {{ $data->sub_title }}
                    </p>

                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
@else
 <section class="page-title page-title-layout5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading text-white">{{$data->post_title}}</h1>
                     <h6 class="text-white">{{$data->sub_title}}</h6>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    @endif
    <section class=" pb-80">
        <div class="container">
            <div class="row">
                @if(has_posts($pos_type->id))
                <div class="col-sm-12 col-md-12 col-lg-8">
                    @else
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        @endif
                    <div class="text-block mb-50">
                        <p class="text-block__desc mb-20 font-weight-bold color-secondary">
                            {!! $data->post_content !!}
                        </p>
                    </div><!-- /.text-block -->
                </div><!-- /.col-lg-8 -->
               
                  @if(has_posts($pos_type->id))
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar has-marign-left sticky-top">
                        <div class="widget widget-services">
                            <h5 class="widget__title">{{$pos_type->post_type}}</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                 @foreach (has_posts($pos_type->id) as $value)
                               <li><a href="{{ url(geturl($value['uri'], $value['page_key'])) }}" class="{{($data->page_key == $value->page_key)?'active':''}}"><span>{{$value->post_title}}</span><i class="icon-arrow-right"></i></a></li>
                                @endforeach
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-services -->

                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@stop
