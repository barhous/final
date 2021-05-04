<?php

namespace App\Providers;

use App\Observers\pcrsobserver;
use App\Models\pcrs;
use Illuminate\Support\ServiceProvider;

class pcrsServiceProvider extends ServiceProvider
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
        pcrs::observe(pcrsObserver::class);
    }
}
