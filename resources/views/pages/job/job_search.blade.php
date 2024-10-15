@extends('layout')
@section('content')

@include('pages.elements.slide')
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Kết quả tìm kiếm</h2>
                    <div class="fb-like" data-href="http://localhost/thuctap/" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
                </div>
            </div>
        </div>
        @foreach($search_job as $key => $job)
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}"><img src="{{URL::to('public/uploads/job/'.$job->job_image)}}" width = "85" height = "85" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}"><h4>{{$job -> job_name}}</h4></a>
                            <ul>
                                <li> Số lượng : {{$job -> job_id}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{$job -> job_location}}</li>
                                <li>${{$job -> job_price}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{URL::to('/chi-tiet/'.$job->job_id)}}">{{$job -> job_time}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Featured_job_end -->
<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{asset('public/frontend/images/3.jpg')}}">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <h2> Lợi ích khi tham gia</h2>
                </div>
            </div>
        </div>
        <!-- Apply Process Caption -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class=""></span>
                    </div>
                    <div class="process-cap">
                       <h5>1. Văn phòng hiện đại</h5>
                       <p>Văn phòng của GIANTY tại thành phố Hồ Chí Minh, Đà Nẵng, Tokyo và San Francisco tọa lạc ở những cao ốc hiện đại của thành phố, với không gian làm việc tiện nghi và thuận tiện trong việc đi lại và di chuyển.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class=""></span>
                    </div>
                    <div class="process-cap">
                       <h5>2. Phúc lợi</h5>
                       <p>Trình độ học vấn của bạn không phải là mối bận tâm của chúng tôi. Điều quan trọng chúng tôi muốn tìm kiếm là khả năng học hỏi điều mới, sự sẵn sàng và kiên trì đứng dậy sau vấp ngã đế tiến lên phía trước.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class=""></span>
                    </div>
                    <div class="process-cap">
                       <h5>3. Môi trường toàn diện</h5>
                       <p>Nơi làm việc để chia sẻ, học hỏi và phát triển: Với những đồng nghiệp sáng tạo, cởi mở trong môi trường chuyên nghiệp và năng động, chúng tôi mang đến một môi trường toàn diện để học tập và phát triển bản thân.</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
</main>
@endsection