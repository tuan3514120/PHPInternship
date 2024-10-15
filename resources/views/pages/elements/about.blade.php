@extends('layout')
@section('content')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Về chúng tôi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- Support Company Start-->
    <div class="support-company-area fix section-padding2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <h2>Văn phòng</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Văn phòng của GIANTY tại thành phố Hồ Chí Minh, Tokyo và San Francisco tọa lạc ở những cao ốc hiện đại của thành phố, với không gian làm việc tiện nghi và thuận tiện trong đi lại.</p>
                            <p>Chúng tôi có những lãnh đạo tích cực và sát sao. Họ luôn sẵn sàng trực tiếp hướng dẫn cho bạn trong từng công việc cụ thể. Chúng tôi không chỉ quan sát bạn, chúng tôi làm cùng với bạn.</p>
                            <a href="#" class="btn post-btn">Apply ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="{{asset('public/frontend/images/3.jpg')}}"width = "780" height = "600" alt="">
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>2000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('public/frontend/images/client1.png')}}"width = "130" height = "132"  alt="">
                                        <span>Ho Tung Lam</span>
                                        <p>Chairman of GIANTY Group</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Năm 1994, anh gia nhập Alpha Group Inc. (TSE/JASDAQ stock) với tư cách là một thành viên sáng lập và giữ cương vị Giám đốc. Tháng 5/2000, anh thành lập công ty GNT Co., Ltd. và là Chủ tịch Tập đoàn. Khi kỷ nguyên mobile internet vừa bắt đầu, anh đã nhanh chóng tiếp cận với các nội dung trên mobile, truyền thông mobile, thương mại điện tử mobile v.v. Kể từ năm 2006, anh đã xây dựng nên hệ thống phát triển Offshore cho những sản phẩm của GNT tại Việt Nam, và triển khai các dự án Offshore thực tế.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('public/frontend/images/client2.png')}}"width = "130" height = "132" alt="">
                                        <span>Nguyen Anh Bang</span>
                                        <p>CEO of GIANTY Vietnam</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Năm 2003, anh tốt nghiệp Đại học Khoa học Tự nhiên - Đại học Quốc gia TP. HCM và gia nhập Sáng Tạo Inc. Vietnam, phụ trách phát triển phần mềm. Năm 2005, anh gia nhập Tập đoàn Công nghệ thông tin và Kỹ thuật Hitachi (hiện tại là Hitachi Information & Telecommunication Engineering, Ltd.), là kỹ sư công nghệ (Software Engineer) trong mảng Phát triển phần mềm. Năm 2006 anh gia nhập GNT Co., Ltd., tham gia xây dựng hệ thống phát triển Offshore trong lĩnh vực kinh doanh lẫn kỹ thuật, phát triển hàng loạt sản phẩm cho thị trường Nhật Bản trong hơn 10 năm qua. Năm 2011, anh trở thành thành viên của Hội đồng Quản trị kiêm CTO của GNT.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('public/frontend/images/cilent4.png')}}"width = "130" height = "132" alt="">
                                        <span>Pop Trinh</span>
                                        <p>CTO of GIANTY Vietnam</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Anh Pop có hơn 15 năm kinh nghiệm trong lĩnh vực Kỹ thuật phần mềm, trí tuệ nhân tạo (AI) và phân tích dữ liệu. Anh tốt nghiệp Thạc sĩ CNTT tại Đại học Sorbonne. Anh cũng từng là cựu Giám đốc của công ty Cinnamon AI (trụ sở tại Tokyo,Cinnamon đã huy động được vốn lên đến 33 triệu đô la) và cựu Giám đốc điều hành & Đồng sáng lập của công ty Filum AI (trụ sở tại Hoa Kỳ).”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>




@endsection