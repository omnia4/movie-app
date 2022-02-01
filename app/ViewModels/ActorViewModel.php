<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;


class ActorViewModel extends ViewModel
{
    public $actor;

    public function __construct($actor , $credits)
    {
        $this->actor=$actor;
        $this->credits=$credits;

    }

    public  function actor(){
        return collect($this->actor)->merge
        ([
            'birthday'=> Carbon::parse($this->actor['birthday'])->format('M d , Y'),
            'age'=> Carbon::parse($this->actor['birthday'])->age,
           'profile_path'=>$this->actor['profile_path']
           ? 'https://image.tmdb.org/t/p/w300'.$this->actor['profile_path']
           : 'https://via.placeholder.com/300*450',
        ]);
    }
    public  function KnowForMovies(){
       $castMovies =collect($this->credits)->get('cast');
       return collect($castMovies)->where('media_type','movie')->sortByDesc('popularity')->take(5)->map(function($movie){
           return collect($movie)->merge([
            'poster_path'=>$movie['poster_path']
            ?'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
            :'https://via.placeholder.com/185*278',
            'title'=>isset($movie['title']) ?$movie['title']: 'Untitled',
           ]);

       });

    }
    public  function credits(){
       $castMovies =collect($this->credits)->get('cast');
       return collect($castMovies)->map(function($movie){
           if (isset($movie['release_date'])) {
            $releaseDate = $movie['release_date'];
           } elseif(isset($movie['first_air_date'])) {
            $releaseDate =$movie['first_air_date'];
           }else {
            $releaseDate ='';
           }
           if (isset($movie['title'])) {
            $title = $movie['title'];
           } elseif(isset($movie['name'])) {
            $title =$movie['name'];
           }else {
            $title ='Untitled';
           }

           return collect($movie)->merge([
            'release_date'=>$releaseDate,
            'release_year'=>isset($releaseDate)? Carbon::parse($releaseDate)->format('Y') : 'Future',
            'title'=>$title,
            'character'=>isset($movie['character']) ? $movie['character'] : '',
           ]);

       })->sortByDesc('release_date');

    }


}
