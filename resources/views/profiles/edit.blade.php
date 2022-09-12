@extends('layouts.app')

@section('content')
<section class="layout">

    <i class="fa-solid fa-arrow-up-to-line"></i>
    <div class="container">
      <div class="row" >
        <div class="col-2" style=" border-right:0.1mm solid rgb(220,220,220) ;">
          <div class="sidebar">
            @include('sidebar')
          </div>
        </div>
        <div class="col-7"style="">
          <div class="article">
            @include('profiles.userDetails')
          </div>
        </div>
        <div class="col-3">
          <div class="addSide">
            @include('profiles.addSide')
          </div>
        </div>
      </div>
      
     
    </div>
  </section>
@endsection
