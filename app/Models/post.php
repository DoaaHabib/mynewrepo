<?php

namespace AppModels;

use IlluminateDatabaseEloquentFactoriesHasFactory;
use IlluminateDatabaseEloquentModel;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'gender','full_name','logo'
    ];
}