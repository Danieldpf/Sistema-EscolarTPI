<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'subject_id',
    ];

    // Relación con Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
