<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'contact', 'currentlyActive', 'school_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public static function dataWithID($id){
        return static::find($id);
    }
}
