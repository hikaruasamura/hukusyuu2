<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        Paginator::useBootstrap();
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS', 'on');
    }
}
