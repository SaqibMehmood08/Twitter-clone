@extends('layouts.app')

@section('content')
    <section class="layout">

  <div class="container ">
            <div class="profileSubmit ">
  <form action="/update/{{$user->id}}/update" enctype="multipart/form-data" method="POST" >
    @csrf
    @method('PATCH')
                <div class="box box1">
                  {{-- https://images.unsplash.com/photo-1474978528675-4a50a4508dc3?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=MnwxfDB8MXxyYW5kb218MHx8cHJvZmlsZXx8fHx8fDE2NjIyNzk4NDY&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=300 --}}
                    <img class="w-100 "
                        src="/storage/{{$user->profile->cover}}"
                        alt="">

                 
                      
                      
                <div class="bottom-left">
<input type="file" name="profile" id="mgupload" style="display:none">
        <a href="#" onclick="$('#mgupload').trigger('click'); return false;"><img
                src="" alt="">

  <img class="rounded-circle"
   src="/storage/{{$user->profile->profile}}" />

              </a>

                    </div>
               
               
               
                    <div class="centered">

           <input type="file" name="cover" id="imgupload" style="display:none">
        <a href="#" onclick="$('#imgupload').trigger('click'); return false;"><img
                src="https://img.icons8.com/material-outlined/24/FFFFFF/camera--v1.png" alt=""></a>
 
                    </div>
                </div>


                <div class="alert mt-5 alert-success" role="alert">

  <div class="form-group mb-3">
    
    <input type="text" value="{{$user->profile->username}}" name="username" class="form-control " id="exampleInputName1" aria-describedby="NameHelp" >
 
  </div>
<div class="form-group mb-3">

    <textarea name="bio" placeholder="{{$user->profile->tweet ?? 'Bio'}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="form-group mb-3">

    <input name="location" value="{{$user->profile->location ?? 'Location'}}"  type="text" class="form-control" id="exampleInputPassword1" >
  </div>

    <div class="form-group mb-3">

    <input name="website" value="{{$user->profile->website ?? 'Website'}}" type="text" class="form-control" id="exampleInputPassword1" >
  </div>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">profile</label>
  <input class="form-control" type="file" id="formFileDisabled" >
</div>

  <div class="form-group mb-3">
 <label class="form-check-label" for="exampleCheck1">Birth date .</label>
 

 
 <a href="">Edit</a>
</div>

<div class="form-group mb-3 ">
<h3 class="Switch">Switch to Preofessional Account</h3>
</div>

<button type="submit" class="btn btn-primary">Save Profile</button>
</form>
                </div>
            </div>
        </div> 

    </section>
@endsection
