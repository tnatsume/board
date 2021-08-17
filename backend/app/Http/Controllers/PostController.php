<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
use Log;
class PostController extends Controller
{
    public function list(Request $req, $id){
        $block = \App\block::GetPrefName($id);
        // dd($block->pref_id);
        $posts = \App\post::GetPostByPref($block->pref_id);
        // dd($posts);
        $count = $posts->count();

        $hash = array(
            'block' => $block,
            'posts' => $posts,
            'count' => $count,
        );
        return view('posts.list')->with($hash);

    }

    public function create($id){
        $block = \App\block::GetPrefName($id);
        $prefs = \App\block::GetBlock($block->block_id);
        $token = Str::random(32);

        $hash = array(
            'block' => $block,
            'prefs' => $prefs,
            'id'    => $id,
            'token' => $token,
        );

        return view('posts.create')->with($hash);
    }

    public function post(\App\Http\Requests\PostRequest $request){

        $block = \App\block::GetPrefName($request->pref_id);
        DB::beginTransaction();
        try{
            \App\Post::RequestSave($request, $block->block_id);
            DB::commit();

        }catch(Exception $e){
            DB::rollback();
            Log::error('DBの書込みに失敗しました。');
            return redirect()->back();
        }
        return redirect()->back('/post/'. $request->pref_id);
    }


}
