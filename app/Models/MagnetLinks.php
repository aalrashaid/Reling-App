<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagnetLinks extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'magnet_links';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'magnet_links_id';

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
    protected $fillable = ['users_id','request_posts_id','movies_id','tv_series_id','magnet_links',];

      /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Resolutions for the blog post.
     */
    public function Resolutions()
    {
        return $this->hasMany(Resolutions::class);
    }

    /**
     * Get the post for the blog post.
     */
    public function post()
    {
        return $this->hasMany(post::class);
    }

}
