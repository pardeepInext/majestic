<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vender extends Model
{
    use HasFactory;
    protected $fillable = ['name','img'];
    protected $appends = ['pic'];

    function getPicAttribute()
    {
        return asset("img/venders/$this->img");
    }
    
}
