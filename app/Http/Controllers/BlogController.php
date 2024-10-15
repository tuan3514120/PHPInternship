<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Blog;
session_start();

class BlogController extends Controller
{
    public function check(){
        $admin_id= Session::get('admin_id');
        if($admin_id){
           return Redirect::to('dashboard');
        }
        else{
           return Redirect::to('admin') ->send();
        }
    }
    public function add_blog(){
        $this->check();
        return view('admin.blog.add_blog');
    }
    public function all_blog(){
        $this->check();
        $all_blog = blog::orderBy('blog_id','desc')->paginate(5);
        return view('admin.blog.all_blog')->with(compact('all_blog',$all_blog));
    }

    public function save_blog(Request $request){
        $this->check();
        $data = $request->all();
        $blog = new blog();
        $blog->blog_title = $data['blog_title'];
        $blog->blog_desc  = $data['blog_desc'];
        $blog->blog_content = $data['blog_content'];
        $blog->blog_status = $data['blog_status'];

        $get_image= $request-> file('blog_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/blog',$new_image);
            $blog->blog_image=$new_image;
            $blog->save();
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('all-blog');
        }
        $blog->blog_image='';
        $blog->save();
        Session::put('message','Ảnh trống!');
        return Redirect::to('all-blog');
    }
       
    
    public function unactive_blog($blog_id){
        $this->check();
        DB::table('blog')->where('blog_id',$blog_id)->update(['blog_status'=>1]);
        Session::put('message','Trạng thái: Đã ẩn');
        return Redirect::to('all-blog'); 
    }
    public function active_blog($blog_id){
        $this->check();
        DB::table('blog')->where('blog_id',$blog_id)->update(['blog_status'=>0]);
        Session::put('message','Trạng thái: Hiển thị');
        return Redirect::to('all-blog'); 

    }
    public function edit_blog($blog_id){
        $this->check();
        $blog=blog::find($blog_id);
        return view('admin.blog.edit_blog')->with(compact('blog'));
    

    }
    public function update_blog(request $request,$blog_id){
        $this->check();
        $data = array();
        $data['blog_title'] = $request ->blog_title;
        $data['blog_desc'] = $request ->blog_desc;
        $data['blog_content'] = $request ->blog_content;
        $get_image= $request-> file('blog_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/blog',$new_image);
            $data['blog_image'] = $new_image;
            DB::table('blog')->where ('blog_id',$blog_id) -> update($data);
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('all-blog');
        }
        DB::table('blog')->where ('blog_id',$blog_id) -> update($data);
        Session::put('message','Ảnh trống!');
        return Redirect::to('all-blog');
    }
//
public function delete_blog($blog_id){
    $this->check();
    $blog=blog::find($blog_id);
    $blog->delete();
    Session::put('message','Xóa bài viết thành công');
    return Redirect::to('all-blog');
}   

    public function show_blog(){
        
        $all_blog = DB::table('blog')->where('blog_status',0)->orderby('blog_id','desc')->paginate(9);
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        return view('pages.blog.show_blog') ->with('category',$cate_job)->with('all_blog',$all_blog);
    }
    public function blog_detail($blog_id){
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $blog_detail = DB::table('blog')  
        ->where('blog.blog_id',$blog_id)
        ->get();;
        return view('pages.blog.blog_detail') ->with('category',$cate_job)->with('blog_detail',$blog_detail);
    
    
        
}
}
