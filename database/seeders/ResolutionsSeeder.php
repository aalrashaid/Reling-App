<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResolutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Resolutions =[
            ['name' => '480p (SD)', 'slug' => 'SD' ,'description' => ' 480p SD (Standard Definition)'],
            ['name' => '720p (HD)','slug' => 'HD' ,'description' => '720p HD (High Definition)'],
            ['name' => '1080p Full HD (FHD)','slug' => 'FHD' ,'description' => '1080p Full HD (FHD)'],
            ['name' => '1440p QHD (Quad HD)','slug' => 'Quad HD' ,'description' => '1440p QHD (Quad HD)'],
            ['name' => '2K','slug' => '2K' ,'description' => '2K'],
            ['name' => '4K video or Ultra HD (UHD)','slug' => '4K' ,'description' => '4K video or Ultra HD (UHD)'],
            ['name' => '8K video or Full Ultra HD','slug' => '8K' ,'description' => '8K video or Full Ultra HD'],
        ];
        DB::table('resolutions')->insert($Resolutions);
    }
}
