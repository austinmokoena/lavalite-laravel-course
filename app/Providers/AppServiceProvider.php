<?php

namespace App\Providers;

use App\Models\Video;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Share videos with all views
         View::composer('*', function ($view) {
            $videos = Video::all(); // Fetch all videos
            $view->with('videos', $videos);
        });
    }
}
