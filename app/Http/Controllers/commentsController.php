<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class commentsController extends Controller
{
    public function add_comment(Request $request){
        $new_comment = new Comments();
        $new_comment->user_id = $request->user_id;
        $new_comment->media_id = $request->media_id;
        $new_comment->text = $request->text;
        $new_comment->save();
    }
    public function delete_comment_by_id(Request $request){
        Comments::destroy($request->id);
    }
    public function update_comment_by_id(Request $request){
        Comments::where('id', $request->id)->update(['user_id'=>$request->user_id, 'media_id'=>$request->media_id, 'text'=>$request->text]);
    }
    public function get_comments(Request $request){
        return Comments::all();
    }
    public function get_comment_by_id(Request $request){
        return Comments::where('id', $request->id)->first();
    }
}
