<div class="SearchBox ">
    <form class="dropdown">
        <input id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="form-control  w-100 SearchBox" type="search" placeholder="Search...">
        <div class="dropdown-menu w-25" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Action</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
        </div>
    </form>

</div>


<div class="card  cardsS">



    <div class="card-body profiles text-center 
p-3 " id="sticky-sidebar">
        <h3 class="text-start m-3">Who to follow</h3>
 
        

        <div class="row user mb-1  p-3 ">
            <div class="col-4 ">
                <img src="/storage/{{$user->profile->profile}}"
                    class="rounded-circle w-75 p-1" alt="">
            </div>

            <div class="col-5 ">
                <div class="username">
                    <a href="/profile/{{$user->id}}/edit">{{ $user->email }}</a>
                    <div class="userId">
{{ $user->username }}
                    </div>
                </div>
            </div>

            <div class="col-3 ">
                <div id="app">
         <example-component user-id="{{ $user->id }}"></example-component>

                  <script src="/js/app.js"></script>
                </div>
            </div>
        </div>

      


           



        <div class="row user card-body mt-3">

            <a href="" class="more">
                <h4>Read more</h4>
            </a>
        </div>


    </div>


</div>
