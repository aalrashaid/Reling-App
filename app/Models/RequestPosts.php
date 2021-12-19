<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestPosts extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_posts';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'request_posts_id';

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
    protected $fillable = ['users_id','movies_id','tv_series_id','name','thmdb_id','body',];
}
