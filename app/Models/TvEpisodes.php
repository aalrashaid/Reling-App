<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvEpisodes extends Model
{
    use HasFactory;
    
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tv_episodes';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'tv_episodes_id';

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
    protected $fillable = ['air_date','crew','episode_number','guest_stars','name','overview','thmd_id','production_code','season_number'
                            ,'still_path','vote_average','vote_count',
                          
                          ];
}
