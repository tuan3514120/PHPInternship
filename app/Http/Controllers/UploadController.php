<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
session_start();


class UploadController extends Controller
{
    public function upload(){
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        return view('pages.cv.upload_cv')->with('category',$cate_job);
    }
    public function upload_cv(Request $request){
        $data =array();
        $data['cv_name']=$request->cv_name;
        $data['cv_email']=$request->cv_email;
        $data['cv_note']=$request->cv_note;
        $image= $request-> file('cv_image');

        if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image-> move('public/uploads/cv',$new_image);
            $data['cv_image'] = $new_image;
            DB::table('cv')->insert($data);
            Session::put('message','Apply thành công');
            return Redirect::to('/upload');
        }
        $data['cv_image'] = '';
            DB::table('cv')->insert($data);
            Session::put('message','Apply thành công');
            return Redirect::to('/upload');    
}
    public function all_hiring(){
        $all_cv = DB::table('cv')->get();
        $manager_cv = view('admin.hiring.all_hiring') -> with('all_cv',$all_cv);
        return view('admin_layout')-> with('admin.hiring.all_hiring',$manager_cv);
}
    public function show_cv($cv_id){
        $show_cv = DB::table('cv')->where('cv_id',$cv_id)->get();
        $manager_cv = view('admin.hiring.show_hiring') -> with('show_cv',$show_cv);
        return view('admin_layout')-> with('admin.hiring.show_hiring',$manager_cv);


}
    public function delete_cv($cv_id){
        DB::table('cv')->where ('cv_id',$cv_id) -> delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all-hiring');
}
    public function all_cv(){
        $all_cv = DB::table('cv')->get();
        $manager_cv = view('admin.hiring.all_hiring') -> with('all_cv',$all_cv);
        return view('admin_layout')-> with('admin.hiring.all_hiring',$manager_cv);
}
}
