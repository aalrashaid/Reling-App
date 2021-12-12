<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

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
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/11?api_key=&language=en-US')
        ->json();

        foreach ($movie as $key => $value) {
            Movie::create([]);
        }
    }
}
