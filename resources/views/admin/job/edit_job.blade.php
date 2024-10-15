@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($edit_job as $key => $job )
        <h4 class="card-title">Cập nhật nghề nghiệp</h4>
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/update-job/'.$job->job_id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên nghề nghiệp</label>
            <input type="text" name="job_name" class="form-control" id="exampleInputName1" value="{{$job-> job_name}}">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Danh mục</label>
              <select name="job_cate" class="form-control" id="exampleSelectGender">
                @foreach ($cate_job as $key => $cate ) 
                @if($cate->category_id == $job->category_id)
                <option selected value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                @else
                <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                @endif
                @endforeach  
              </select>
            </div>  
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh</label>
              <input type="file" name="job_image" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục sản phẩm"value="{{$job->job_image}}">
              <img src="{{URL::to('public/uploads/job/'.$job->job_image)}}" height="100" width="100">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Mô tả nghề nghiệp</label>
            <input type="text" name="job_desc" class="form-control" id="exampleInputName1" value="{{$job-> job_desc}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Yêu cầu nghề nghiệp</label>
            <input type="text" name="job_requirement" class="form-control" id="exampleInputName1" value="{{$job-> job_requirement}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Lương</label>
            <input type="text"  name="job_price" class="form-control" value="{{$job-> job_price}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Địa chỉ</label>
            <input type="text"  name="job_location" class="form-control" value="{{$job-> job_location}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Thời gian</label>
            <input type="text"  name="job_time" class="form-control" value="{{$job-> job_time}}">
          </div>  
          <button type="submit" class="btn btn-primary me-2" name="add_job">Cập nhật</button>
        </form>
      </div>        
      @endforeach 
    </div>
  </div>
  @endsection