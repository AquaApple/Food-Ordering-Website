<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];

    public function food()
    {
      return $this->hasMany('App\Models\Food');
    }
}
