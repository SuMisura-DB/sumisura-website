<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstructionProject extends Model
{
    //
    use HasFactory;
    protected $table = 'construction_projects';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // protected $casts = [
    //     'title'       => 'array',
    //     'description' => 'array',
    //     'slug'        => 'array',
    //     'summary'     => 'array',
    // ];

}
