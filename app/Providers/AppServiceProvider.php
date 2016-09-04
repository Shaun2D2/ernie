<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Memory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Memory::created(function($memory) {

          $memory->unique_id = str_random(40);

          $memory->save();

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
