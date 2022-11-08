<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    public $table="tasks";
    public function clienttask() {
        return $this->belongsToMany('App\clients');
    }
}
    

