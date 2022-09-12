<a href="" class="divBox">

    @foreach ($posts as $post)
  
    <div class="parent2 wreppper mt-3">
        <div class="div11  mb-2">
        </div>
        <div class="div12">
            <img class="rounded-circle" style=" width:4%; margin-right:1rem"
                src="https://img.icons8.com/fluency-systems-regular/48/000000/speech-bubble-with-dots.png" />
            <a href="/profile/{{$post->user->id}}"class=" divBox2">{{$post->user->carrier}}</a>

            <a href="/profile/{{$post->user->id}}" class="divBox2"><strong>See more</strong>
            </a>
        </div>
        <div class="div13">

        </div>
        <div class="div14">
            <img class="rounded-circle profile1" style="margin-right:1.8rem"
                src="/storage/{{$post->user->profile->profile}}"
                alt="">


        </div>
        <div class="div15">

            <div>

                <a  href="/profile/{{$post->user->id}}" class="divBox2 ">
                    <strong>
                        <p>{{ $post->user->email }}</p>
                    </strong>
                </a>
                <span class="text-dark">{{ $post->user->username }}</span>
                <a  href="/profile/{{$post->user->id}}"><span>{{ $post->user->created_at }}</span></a>
            </div>
        </div>

        <div class="div16 ">
            <a href="/profile/{{$post->id}}" style="text-decoration: none">
                <span name="tweet"> {{ $post->tweet }} </span>
            </a>
            <a  href="/profile/{{$post->id}}">
                <img class="img-fluid mb-2 mt-2 w-100 h-50  rounded-4" src="/storage/{{ $post->image }}"
                    alt="//">
            </a>



            <div class="div17">
                <a href=""> <img class="media"
                        src="https://img.icons8.com/material-outlined/20/000000/speech-bubble-with-dots.png" />
                </a>
                {{-- Retweet --}}
                <a href="" class="m-5">
                    <img class="media " src="https://img.icons8.com/material-outlined/24/000000/retweet.png" />
                </a>
                {{-- Like --}}
                <a href=""class="m-5">
                    <img class="media " src="https://img.icons8.com/material-outlined/24/000000/filled-like.png" />
                </a>
                {{-- share --}}
                <a href="">
                    <img class="media " src="https://img.icons8.com/material-outlined/24/000000/share-rounded.png" />
                </a>
            </div>
        </div>

        <div class="div18 ">
            <a href="##">
                <img class="media" src="https://img.icons8.com/ios/30/000000/more.png" />
            </a>
        </div>

    </div>
  @endforeach

 
</a>
