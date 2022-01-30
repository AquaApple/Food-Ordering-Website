<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = ['name','price','details','photo', 'category_id', 'created_at','updated_at'];
    protected $hidden = ['created_at', 'updated_at', 'pivot'];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

 
}
