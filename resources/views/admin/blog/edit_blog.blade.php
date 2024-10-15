@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật bài viết</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/update-blog/'.$blog->blog_id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên bài viết</label>
            <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Tóm tắt bài viết</label>
            <input type="text"  name="blog_content" value="{{$blog->blog_content}}" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nội dung bài viết</label>
            <input type="text"  name="blog_desc" value="{{$blog->blog_desc}}" class="form-control" placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ảnh</label>
            <input type="file" name="post_image" class="form-control" id="exampleInputEmail1" placeholder="Ảnh...">
            <img src="{{URL::to('public/uploads/blog/'.$blog->blog_image)}}" height="100" width="100">
        </div>
          <button type="submit" class="btn btn-primary me-2">Cập nhật</button>
        </form>
      </div>
    </div>
  </div>
  @endsection