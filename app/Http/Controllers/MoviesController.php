<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;


class MoviesController extends Controller
{

    public function index()
    {
        $popularMovies = Http ::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];
       // dump($popularMovies);

        $nowPlayingMovies = Http ::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing')
        ->json()['results'];
        //dump($nowPlayingMovies);

        $genres= Http ::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];
        //dump($genresArray);

        //$genres = collect($genresArray)->mapWithKeys(function($genre){
           // return[$genre['id']=>$genre['name']];
       // });

        //dump($genres);
        //dump($popularMovies);


        //return view ('index',[
            //'popularMovies'=>$popularMovies,
           // 'nowPlayingMovies'=>$nowPlayingMovies,
           // 'genres'=>$genres,
       // ]);
       $viewModel = new MoviesViewModel(
        $popularMovies,
        $nowPlayingMovies,
         $genres,

    );

       return view ('movies.index',$viewModel);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $movie = Http ::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id .'?append_to_response=credits,videos,images, ')
        ->json();
       // dd($popularMovies);
        //dump($movie);
        $viewModel = new MovieViewModel($movie);
        return view('movies.show', $viewModel);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

