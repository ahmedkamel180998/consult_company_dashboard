<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(mixed $config)
 */
class Message extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Upload Path
     */
    protected const UPLOAD_PATH = 'images/';

    /**
     * fields that will handle an upload document
     */
    protected const UPLOAD_FIELDS = [];

    ##--------------------------------- RELATIONSHIPS


    ##--------------------------------- ATTRIBUTES
    public function getCreatedAtHumanAttribute(): string
    {
        return $this->created_at ? now()->locale('ar')->diffForHumans($this->created_at) : '';
    }


    ##--------------------------------- CUSTOM FUNCTIONS
}