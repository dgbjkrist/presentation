<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [ 'name',
                            'prenom',
                            'email',
                            'tel',
                            'genre',
                            'date_de_naissance',
                            'code',
                            'isVerified',
                            'terms',
                            'product_id',

                        ];

        public function product(){

            return $this->belongTo(Product::class);
        }
}
