@extends('admin_layout')
@section('admin_content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">CV</h4>
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
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Ghi chú</th>
                        <th>File</th>
                        <th>Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_cv as $key => $cv)
                    <tr>
                        <td>{{$cv->cv_name}}</td>
                        <td>{{$cv->cv_email}}</td>
                        <td>{{$cv->cv_note}}</td>
                        <td><img src="public/uploads/cv/{{$cv -> cv_image}}" height="000" width="500"></td>
              <td>
                <a href="{{URL::to('/show-cv/'.$cv -> cv_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-info text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-cv/'.$cv -> cv_id)}}" class="active styling-edit" ui-toggle-class="">
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