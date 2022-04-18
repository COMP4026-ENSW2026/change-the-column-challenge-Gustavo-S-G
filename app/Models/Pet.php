<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function setColorAttribute($value){
        $this->attributes['color'] = ucwords($value);
    }

    public function getColorAttribute($value)
    {
        return ucwords($value);
    }

    public function setSpecieAttribute($value){
        $this->attributes['specie'] = ucwords($value);
    }

    public function getSpecieAttribute($value)
    {
        return ucwords($value);
    }

    public function setSizeAttribute($value){
        $this->attributes['size'] = strtoupper($value);
    }

    public function getSizeAttribute($value)
    {
        return strtoupper($value);
    }
}
