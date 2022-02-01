@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-5">
<div class="popular-tv">
    <h2 class="  text-light text-lg">
        POPULAR SHOWS
    </h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5  ">
          @foreach ($popularTv as $tvshow)

      <x-tv-card :tvshow="$tvshow"  :genres="$genres" />

                        @endforeach


                    </div>

                  </div>


            </div><!-- film boster 1 -->




        </div>
<div class="container mx-auto px-4 pt-5">
<div class="popular-movies">
    <h2 class="  text-warning text-lg">
       TOP RATED SHOWS
    </h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5  ">
        @foreach ($topRatedTv as $tvshow)
            <x-tv-card :tvshow="$tvshow"   />


            @endforeach


                    </div>

                  </div>


            </div><!-- film boster 1 -->




        </div>


<footer class="bg-dark pb-4 pt-4 mt-5">
    <div class="container">
        <div class="text-center">
            <h3 class="text-light">Movies</h3>
            <p class=" text-light ">copyright &copy; 2022</p>



        </div>

    </div><!-- container -->

</footer>
</div>
</div>
@endsection
