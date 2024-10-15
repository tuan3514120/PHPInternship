@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm nghề nghiệp</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/save-job')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên nghề nghiệp</label>
            <input type="text" name="job_name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Danh mục</label>
              <select name="job_cate" class="form-control" id="exampleSelectGender">
                @foreach($cate_job as $key =>$cate)
                <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                @endforeach
              </select>
            </div>  
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh</label>
              <input type="file" name="job_image" class="form-control" id="exampleInputEmail1" placeholder="Ảnh...">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Mô tả nghề nghiệp</label>
            <input type="text" name="job_desc" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Yêu cầu nghề nghiệp</label>
            <input type="text" name="job_requirement" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Lương</label>
            <input type="text"  name="job_price" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Địa chỉ</label>
            <input type="text"  name="job_location" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Thời gian</label>
            <input type="text"  name="job_time" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Trạng thái</label>
              <select name="job_status" class="form-control" id="exampleSelectGender">
                <option value ="">--Chọn--</option>
                <option value ="0">Hiển thị</option>
                <option value ="1">Ẩn</option>
              </select>
            </div>  
          <button type="submit" class="btn btn-primary me-2" name="add_job">Thêm</button>
        </form>
      </div>
    </div>
  </div>
  @endsection