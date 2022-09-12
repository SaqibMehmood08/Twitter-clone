<div class="container-fluid">

    <button type="submit" class="close rounded-3">
        <img class="w-100" src="/storage/{{ $user->profile->cover }}" />
    </button>
    <div class="row">
        <div class="col-12">


        </div>
        <div class="row m-1 mt-3 ">
            <div class="col-12 ">
                @can('view', $user->profile)
                    <example-component user-id="{{ $user->id }}"></example-component>
                @endcan
                @can('update', $user->profile)
                    <a href="/pro/{{ $user->id }}/set  " class="d-flex"style="justify-content:flex-end">
                        <button class="btn btn-dark"
                            style="align-items: baseline ;border-radius:1rem; margin-left:1.5rem;">Edit Profile
                        </button>
                    </a>
                @endcan



                 {{-- <form action="/home" method="get">  --}}


                <h6 class="" name="">{{ $user->name }}</h6>
                <span class="" name="username">{{ $user->username }}</span>
                <div class=" mt-3 mb-1" name="username">
                    <img src="https://img.icons8.com/material-outlined/24/000000/calendar-12.png" /> joined
                    {{ $user->created_at }}
                </div>
                <span class="follwing mt-1">{{ $user->following->count() }}Followings &nbsp;&nbsp;&nbsp;</span>
                <span>{{ $user->profile->followers->count() }}followers</span>

            </div>
        </div>

    </div>
    <div class="row mt-3 p-2">
        <div class="col-12">
            <a href="#demos" class="btn btn-light mx-4" data-toggle="collapse">Tweets</a>
            <a href="#demo" class="btn btn-light mx-4" data-toggle="collapse">Tweets $ reply</a>
            <a href="#media" class="btn btn-light mx-4" data-toggle="collapse">Media</a>
            <a href="#likes" class="btn btn-light mx-4" data-toggle="collapse">Likes</a>
            <div id="demos" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="demo" class="collapse">
                ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="media" class="collapse">
                dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="likes" class="collapse">
                dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>


    </div>
</div>
