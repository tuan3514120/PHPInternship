@extends('layout')
@section('content')



<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @foreach($job_detail as $key => $value)
                    <div class="hero-cap text-center">
                        <h2>{{$value ->job_name}}</h2>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            @foreach($job_detail as $key => $value)
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{URL::to('public/uploads/job/'.$value->job_image)}}" width = "85" height = "85" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$value->job_name}}</h4>
                                </a>
                                <ul>
                                    <li>Số lượng : {{$value -> job_id}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$value->job_location}}</li>
                                    <li>{{$value->job_price}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$value->job_desc}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                               <p>{{$value->job_requirement}}</p>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Review</h4>
                       </div>
                      <ul>
                          <li>Địa chỉ : <span>{{$value->job_location}}</span></li>
                          <li>Số lượng : <span>{{$value->job_id}}</span></li>
                          <li>Thời gian : <span>{{$value->job_time}}</span></li>
                          <li>Lương :  <span>${{$value->job_price}}</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="{{URL::to('/upload')}}" class="btn">Apply Ngay</a>
                     </div>
                   </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- job post company End -->

</main>

@endsection