<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
    	'title',
		'description'
	];

    protected $casts = [
        'title' => 'string',
		'description' => 'string'
    ];
}
