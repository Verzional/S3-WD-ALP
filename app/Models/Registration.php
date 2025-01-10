<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['level', 'grade', 'language', 'score', 'rankPercentage', 'event_id', 'student_id', 'school_id', 'companion_id', 'category_id', 'schedule_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function companion()
    {
        return $this->belongsTo(Companion::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public static function dataWithID($id)
    {
        return static::find($id);
    }
}
