<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'gender', 'contact'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public static function dataWithID($id){
        return static::find($id);
    }
}
