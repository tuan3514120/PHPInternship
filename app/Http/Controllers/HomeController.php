<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $all_job = DB::table('job')-> where('job_status','0')->orderby('job_id','desc')->limit(4)->get();
        $all_blog = DB::table('blog')-> where('blog_status','0')->orderby('blog_id','desc')->limit(2)->get();

        return view('pages.home')->with('category',$cate_job)->with('all_job',$all_job)->with('all_blog',$all_blog);
    }
    public function about(){
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        return view('pages.elements.about')->with('category',$cate_job);
    }
    public function contact(){
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        return view('pages.elements.contact')->with('category',$cate_job);
    }
    public function search(Request $request){
        $keyword = $request->search;
        $cate_job = DB::table('category')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $search_job=DB::table('job')->where('job_status','0')-> where('job_name','like','%'.$keyword.'%')->get();
        return view('pages.job.job_search')->with('category',$cate_job)->with('search_job',$search_job);
    }
}
