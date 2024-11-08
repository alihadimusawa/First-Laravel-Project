<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'courses';

    // Specify the fillable attributes to allow mass assignment
    protected $fillable = [
        'title',
        'description',
        'image',
        'writer',
        'specialist',
    ];
}
