<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

 use Illuminate\Support\Facades\Auth;
 use \Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Menu ;
use App\comments;
class Home1Controller extends Controller
{

  //function index for get all Posts From Voyager
    public function index(){
    $posts= Post::get();
    return view('home1',compact('posts'));  }

  //function for get Page Dynamic From voyager
  public function GetPage($name){
    if($name != ''){
    $page= Page ::where('title',$name)->first();
   //dd($page);
   if($page){
     return view('page' , compact('page'));
      }
    }
     return Redirect::back();
   }
   public function GetPost($id){

     if($id != ''){
     $post = Post ::find($id);
    //dd($page);
    if($post){
     $comments =Comments::where('post_id',$post->id)->get();
      return view('post' , compact('post','comments'));

       }
     }
      return Redirect::back();
    }


  public function AddComment(Request $request){
$comment =strip_tags($request->comment);

if($comment != ''){
$c = new comments();
$c->comment=$comment;
//dd(Auth::User()->id);
$c->user_id= Auth::User()->id;


$c->post_id =$request->post_id;
//dd($c);
$c->save();
//return Redirect::back();
$posts= Post::get();
return view('home1',compact('posts'));


}


    }


}
