<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'category_id', 'user_type_id'];
    protected $appends = ['pic'];
    
    function getPicAttribute(){
          return asset('img/sub_categories/'.$this->image);
    }
}
