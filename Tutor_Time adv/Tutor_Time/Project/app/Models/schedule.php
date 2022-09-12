<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $table = "schedule";
    protected $primaryKey = "tutor_id";
    public $incrementing = true;
    public $timestamps = false;

    function schedule()
    {
        return $this->belongsToMany(schedule::class,'stc_mappings','tutor_id');
    }
}
