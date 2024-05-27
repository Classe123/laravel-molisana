<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $mydata = [
        //     [
        //         'key' => 'value',
        //         'key2' => 'value2',
        //     ],
        //     [
        //         'key' => 'pippo',
        //         'key2' => 'pluto',
        //     ],
        // ];
        // view()->share(compact('mydata'));
    }
}
