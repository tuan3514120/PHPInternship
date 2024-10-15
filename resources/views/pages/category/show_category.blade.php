@extends('layout')
@section('content')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        @foreach($category_name as $key => $name)
                        <div class="hero-cap text-center">
                            <h2>{{$name -> category_name }}</h2>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                <div class="ion">
                                </div>
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <section class="featured-job-area">
                        <div class="container">
                            @foreach($category_by_id as $key => $job)
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}"><img src="{{URL::to('public/uploads/job/'.$job->job_image)}}" width = "85" height = "85" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}">
                                            <h4>{{$job -> job_name}}</h4>
                                        </a>
                                        <ul>
                                            <li>Số lượng : {{$job -> job_id}}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>{{$job -> job_location}}</li>
                                            <li>${{$job -> job_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}">{{$job -> job_time}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->

    
</main>



@endsection