<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeries extends Model
{
    use HasFactory;

       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tv_series';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'tv_series_id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['backdrop_path','created_by','episode_run_time','first_air_date','genres','homepage','thmdb_id',
                          'in_production','languages','last_air_date','last_episode_to_air','name','next_episode_to_air','networks',
                        'number_of_episodes','number_of_seasons','origin_country','original_language','original_name','overview',
                      'popularity','poster_path','production_companies','production_countries','seasons','spoken_languages','status',
                      'tagline','type','vote_average','vote_count',];
}
