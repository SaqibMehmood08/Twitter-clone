<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class profilesController extends Controller
{

public function index(User $user)
 {

  $follows= (auth()->user()) ? auth()->user()->following->contains($user->id):false;

  $user=User::find($user);
   return view('home',compact([
   'user',
   'follows'
   ]));

 }
 public function edit(User $user){

  return view('profiles.edit',compact('user'));
 }
  
  public function set(User $user){
  
  return view('profiles.set',compact('user'));
  } 

    public function update(User $user){
  

   $data=request()->validate([
    'username'=>'max:50',
    'bio'=>'max:255',
    'location'=> 'max:255',
    'website'=> 'url',
    'cover'=> '',
    'profile'=> '',
   ]);
if(request('cover')){
$imagePath=(request('cover')->store('profile','public'));
$cover=Image::make(public_path("storage/{$imagePath}"))->fit(400,400);
$cover->save();
$coverArray=['cover'=>$imagePath];
}
if(request('profile')){
$profilePath=(request('profile')->store('profile','public'));
$profile=Image::make(public_path("storage/{$profilePath}"))->fit(100,100);
$profile->save();
$profileArray=['profile'=>$profilePath];
}

auth()->user()->profile->update(array_merge(
$data,
$coverArray ?? [],
$profileArray ?? [],

));
 return redirect("/profile/{$user->id}/edit");

}

// fetch users for follow suggetion
public function suggetions(){
  // User::all();
} 
}