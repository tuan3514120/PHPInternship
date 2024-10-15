@extends('layout')
@section('content')

<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <?php
            $message= Session::get('message');
            if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
             }
                ?>
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Đăng ký thông tin</h3>
                    <form action="{{URL::to('/upload-cv')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}
                    <div class="mt-10">
                        <input type="text" name="cv_name" placeholder="Nhập họ và tên..."
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                        class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="email" name="cv_email" placeholder="Nhập địa chỉ Email..."
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                            class="single-input">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh</label>
                        <input type="file" name="cv_image" class="form-control" id="exampleInputEmail1" placeholder="Ảnh...">
                    </div>
                    <div class="mt-10">
                        <textarea class="single-textarea" name="cv_note" placeholder="Nhập nội dung...." onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Message'" required></textarea>
                    </div>  
                    <br><br>
                    <input type="submit" name="send" class="genric-btn success large"></a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>


@endsection