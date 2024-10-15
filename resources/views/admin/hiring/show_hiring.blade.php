@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($show_cv as $key => $c )
        <h4 class="card-title">Chi tiết CV</h4>
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/all-cv')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Họ và tên</label>
            <input type="text" name="cv_name" class="form-control" id="exampleInputName1" value="{{$c-> cv_name}}">
          </div>  
          <div class="form-group">
            <label for="exampleInputEmail3">Email</label>
            <input type="text"  name="cv_email" class="form-control" value="{{$c-> cv_email}}">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh</label>
              <input type="file" name="cv_image" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục sản phẩm"value="{{$c->cv_image}}">
              <img src="{{URL::to('public/uploads/cv/'.$c->cv_image)}}" height="100" width="100">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Ghi chú</label>
            <input type="text"  name="cv_note" class="form-control" value="{{$c-> cv_note}}">
          </div>  
          <button type="submit" class="btn btn-primary me-2" name="add_job">Quay lại</button>
        </form>
      </div>        
      @endforeach 
    </div>
  </div>
  @endsection