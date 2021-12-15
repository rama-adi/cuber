<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        Str::macro('threadLink', function (string $value) {
            return Str::slug(
                Str::limit($value, 40),
                '-',
                'id'
            );
        });

        Str::macro('previewThread', function (string $value) {
            return Str::limit(strip_tags($value), 400, "...");
        });

        \Carbon\Carbon::setLocale(config('app.locale'));
    }
}
