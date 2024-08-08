<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function postpage()
    {
        return view('admin.addpost');
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

    $post->post_status='active';
    $post->save();

    return redirect()->back()->with('message','successful add the post');
}
public function showpost()
{
    $show = Post::all();
    $total=0;
    $sh = Post::where('post_status','=','pending')->get();
    
foreach($sh as $sh)
    {
    
        $total++;
    }



// dd($total);


    return view('admin.showpost',compact('show','total'));



}
public function deletepost($id)
{
    $delete=Post::find($id);
            $des='blog/image/'.$delete->image;
          
        if(File::exists($des))
        {
            File::delete($des);
        }


    $delete->delete();
    return redirect()->back();
}
public function edit($id)
{
    $edit=Post::find($id);
return view('admin.edit',compact('edit'));
}
public function accept($id)
{
  $accept=Post::find($id);
  $accept->post_status='active';
  $accept->save();
  return redirect()->back();
}
public function reject($id)
{
  $reject=Post::find($id);
  $reject->post_status='reject';
  $reject->save();
  return redirect()->back();
}
public function editsubmit(Request $request)
{
    if(Auth::id())
    {

     $user=Auth::user();
    $user_id=$user->id;
    $usertype=$user->usertype;
    $user_name=$user->name;
    $post=Post::find($request->id);


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

    $post->post_status='active';
    $post->save();
  return redirect()->back()->with('message','successful Edit the post');
}
else
{
    return redirect('login');
}
}
}
