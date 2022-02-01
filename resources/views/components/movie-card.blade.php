<div class="col mt-5 ">
    <a href="{{route('movies.show',$movie['id'])}}"><img src="{{$movie['poster_path']}}"  height="300" weight="300" alt="poster" class="imgboster"></a>
    <div class="mt-2">
        <a href="{{route('movies.show',$movie['id'])}}" class="text-lg mt-2 text-light text-decoration-none  "><h2>{{$movie['title']}}</h2> </a>
        <div class=" flex  text-light">
            <span><i class="fas fa-star text-warning"></i></span>
            <span class="ml-1">{{$movie['vote_average']}}</span>
            <span class="mx-2">|</span>
            <span>{{$movie['release_date']}}</span>

            </div>
        <div class="text-light ">
            {{$movie['genres']}}


        </div>

      </div>


</div><!-- film boster 1 -->
