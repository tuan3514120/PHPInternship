<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.jpg')}}" type="">
        <title>GIANTY - Admin Sign In</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/backend/css/bootstrap-icons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/backend/css/slick.css')}}"/>
        <link href="{{asset('public/backend/css/tooplate-little-fashion.css')}}" rel="stylesheet">
    </head> 
    <body>
        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
        <main>
            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto col-12">
                            <h1 class="hero-title text-center mb-5">Đăng nhập</h1>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form action="{{URL::to('/admin-dashboard')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="admin_email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                            <label for="email">Tên tài khoản...</label>
                                        </div>
                                        <div class="form-floating p-0">
                                            <input type="password" name="admin_password" id="password" class="form-control" placeholder="Password" required>
                                            <label for="password">Mật khẩu...</label>
                                        </div>
                                        <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                            Đăng nhập
                                        </button>
                                        <p class="text-center">Bạn chưa có tài khoản? <a href="sign-up.html">Đăng ký ngay</a></p>
                                    </form>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </section>
        </main>

 
  <script src="{{asset('public/backend/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/backend/js/Headroom.js')}}"></script>
  <script src="{{asset('public/backend/js/jQuery.headroom.js')}}"></script>
  <script src="{{asset('public/backend/js/slick.min.js')}}"></script>
  <script src="{{asset('public/backend/js/custom.js')}}"></script>

</body>
</html>