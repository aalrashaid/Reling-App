<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collections;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json_movies_file_name='collection_ids_11_30_2021.json';
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
                              
            $Collections = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/collection/'.$obj->id.'?api_key='.$api_key)
            ->json();
                if(isset($Collections['id'])){
                    $item=[
                        
                        
                        'thmdb_id'=>$Collections['id'],
                        'name'=>$Collections['name'],
                        'overview'=>$Collections['overview'],
                        'poster_path'=>$base_link_tmdb.$Collections['poster_path'],
                        'backdrop_path'=>$base_link_tmdb.$Collections['backdrop_path'],
                        'parts'=>json_encode($Collections['parts']),
                        
                        
                    ];
                    Collections::create($item);
                }
            }
        }
    }
}
