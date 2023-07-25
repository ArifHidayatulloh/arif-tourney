<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    public function tournamen(){
        return $this->belongsTo(Tournament::class,'game_id');
    }
}
