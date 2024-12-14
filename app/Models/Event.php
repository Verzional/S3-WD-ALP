<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['year', 'description', 'scheduleDescription'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
