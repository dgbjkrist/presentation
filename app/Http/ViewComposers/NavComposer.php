<?php
namespace App\Http\ViewComposers;


use App\Models\Product;
class NavComposer
{
    public function compose($view)
    {
        $view->with('products', Product::all());
    }
}