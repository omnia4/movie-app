@extends('layouts.main')

@section('content')


<div class="movie-info border-bottom border-secondary">


    <div class="container mx-auto px-4 py-16 flex">
        <div class="row">
          <div class="col-sm-6 mt-3 mb-2">
               <img src="{{$movie['poster_path']}}" alt="poster" width="450" height="500">

          </div><!-- image -->
          <div class="col-sm-6 mt-5">
              <h2 class="text-light ">{{$movie['title']}}</h2>


            <div class=" flex  text-light">
                <span><i class="fas fa-star text-warning"></i></span>
                <span class="ml-1">{{$movie['vote_average']}}</span>
                <span class="mx-2">|</span>
                <span>{{$movie['release_date']}}</span>
                <span class="mx-2">|</span>

                <span >
 {{--@foreach ($movie['genres'] as $genre)
            {{$genre['name']}} @if (!$loop->last),@endif

            @endforeach--}}
            {{$movie['genres']}}

        </span>

                </div>
                <p class="mt-5 text-light">{{$movie['overview']}}</p>
                <div class="mt-5">
                    <h4 class="text-light ">Featured Cast</h4>
                    <div class="mt-4">
                        @foreach ($movie['crew'] as $crew)



                                                <div class="col-sm-7">
                                                    <div class="text-light"> {{$crew['name']}}</div>
                                                    <div class="text-light text-small">{{$crew['job']}}</div>

                                                </div><!-- actor 1 -->



                        @endforeach

                        @if (count($movie['videos']['results'] )>0)

                        <div class="mt-5">
                         <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" type="button" class="btn btn-warning mb-3"><i class="far fa-play-circle"></i> Play Trailer</a>

                        </div>
                        @endif

                    </div>
                </div>
            </div><!-- details -->
        </div>

      </div>
</div><!-- end movie info -->
<div class="container border-bottom border-secondary">
<h2 class=" text-light mt-4  ">Cast</h2>
<div class="row">
    @foreach ($movie['cast'] as $cast)

    <div class="col text-light"><a href="{{route('actors.show' , $cast['id'])}}" class="text-decoration-none"><img src="{{'https://image.tmdb.org/t/p/w200'.$cast['profile_path']}}"  width="200" height="200" class="mt-3"alt="actor1"><h4 class="mt-3  text-light">{{$cast['name']}}</h2></a>
        <h6>{{$cast['character']}}</h6>
    </div>



   @endforeach



  </div>
</div><!-- cast -->
<div class="container">
    <h2 class=" text-light mt-4  ">Images</h2>
    <div class="row">
        @foreach ($movie['images'] as $image)

    <div class="col"><img src="{{'https://image.tmdb.org/t/p/w300'.$image['file_path']}}"  width="300" height="300" class="mt-3"alt="1"></div>

   @endforeach

      </div>

</div>
<footer class="bg-dark pb-4 pt-4 mt-5">
    <div class="container">
        <div class="text-center">
            <h3 class="text-light">Movies</h3>
            <p class=" text-light ">copyright &copy; 2022</p>



        </div>

    </div><!-- container -->

</footer>
@endsection
