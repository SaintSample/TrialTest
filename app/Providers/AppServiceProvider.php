<?php

namespace App\Providers;

use App\Doctine\CarbonType;
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
        \Doctrine\DBAL\Types\Type::overrideType('datetime', CarbonType::class);
    }
}
