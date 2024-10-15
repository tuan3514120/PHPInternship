@extends('admin_layout')
@section('admin_content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Nghề nghiệp</h4>
              <?php
              $message= Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  Session::put('message',null);
              }
              ?>
                      <br><br>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>Tên nghề nghiệp</th>
                        <th>Danh mục</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Yêu cầu</th>
                        <th>Lương</th>
                        <th>Địa chỉ</th>
                        <th>Thời gian</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_job as $key => $job)
                    <tr>
                        <td>{{$job->job_name}}</td>
                        <td>{{$job->category_name}}</td>
                        <td><img src="public/uploads/job/{{$job -> job_image}}" height="500" width="500"></td>
                        <td>{{$job->job_desc}}</td>
                        <td>{{$job->job_requirement}}</td>
                        <td>{{$job->job_price}}</td>
                        <td>{{$job->job_location}}</td>
                        <td>{{$job->job_time}}</td>
                        <td><span class="text-ellipsis">
                            <?php
                        if($job -> job_status==0){
                        ?>
                            <a href="{{URL::to('/unactive-job/'.$job -> job_id)}}">Ẩn</a>
                        
                            <?php
                            }else{
                        ?>
                           
                        
                            <a href="{{URL::to('/active-job/'.$job -> job_id)}}">Hiện</a>
                            <?php
                        }
                             
                        ?>
                        </span></td>
                        
              <td>
                <a href="{{URL::to('/edit-job/'.$job -> job_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-job/'.$job -> job_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-trash text-danger text"></i>
                </a>
                </td>
            </tr>
        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection