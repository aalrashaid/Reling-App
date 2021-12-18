<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $movie = Http::withToken(config('services.tmdb.token'))
        // ->get('https://api.themoviedb.org/3/movie/11?api_key=&language=en-US')
        // ->json();

        // foreach ($movie as $key => $value) {
        //     Movie::create([
                
        //     ]);
        // }
        $json_movies_file_name='movie_ids_11_30_2021.json';
        $file = fopen(base_path($json_movies_file_name),'r');
        $base_link_tmdb='https://www.themoviedb.org/t/p/w440_and_h660_face';

        $api_key='fa8ef6fb28e7af2a83c9004235a0a935';

        while (!feof($file)){
            $line = fgets($file);
            $obj = json_decode($line);

            $id_exist = DB::connection( 'mysql' )->table( 'movies' )
                                 ->where( [
                                     'thmdb_id' => $obj->id
                                 ] )->first();

            if(!$id_exist){                       
                              
            $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$obj->id.'?api_key='.$api_key)
            ->json();
                if(isset($movie['id'])){
                    $item=[
                        'adult'=>$movie['adult'],
                        // 'backdrop_path'=>$base_link_tmdb.$movie['backdrop_path'],
                        'backdrop_path'=>$movie['backdrop_path'],
                        'belongs_to_collection'=>json_encode($movie['belongs_to_collection']),
                        'budget'=>$movie['budget'],
                        'genres'=>json_encode($movie['genres']),
                        'homepage'=>json_encode($movie['homepage']),
                        'thmdb_id'=>$movie['id'],
                        'imdb_id'=>$movie['imdb_id'],
                        'original_language'=>$movie['original_language'],
                        'original_title'=>$movie['original_title'],
                        'overview'=>$movie['overview'],
                        'popularity'=>$movie['popularity'],
                        // 'poster_path'=>$base_link_tmdb.$movie['poster_path'],
                        'poster_path'=>$movie['poster_path'],
                        'production_companies'=>json_encode($movie['production_companies']),
                        'production_countries'=>json_encode($movie['production_countries']),
                        'release_date'=>$movie['release_date'],
                        'revenue'=>$movie['revenue'],
                        'runtime'=>$movie['runtime'],
                        'spoken_languages'=>json_encode($movie['spoken_languages']),
                        'status'=>$movie['status'],
                        'tagline'=>$movie['tagline'],
                        'title'=>$movie['title'],
                        'video'=>$movie['video'],
                        'vote_average'=>$movie['vote_average'],
                        'vote_count'=>$movie['vote_count'],
                    ];
                    Movie::create($item);
                }
            }
        }
    }
}
