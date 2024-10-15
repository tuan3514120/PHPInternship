@extends('admin_layout')
@section('admin_content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bài viết</h4>
              <?php
              $message= Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  Session::put('message',null);
              }
              ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>Tên bài viết</th>                 
                        <th>Ảnh</th> 
                        <th>Tóm tắt bài viết</th>      
                        <th>Mô tả bài viết</th>              
                        <th>Hiển thị</th>
                        <th>Tùy chọn</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_blog as $key => $blog)
                    <tr>
                        <td>{{$blog->blog_title}}</td>
                        <td><img src="public/uploads/blog/{{$blog->blog_image}}" height="500" width="500"></td>
                        <td>{{$blog->blog_content}}</td>
                        <td>{{$blog->blog_desc}}</td>
                        <td><span class="text-ellipsis">
                            <?php
                        if($blog ->blog_status==0){
                        ?>
                            <a href="{{URL::to('/unactive-blog/'.$blog ->blog_id)}}">Ẩn</a>
                        
                            <?php
                            }else{
                        ?>
                           
                        
                            <a href="{{URL::to('/active-blog/'.$blog ->blog_id)}}">Hiện</a>
                            <?php
                        }
                             
                        ?>
                        </span></td>
                        
              <td>
                <a href="{{URL::to('/edit-blog/'.$blog -> blog_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-blog/'.$blog ->blog_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-trash text-danger text"></i>
                </a>
              </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                {{$all_blog->links()}}
                <br>
                 
              </div>
            </div>
          </div>
        </div>
@endsection