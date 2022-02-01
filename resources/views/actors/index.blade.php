@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-5">
<div class="popular-actors">
    <h2 class="  text-light text-lg">
        POPULAR ACTORS
    </h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5  ">
            @foreach ($popularActors as $actor)

            <div class=" m-4">
                <a href="{{route('actors.show' , $actor['id'])}}">
                    <img src="{{$actor['profile_path']}}" alt="profile_path" >
                </a>
                <div>
                    <a href="{{route('actors.show' , $actor['id'])}}" class=" text-light text-decoration-none ">{{$actor['name']}}</a>
                    <div class="text-light">{{$actor['known_for']}}</div>
                </div>
            </div><!-- actor 1 -->
            @endforeach





                    </div>

                  </div>


            </div><!-- film boster 1 -->




        </div><!-- end actors -->
        <div class="page-load-status my-5">
            <div class="d-flex justify-content-center">
            <div class="infinite-scroll-request spinner my-5 text-4rem">&nbsp;</div>
        </div>
            <p class="infinite-scroll-last text-light">End of content</p>
            <p class="infinite-scroll-error text-light">Error</p>
          </div>
       {{-- <div class="container d-flex justify-content-between mt-3">
            @if ($previous)

            <a href="/actors/page/{{$previous}}" class=" text-light text-decoration-none" >previous</a>
@else:
<div></div>

            @endif
            @if ($next)

            <a href="/actors/page/{{$next}}" class=" text-light text-decoration-none" >Next</a>
            @else:
<div></div>
            @endif
        </div>--}}



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
@section('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.container');
var infScroll = new InfiniteScroll( elem, {
  // options
  path: '/actors/page/@{{#}}',
  append: '.actor',
  status: '.page-load-status',
  //history: false,
});
</script>
@endsection
