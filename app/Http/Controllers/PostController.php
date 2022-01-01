<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Dislike;
use App\Models\Like;
use App\Post;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;
// use Illuminate\Http\Concerns\InteractsWithInput::hasFile;


class PostController extends Controller
{
    public function post()
    {
        $post = Post::all();
        return view('Post.post' , ['post'=> $post]);
    }

    public function view($post_id)
    {
      $posts = Post::where('id','=', $post_id )->get();
      $likePost = Post::find($post_id);
      $likeCtr = Like::where(['post_id' => $likePost])->count();
      $dislikeCtr = Dislike::where(['post_id' => $likePost])->count();

      $comments = DB::table('users')
                  ->join('comments' , 'users.id', '=' , 'comments.user_id')
                  ->join('posts' , 'comments.post_id' , '=' ,'posts.id')
                  ->select('users.name' , 'comments.*')
                  ->where(['posts.id' => $post_id])
                  ->get();           
      //  var_dump($likePost->id);
      // return $likeCtr;
      // exit();
      return view('Post.View',['posts'=> $posts , 'likeCtr' => $likeCtr , 'dislikeCtr' => $dislikeCtr ,
            'comments' => $comments]);
    }

    public function edit($post_id)
    {
      $posts = Post::find($post_id);
      return view('Post.Edit' , ['posts' => $posts]);
    }

    public function editpost(Request $request,$post_id)
    {
      $this->validate($request,[
        'post_title' => 'required',
        'post_body' => 'required',
        'post_image' => 'required',
    ]);

    $post = new Post();

    $post->post_title =  $request->input('post_title');
    $post->user_id = Auth::User()->id;
    $post->post_body =  $request->input('post_body');
  //   $post->post_image =  $request->input('post_image');
     
  //   $name = $request->file('post_image')->getClientOriginalName();
  //   $path = $request->file('post_image')->store('');

    if($request->hasFile('post_image')){
        $file = $request->file('post_image');
        $file->move(public_path(). '/posts/',
        $file->getClientOriginalName());

        $url = URL::to('/') . '/posts/'. $file->getClientOriginalName();
    }

    $post->post_image = $url;
  //   $post->post_image = $path;
      $data = array(
        'post_title' => $post->post_title,
        'user_id' => $post->user_id,
        'post_body' => $post->post_body,
        'post_image' => $post->post_image,
      );
      
      Post::where('id' , $post_id)->update($data);
    $post->update();
    return redirect('/home')->with('status' , 'Post Updated Successfully');


    }

    public function deletePost($post_id)
    {
      Post::where('id' , $post_id)->delete();

      return redirect('/home')->with('status' , 'Post Deleted');
    }



    public function addPost(Request $request)
    {
      $this->validate($request,[
          'post_title' => 'required',
          'post_body' => 'required',
          'post_image' => 'required',
      ]);

      $post = new Post();

      $post->post_title =  $request->input('post_title');
      $post->user_id = Auth::User()->id;
      $post->post_body =  $request->input('post_body');
    //   $post->post_image =  $request->input('post_image');
       
    //   $name = $request->file('post_image')->getClientOriginalName();
    //   $path = $request->file('post_image')->store('');
 
      if($request->hasFile('post_image')){
          $file = $request->file('post_image');
          $file->move(public_path(). '/posts/',
          $file->getClientOriginalName());

          $url = URL::to('/') . '/posts/'. $file->getClientOriginalName();
      }

      $post->post_image = $url;
    //   $post->post_image = $path;
      $post->save();
      return redirect('/home')->with('status' , 'Post Added Successfully');

    }

    public function Like($id)
    {
        $loggedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id' => $loggedin_user , 'post_id' => $id])->first();
        if(empty($like_user->user_id) )
        {
          $user_id = Auth::user()->id;
          $email= Auth::user()->email;
          $post_id = $id;
          $like = new Like();
          $like->user_id = $user_id;
          $like->email = $email;
          $like->post_id = $post_id;
          $like->save();
          return redirect('/view/{$id}');

        }else{
          return redirect('/view/{$id}');
        }
     }

     public function Dislike($id)
     {
         $loggedin_user = Auth::user()->id;
         $like = new Like();
         
         $like_user = Dislike::where(['user_id' => $loggedin_user , 'post_id' => $id])->first();
         if(empty($like_user->user_id))
         {
           $user_id = Auth::user()->id;
           $email= Auth::user()->email;
           $post_id = $id;
           $like = new Dislike();
           $like->user_id = $user_id;
           $like->email = $email;
           $like->post_id = $post_id;
           $like->save();
           return redirect('/view/{$id}');
 
         }else{
           return redirect('/view/{$id}');
         }
      }

      public function comment(Request $request, $post_id)
      {
        $this->validate($request,[
          'comment' => 'required',
      ]);
       $comment = new comment();
       $comment->user_id = Auth::user()->id;
       $comment->post_id =  $post_id;
       $comment->comment = $request->input('comment');
       $comment->save();

       return redirect('/view/{$post_id}')->with('status' , 'comment Added Successfully');
        
      // return($post_id);
      }



}
