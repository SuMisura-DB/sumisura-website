<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstructionProjectCategory extends Model
{
    //
    // use HasFactory;
    protected $table = 'construction_projects_category';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // protected $casts = [
    //     'title'       => 'array',
    //     'description' => 'array',
    //     'slug'        => 'array',
    //     'summary'     => 'array',
    // ];

}
