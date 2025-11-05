<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(mixed $config)
 * @method static create(mixed $data)
 *
 * @property mixed $image
 */
class Testimonial extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'testimonials';

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

    // #--------------------------------- RELATIONSHIPS

    // #--------------------------------- ATTRIBUTES

    // #--------------------------------- CUSTOM FUNCTIONS
}
