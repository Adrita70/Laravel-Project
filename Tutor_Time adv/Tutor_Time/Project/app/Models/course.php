<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = "course";
    protected $primaryKey = "tutor_id";
    public $incrementing = true;
    public $timestamps = false;

    function course()
    {
        return $this->belongsToMany(course::class,'stc_mappings','tutor_id');
    }
}
