<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'full_name', 'email', 'email_verified_at','password','state','bloked','Points_Balance','title','phone','type','gender','link_facebook','link_instgram','logo'];
}
