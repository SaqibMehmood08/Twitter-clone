<?php
namespace App\Http\Controllers;
use App\Models\User;
use  App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{ public function __construct()
{
$this->middleware('auth');
}
   
    public function index(){
    $data=request()->validate([
    
    'tweet'=>'max:255',
    'image'=> 'required|image',

    ]);
    $imagePath=(request('image')->store('uploads','public'));
    $image=Image::make(public_path("storage/{$imagePath}"))->fit(600,600);

    $image->save();
    auth()->user()->posts()->create([
    'tweet'=>$data['tweet'],
    'image'=> $imagePath
    ]);
    return redirect()->back()->with('message', 'Tweet sent ');
    }

   //return following user  data
    public function posts()
    {
    $users=auth()->user()->following()->pluck('profiles.user_id');
    $posts=Post::whereIn('user_id', $users)->with('user')->latest()->get();
    return view('home',compact([
    'posts',
   
    ]));
    }
// post in detailed in profile blade
  public function getDetail(Post $id){
  return view('profile', ['game' => $id]);
  }
    // fetch 
}
