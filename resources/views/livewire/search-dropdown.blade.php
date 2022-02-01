
 <div class="dropdown" x-data="{isOpen: true}" @click.away="isOpen = false">


    <input
    wire:model.debounce.500ms="search" type="text" class="mt-3"
    placeholder="Search.." id="myInput" onkeyup="filterFunction()"
@focus ="isOpen = true"
@keydown="isOpen = true"
@keydown.escape.window ="isOpen = false"
    @keydown.shift.tab="isOpen = false"
    >
    @if (strlen($search)>=2)


    <div
    id="myDropdown" class="dropdown-content "
    x-show.transition.opacity="isOpen"

    >
@if ($searchResults->count() > 0)

<ul class="  p-2 ">

  @foreach ( $searchResults as $result)

  <li  class="text-light  bg-secondary mt-2 ">

      <a
      href="{{route('movies.show' , $result['id'])}}"  class="dropdown-item "
@if ($loop->last) @keydown.tab.exact="isOpen = false"

@endif
      >
        <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="poster_path" width="25px">

        <span class="ml-4">{{ $result['title'] }}</span></a>
  </li>
  @endforeach


</ul>3
.
@else

@endif
    </div>
    @endif
  </div>
