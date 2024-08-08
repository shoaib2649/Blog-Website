<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    public function homepage()
    {
        $post = Post::where('post_status','=','active')->get();

        return view('home.homepage',compact('post'));
    }
    public function createpost()
    {
        return view('home.createpost');
    }
    public function postsubmit(Request $request)
    {
        $user=Auth::user();
    $user_id=$user->id;
    $usertype=$user->usertype;
    $user_name=$user->name;
    $post=new Post;
    $post->name=$user_name;
    $post->title=$request->title;
    $post->description=$request->description;
    $post->user_id=$user_id;
    $post->usertype=$usertype;
    if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=time().".".$file->getClientOriginalName();
            $file->move(public_path('blog/image'),$extension);
        $post->image=$extension;

        }

    $post->post_status='pending';
    $post->save();

    return redirect()->back()->with('message','successful add the post');
    }
    public function viewpage($id)
    {
        $post=Post::all();
     $view=Post::find($id);
     return view('home.viewpage',compact('view','post'));   
    }
    public function index()
    {
        if(Auth::id())
        {
       
        $usertype = Auth::user()->usertype;
        if($usertype=='user')
        {
      $post = Post::where('post_status','=','active')->get();
       return view('home.homepage',compact('post'));

        }
        else
        {
            return view('admin.adminhome');
        }
    }
    else
    {
        return redirect('/login');
    }
    }

}
