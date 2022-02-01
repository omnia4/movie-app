<div class="col mt-5 ">
    <a href="{{route('tv.show',$tvshow['id'])}}"><img src="{{$tvshow['poster_path']}}"  height="300" weight="300" alt="poster" class="imgboster"></a>
    <div class="mt-2">
        <a href="{{route('tv.show',$tvshow['id'])}}" class="text-lg mt-2 text-light text-decoration-none  "><h2>{{$tvshow['name']}}</h2> </a>
        <div class=" flex  text-light">
            <span><i class="fas fa-star text-warning"></i></span>
            <span class="ml-1">{{$tvshow['vote_average']}}</span>
            <span class="mx-2">|</span>
            <span>{{$tvshow['first_air_date']}}</span>

            </div>
        <div class="text-light ">
            {{$tvshow['genres']}}


        </div>

      </div>


</div><!-- film boster 1 -->
