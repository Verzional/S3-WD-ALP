<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'level'];

    public function companions()
    {
        return $this->hasMany(Companion::class);
    }

    public static function dataWithID($id){
        return static::find($id);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
