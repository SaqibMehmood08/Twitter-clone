@extends('layouts.app')

@section('content')

  <!-- sidebar ends -->

  <!-- feed starts -->

  <section class="layout">

    <i class="fa-solid fa-arrow-up-to-line"></i>
    <div class="container ">
      <div class="row" >
        <div class="col-3 " style=" border-right:0.1mm solid rgb(238, 234, 234) ;">
          <div class="sidebar   ">
            @include('sidebar')
          </div>
        </div>
        <div class="col-6"style="">
          <div class="article">
            @include('article')
          </div>
        </div>
        <div class="col-3">
          <div class="addSide">
            @include('addSide')
          </div>
        </div>
      </div>
     
      
     
    </div>
  </section>

@endsection
