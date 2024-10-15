<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps =false;
    protected $fillable=['blog_title','blog_desc','blog_content','blog_status','blog_image'];
    protected $primaryKey='blog_id';
    protected $table='blog';
}
