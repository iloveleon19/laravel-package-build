<?php
namespace KeJyun\Larapack;

use Illuminate\Support\ServiceProvider;

class LarapackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('larapack', function ($app) {
            return new Larapack();
        });
    }
}
