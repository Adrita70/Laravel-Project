<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $primaryKey = "student_id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable=['name','email','password','status'];

    function tutor()
    {
        return $this->belongsToMany(Tutor::class,'stc_mappings','student_id','tutor_id');
    }

    function application()
    {
        return $this->belongsToMany(Application::class,'stc_mappings','student_id','app_id');
    }
}
