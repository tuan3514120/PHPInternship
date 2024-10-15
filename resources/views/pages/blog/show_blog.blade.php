@extends('layout')
@section('content')


 <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/hero-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            @foreach($all_blog as $key => $blog)
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{URL::to('public/uploads/blog/'.$blog->blog_image)}}" alt="">
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{URL::to('/xem-them/'.$blog->blog_id)}}">
                                <h2>{{$blog -> blog_title}}</h2>
                            </a>
                            <p>{{$blog -> blog_content}}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> TNV</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection