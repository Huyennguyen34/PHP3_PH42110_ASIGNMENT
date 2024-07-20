<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function all(){
    $data = DB::table('posts')
    ->limit(6)->get();
    return view('client.index', compact('data'));
   }
   public function getby(){
    $getby = DB::table('posts')
    ->limit(2)->orderBy('xem','desc')->get();
    return view('client.post-block', compact('getby'));
   }
   public function find($id)
   {
       $post = DB::table('posts')->select(['id', 'title', 'descrtiption_short', 'author', 'view', 'comment','thumbnail','text','description_long'])->find($id);
       if ($post) {
         return view('client.detail', compact('post'));
     } else {
         // Xử lý khi không tìm thấy bản ghi
         return redirect()->back()->with('error', 'Không tìm thấy bài viết.');
     }
   }
}
