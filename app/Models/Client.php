<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    public $table="clients";
    protected $fillable = ['name', 'full_name','email','email_verified_at','password','state','bloked','Date_create_account','Points_Balance','title','phone','type','gender','link_facebook','link_instgram','logo'];
    public function task() {
        return $this->belongsToMany('App\tasks');
}
public function moneylog()
    {
    
        return $this->hasMany(mony_log::class);
    }

}