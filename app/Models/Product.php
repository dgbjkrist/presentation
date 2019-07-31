<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','description','prix','category_id','image'];

    public function category(){

    	return $this->belongsTo(Category::class);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }
}
