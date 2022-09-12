<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ url('/css/main.css') }}">

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    {{-- font awesome link --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    {{-- Google fonts icon link --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- bootsrap 4 --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</head>


<body>
    <form action="/home" method="get">
        <div class="container ">
            <div class="row ">
                <div class="col-9  p-2">
                    <div class="p-1" style="position:relative;height: 100%; width: 100%; object-fit: fill;border:1px solid black" >
                        <button type="submit" class="close"> <span>&times;</span></button>
                        <img class="w-100" style='height: 50%; width: 100%; object-fit: fill'
                            src="/storage/{{ $game->image }}" alt="">
                    </div>
                </div>

                <div class="col-3  p-3">
                    <div class="div14 w-25  d-flex  ">
                        <img class="rounded-circle profile1 p-2"
                            src="https://images.unsplash.com/photo-1579591919791-0e3737ae3808?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=250&ixid=MnwxfDB8MXxyYW5kb218MHx8cHJvZmlsZXx8fHx8fDE2NjA5OTExNDc&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200"
                            alt="">
                        <a href="">
                            <strong> {{ $game->user->email }}</strong>
                        </a>
                        <div class="text-dark"> {{ $game->user->username }}</div>

                    </div>


                    <strong class="m-2 text-primary">
                        {{ $game->tweet }}</strong>
                    <div class="div17 mt-1 ">


                        <a href="">
                            <img class="media"
                                src="https://img.icons8.com/material-outlined/20/000000/speech-bubble-with-dots.png" />
                        </a>
                        {{-- Retweet --}}
                        <a href="" class="m-3">
                            <img class="media " src="https://img.icons8.com/material-outlined/24/000000/retweet.png" />
                        </a>
                        {{-- Like --}}
                        <a href=""class="m-4">
                            <img class="media "
                                src="https://img.icons8.com/material-outlined/24/000000/filled-like.png" />
                        </a>
                        {{-- share --}}
                        <a href="">
                            <img class="media "
                                src="https://img.icons8.com/material-outlined/24/000000/share-rounded.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
