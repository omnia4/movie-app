<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' =>$this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/popular' =>$this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/movie/popular' =>$this->fakeGenres(),

        ]);
        $response=$this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        //$response->assertSee('Action , Comedy , Crime , Thriller');
        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
    }


 private function fakePopularMovies(){
return     Http::response([
    'results'=>[
        [
     "adult" => false,
    "backdrop_path" => "/eENEf62tMXbhyVvdcXlnQz2wcuT.jpg",
    "genre_ids" =>[
     0 => 878,
    1 => 28,
    2 => 12,
      ]  ,
    "id" => 580489,
    "original_language" => "en",
    "original_title" => "Venom: Let There Be Carnage",
    "overview" => "After finding a host body in investigative reporter Eddie Brock, the alien symbiote must face a new enemy, Carnage, the alter ego of serial killer Cletus Kasady ▶",
    "popularity" => 6972.003,
    "poster_path" => "/rjkmN1dniUHVYAtwuV3Tji7FsDO.jpg",
    "release_date" => "2021-09-30",
    "title" => "Fake Movie",
    "video" => false,
    "vote_average" => 7.2,
    "vote_count" => 4500 ,
        ]
    ]



],200);

   }
}
