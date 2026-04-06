@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title pt-30 pb-30 text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('page/' . posttype_url($pos_type->uri)) }}">{{$pos_type->post_type}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{$data->post_title}}</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="post-item mb-0">
                        @if($data->banner)
                        <div class="post__img">
                            <a><img src="{{asset('uploads/original/' . $data->banner)}}" alt="post image"loading="lazy">
                            </a>
                        </div><!-- /.post-img -->
                        @endif
                        <div class="post__body pb-0">
                            @if($data->post_category && $data->banner)
                            <div class="post__meta-cat">                           
                            <a href="{{route('category.navigation',loop_category($data->post_category)->uri)}}">{{loop_category($data->post_category)->category}}</a>                         
                           </div><!-- /.blog-meta-cat -->
                            @endif
                            <div class="post__meta d-flex align-items-center mb-20">
                            <!--<span class="post__meta-date">{{$data->created_at->format('M')}} {{$data->created_at->format('d')}}, {{$data->created_at->format('Y')}}</span>-->
                            </div><!-- /.blog-meta -->
                            <h1 class="post__title mb-30">
                                {{$data->post_title}}
                            </h1>
                            <hr>
                            <div class="post__desc">
                                {!! $data->post_content !!}
                            </div><!-- /.blog-desc -->
                        </div>
                    </div><!-- /.post-item -->
                    <div class="d-flex flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
                        <div class="blog-share d-flex flex-wrap align-items-center">
                            <strong class="mr-20 color-heading">Share</strong>
                            <ul class="list-unstyled social-icons d-flex mb-0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div><!-- /.blog-share -->
                         @if($data->post_category)
                        <div class="widget-tags">
                            <ul class="list-unstyled d-flex flex-wrap mb-0">                               
                            <li>
                            <a href="{{route('category.navigation',loop_category($data->post_category)->uri)}}">{{loop_category($data->post_category)->category}}</a></li></ul>
                        </div><!-- /.blog-tags -->
                        @endif
                    </div>
                    <div class="widget-nav d-flex justify-content-between mb-40">
                        @if($previous != null)
                        <a href="{{url(geturl($previous['uri'], $previous['page_key']))}}" class="widget-nav__prev d-flex flex-wrap">
                            <div class="widget-nav__img">
                            @if($previous->page_thumbnail)
                            <img src="{{asset('uploads/original/' . $previous->page_thumbnail)}}" alt="blog thumb">
                             @else
                             <img src="{{asset('images/default.png')}}" alt="img">
                             @endif
                            </div>
                            <div class="widget-nav__content">
                                <span>Previous Post</span>
                                <h5 class="widget-nav__ttile mb-0">{{$previous->post_title}}</h5>
                            </div>
                        </a><!-- /.widget-prev  -->
                            @endif
                        @if($next != null)
                        <a href="{{url(geturl($next['uri'], $next['page_key']))}}" class="widget-nav__next d-flex flex-wrap">
                            <div class="widget-nav__img">
                            @if($next->page_thumbnail)
                            <img src="{{asset('uploads/original/' . $next->page_thumbnail)}}" alt="blog thumb">
                             @else
                             <img src="{{asset('images/default.png')}}" alt="img">
                             @endif
                            </div>
                            <div class="widget-nav__content">
                                <span>Next Post</span>
                                <h5 class="widget-nav__ttile mb-0">{{$next->post_title}}</h5>
                            </div>
                        </a><!-- /.widget-next  -->
                            @endif

                    </div>


                </div><!-- /.col-lg-8 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar">
                          @if($related->count()>0)
                        <div class="widget widget-posts">
                            <h5 class="widget__title">Recent Posts</h5>
                            <div class="widget__content">
                                <!-- post item #1 -->
                                @foreach($related as $value)
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="{{geturl($value['uri'], $value['page_key'])}}">
                                            @if($value->page_thumbnail)
                                    <img src="{{asset('uploads/medium/' . $value->page_thumbnail)}}" alt="img">
                                    @else
                                     <img src="{{asset('images/default.png')}}" alt="img">
                                     @endif
                                            </a>
                                        </div><!-- /.widget-post-img -->
                                        <div class="widget-post__content">
                                        <span class="widget-post__date">{{$value->created_at->format('M')}} {{$value->created_at->format('d')}} , {{$value->created_at->format('Y')}}</span>
                                            <h4 class="widget-post__title">
                                                <a href="{{geturl($value['uri'], $value['page_key'])}}">{{$value->post_title}}</a>
                                            </h4>
                                        </div><!-- /.widget-post-content -->
                                    </div><!-- /.widget-post-item -->
                                @endforeach

                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-posts -->
                        @endif
                        @if($category)
                        <div class="widget widget-categories">
                            <h5 class="widget__title">Categories</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($category->take(6) as  $key=>$value)
                                        <li><a href="{{route('category.navigation',$value->uri)}}"><span class="cat-count">{{postCount($value->id)}}</span><span>{{$value->category}}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
                        @endif
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Single -->

@stop
