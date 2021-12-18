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

        Str::macro('threadLink', function (string $value, int $length = 40) {
            return Str::slug(
                Str::limit($value, $length),
                '-',
                'id'
            );
        });

        Str::macro('previewThread', function (string $value, int $length = 400) {
            return Str::limit(strip_tags($value), $length);
        });

        \Carbon\Carbon::setLocale(config('app.locale'));
    }
}
