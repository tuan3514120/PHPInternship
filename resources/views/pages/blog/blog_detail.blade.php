@extends('layout')
@section('content')

<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/hero-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                  @foreach($blog_detail as $key => $b)
                    <div class="hero-cap text-center">
                        <h2>{{$b -> blog_title}}</h2>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- Hero Area End -->
 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
    <div class="container">
      @foreach($blog_detail as $key => $b)
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{URL::to('public/uploads/blog/'.$b->blog_image)}}"width="750" height="375" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{$b -> blog_title}}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> TNV</a></li>
                      <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                   </ul>
                   <p class="excert">
                     {{$b -> blog_desc}}
                   </p>
                </div>
             </div>

             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                   <div class="col-sm-4 text-center my-2 my-sm-0">
                      <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                   </div>
                   <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fab fa-behance"></i></a></li>
                   </ul>
                </div>
                
             </div>
          </div>
       </div>
       @endforeach
    </div>
 </section>




@endsection