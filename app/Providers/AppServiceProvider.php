<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/*use App\Event;
use App\Post;*/
use View;

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
       /* View::share('posts', Post::all());
        View::share('events', Event::all());*/
    }
}
