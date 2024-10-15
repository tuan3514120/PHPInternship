<body>
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/images/icon.png')}}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                                            <li><a href="#">Nghề nghiệp</a>
                                                <ul class="submenu">
                                                    @foreach($category as $key =>$cate)
                                                    <li><a href="{{URL::to('/danh-muc/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                                            <li><a href="{{URL::to('/about')}}">Về chúng tôi</a></li>  
                                            <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                    <a href="{{URL::to('/admin')}}" class="btn head-btn2">Đăng nhập</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <main>




