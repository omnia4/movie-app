@extends('layouts.main')

@section('content')


<div class="movie-info border-bottom border-secondary">


    <div class="container mx-auto px-4 py-16 flex">
        <div class="row">
          <div class="col-sm-6 mt-3 mb-2">
               <img class="
               mb-3" src="{{$actor['profile_path']}}" alt="profile_path"  height="">

          </div><!-- image -->
          <div class="col-sm-6 mt-5">
              <h2 class="text-light ">{{$actor['name']}}</h2>


            <div class=" flex  text-light">
                <span><i class="fas fa-birthday-cake"></i></span>
                <span class="ml-1"> {{$actor['birthday']}} ({{$actor['age']}}) years old</span>
                <span class="mx-2">|</span>
                <span>{{$actor['place_of_birth']}}</span>
                <span class="mx-2">|</span>



                </div>
                <p class="mt-5 text-light">{{$actor['biography']}}</p>
<h4 class="mt-12 text-light">known for</h4>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
    @foreach ( $KnowForMovies as$movie )

    <div class="mt-4 ">
        <a href="{{route('movies.show' ,$movie['id'])}}">
            <img src="{{$movie['poster_path']}}" alt="" height="100" width="100">
        </a>
    <a href="{{route('movies.show' ,$movie['id'])}}" class="text-decoration-none text-light">{{$movie['title']}}</a>
    </div>
    <!-- 1 -->
    @endforeach



</div>
            </div><!-- details -->
        </div>

      </div>
</div><!-- end movie info -->
<div class="container border-bottom border-secondary">
<h2 class=" text-light mt-4  ">Credits</h2>
<ul class="mt-3">
    @foreach ($credits as $credit)

    <li class="text-light mt-1">
        {{$credit['release_year']}} &middot; <strong>{{$credit['title']}}</strong> as {{$credit['character']}}
    </li>
    @endforeach
</ul>
</div><!-- credits -->

<footer class="bg-dark pb-4 pt-4 mt-5">
    <div class="container">
        <div class="text-center">
            <h3 class="text-light">Movies</h3>
            <p class=" text-light ">copyright &copy; 2022</p>



        </div>

    </div><!-- container -->

</footer>
@endsection
