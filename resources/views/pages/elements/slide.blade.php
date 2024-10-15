<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('public/frontend/images/slide.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>Làm việc cùng chúng tôi</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="{{URL::to('/search')}}" method="POST" class="search-box">
                            {{ csrf_field() }}
                            <div class="input-form">
                                <input type="text" name="search" placeholder="Tìm kiếm việc làm...">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Tp HCM</option>
                                        <option value="">Japan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form" >
                                <a href="#">Tìm kiếm</a>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Our Services Start -->