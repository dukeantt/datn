<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserNewsController extends Controller
{
    public function index()
    {
        $obj = News::orderBy('created_at','desc')->get();
        $obj_category = Category::where('status',1)->get();
        $popular = News::orderBy('views','desc')->take(5)->get();

        $best4 = News::where('hot', 1)->orderBy('views','desc')->take(4)->get();
        $best4 = array_chunk ($best4->all(), 2);
        $best2 = $best4[0];
        if (isset($best4[1])){
            $best4 = $best4[1];
        } else {
            $best4 = [];
        }
        return view('user.news')
            ->with('obj',$obj)
            ->with('best4',$best4)
            ->with('best2',$best2)
            ->with('popular',$popular)
            ->with('obj_category',$obj_category);
    }

    public function postComment(Request $request, $id){
        $comment = new Comment;
        $comment->username = $request->username;
        $comment->email = $request->email;
        $comment->content = $request->com_content;
        $comment->id_news = $id;
        $comment->save();
        return back();

    }
}
