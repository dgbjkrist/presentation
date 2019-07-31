<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(
            'frontend.components._header', 'App\Http\ViewComposers\NavComposer'
        );

         View::composer('*', function ($view) {
            $view->with('products', Product::all());
        });
    }
}
