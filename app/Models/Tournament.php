<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $table = 'tournaments';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public function game(){
        return $this->belongsTo(Game::class,'game_id','id');
    }
}
