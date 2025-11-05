<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(int[] $array, string[] $array1)
 * @method static findOrFail(int $int)
 */
class Setting extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Upload Path
     */
    protected const UPLOAD_PATH = 'images/';

    /**
     * fields that will handle an upload document
     */
    protected const UPLOAD_FIELDS = [];

    // #--------------------------------- RELATIONSHIPS

    // #--------------------------------- ATTRIBUTES

    // #--------------------------------- CUSTOM FUNCTIONS
}
