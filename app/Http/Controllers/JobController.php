<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class JobController extends Controller
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
    public function add_job(){
        $this->check();
        $cate_job =DB::table('category')->orderBy('category_id','desc')->get();
        return view('admin.job.add_job')->with('cate_job',$cate_job);
    }
    public function all_job(){
        $this->check();
        $all_job = DB::table('job')
        ->join('category','category.category_id','=','job.category_id')
        ->orderby('job.job_id','desc')->paginate(5);
        $manager_job = view('admin.job.all_job') -> with('all_job',$all_job);
        return view('admin_layout')-> with('admin.job.all_job',$manager_job);
    }

    public function save_job(Request $request){
        $this->check();
        $data = array();
        $data['job_name'] = $request ->job_name;
        $data['category_id'] = $request ->job_cate;
        $data['job_desc'] = $request ->job_desc;
        $data['job_requirement'] = $request ->job_requirement;
        $data['job_price'] = $request ->job_price;
        $data['job_location'] = $request ->job_location;
        $data['job_time'] = $request ->job_time;
        $data['job_status'] = $request ->job_status;
        $get_image= $request-> file('job_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/job',$new_image);
            $data['job_image'] = $new_image;
            DB::table('job')->insert($data);
            Session::put('message','Thêm nghề nghiệp thành công');
            return Redirect::to('all-job');
        }
        $data['job_image'] = '';
            DB::table('job')->insert($data);
            Session::put('message','Thêm nghề nghiệp thành công');
            return Redirect::to('all-job');

    }
    public function unactive_job($job_id){
        $this->check();
        DB::table('job')->where('job_id',$job_id)->update(['job_status'=>1]);
        Session::put('message','Trạng thái: Đã ẩn');
        return Redirect::to('all-job'); 
    }
    public function active_job($job_id){
        $this->check();
        DB::table('job')->where('job_id',$job_id)->update(['job_status'=>0]);
        Session::put('message','Trạng thái: Hiển thị');
        return Redirect::to('all-job'); 

    }
    public function edit_job($job_id){
        $this->check();
        $cate_job = DB::table('category')->orderby('category_id','desc')->get();
        $edit_job = DB::table('job')->where('job_id',$job_id)->get();
        $manager_job = view('admin.job.edit_job') -> with('edit_job',$edit_job)->with('cate_job',$cate_job);
        return view('admin_layout')-> with('admin.job.edit_job',$manager_job);
    

    }
    public function update_job(Request $request, $job_id){
        $this->check();
        $data = array();
        $data['job_name'] = $request ->job_name;
        $data['category_id'] = $request ->job_cate;
        $data['job_desc'] = $request ->job_desc;
        $data['job_requirement'] = $request ->job_requirement;
        $data['job_price'] = $request ->job_price;
        $data['job_location'] = $request ->job_location;
        $data['job_time'] = $request ->job_time;
        $get_image =$request->file('job_image');
        if($get_image){
            
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/job',$new_image);
            $data['job_image'] = $new_image;
            DB::table('job')->where ('job_id',$job_id) -> update($data);
            Session::put('message','Cập nhật nghề nghiệp thành công');
            return Redirect::to('all-job');
        }
            DB::table('job')->where ('job_id',$job_id) -> update($data);
           
            Session::put('message','Ảnh trống!');
            return Redirect::to('all-job');
    }
//
public function delete_job($job_id){
    $this->check();
    DB::table('job')->where ('job_id',$job_id) -> delete();
    Session::put('message','Xóa nghề nghiệp thành công');
    return Redirect::to('all-job');
}

public function job_detail($job_id){
    $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
    $job_detail = DB::table('job')
    ->join('category','category.category_id','=','job.category_id')
    ->where('job.job_id',$job_id)->get();
    return view('pages.job.job_detail')->with('category',$cate_job)->with('job_detail',$job_detail);
}
}
