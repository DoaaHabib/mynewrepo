<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money_log extends Model
{
    use HasFactory;
    public function clintlog()
    {
        return $this->belongsTo(Client::class);
    }

}
