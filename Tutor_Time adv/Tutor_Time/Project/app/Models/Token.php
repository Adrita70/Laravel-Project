<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $table = "token";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    function token()
    {
        return $this->belongsToMany(token::class,'tutor_id');
    }
}
