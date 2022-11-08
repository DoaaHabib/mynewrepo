<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mony_log extends Controller
{
    //
    public function getlog($client_id)
    {
        // Passing post id into find()
        return client::find($client_id)->clients;
    }
}
