@extends('layout')
@section('content')

<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/images/contact.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Liên hệ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Liên hệ với chúng tôi</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vui lòng nhập lời nhắn....'" placeholder="Vui lòng nhập lời nhắn...."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vui lòng điền tên của bạn....'" placeholder="Vui lòng điền tên của bạn....">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vui lòng nhập địa chỉ email của bạn....'" placeholder="Vui lòng nhập địa chỉ email của bạn....">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vui lòng nhập chủ đề...'" placeholder="Vui lòng nhập chủ đề...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Chi nhánh Đà Nẵng</h3>
                            <p>Lầu 3, Tòa nhà Diamond Time Complex, 35 Đường Thái Phiên, Phường Phước Ninh, Quận Hải Châu, Thành phố Đà Nẵng</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>(+84) 28 2228 1111</h3>
                            <p>(+84) 28 3636 2829</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@gianty.com.vn</h3>
                            <p>recruitment@gianty.com.vn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->




@endsection