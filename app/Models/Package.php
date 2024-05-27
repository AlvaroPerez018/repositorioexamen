<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Package extends Model
{
    use HasFactory;

    public function trucker(){
        return $this->belongsTo('App\Models\Trucker');
    }
}
