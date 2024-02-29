<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'student_id'
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
