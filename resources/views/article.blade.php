{{-- 2 --}}
<div class="parent">
    <div class="div1 ">
        <h4>Home</h4>
    </div>
   
    <div class="div2 ">
        <a href="">
            
        <img id="topTweets"
                src="https://img.icons8.com/material-outlined/24/228BE6/particles.png"
                 />
         </a> 
                </div>
    <div class="div3 ">
        <a href="/profile/{{auth()->user()->id}}/edit">
        <img
            class="rounded-circle w-50 "
            src="/storage/{{auth()->user()->profile->profile}}"
            alt=""> 
        </a>
    </div>



    <div class="div4">
<form  action="/p"  enctype="multipart/form-data"  method="post" >
            @csrf
            <input type="text"   class="tweetMessage" placeholder="What's happning?" name="tweet" autocomplete="off">
            @if (session()->has('message'))
                <script>
                    alert("Success");
                </script>
            @endif
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <script>
                        alert("Field is required && max words 32");
                    </script>
                @endforeach
            @endif
    </div>

    <div class="div5  WorldAccessColor pb-3">
        <a href="" class="WorldAccess">
            <img src="https://img.icons8.com/android/15/228BE6/globe.png" />
            <span class="mb-5">Everyone can reply </span>
        </a>
    </div>
    <div class="div6 pt-3 " style="border-top:0.1mm solid rgb(238, 234, 234) ;">
        {{-- image/video input --}}
        <input type="file" name="image" id="imgupload" style="display:none">
        <a href="#" onclick="$('#imgupload').trigger('click'); return false;"><img
                src="https://img.icons8.com/material-outlined/24/228BE6/video-gallery.png" alt=""></a>
        {{-- gif Uplooad --}}
        <input type="file" id="gifUpload" style="display:none">
        <a href="#" onclick="$('#gifUpload').trigger('click'); return false;"><img
                src="https://img.icons8.com/material-outlined/24/228BE6/gif.png" alt=""></a>
        {{-- pole --}}

        <a href="">
            <img class="media" src="https://img.icons8.com/material-outlined/24/228BE6/poll-topic.png" /></a>
        <img class="media" src="https://img.icons8.com/material-outlined/24/228BE6/happy--v1.png" />
        {{-- time upload --}}


        <input type="date" style="display: none">
        <a href="#">
            <img id="datepicker" src="https://img.icons8.com/material-outlined/24/228BE6/overtime.png"
                alt=""></a>





        <script>
            $(document).ready(function() {
                $("#datepicker").click(function() {
                    var retVal = prompt("Enter date: ", );

                });
            });
        </script>


        {{--  --}}
        <img class="media" src="https://img.icons8.com/material-outlined/24/228BE6/marker.png" />
    </div>
    <div class="div7">
        <button type="submit"  class="btn btn-primary mt-3">Tweet</button>
    </div>
    </form>
</div>
<div class="div8 ">
    @include('userPosts')

</div>
