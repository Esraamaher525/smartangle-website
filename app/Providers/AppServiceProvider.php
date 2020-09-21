<?php

namespace App\Providers;

use App\SocialMedia;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

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
        //
        $socialMedia = SocialMedia::query()->first();
        $agent = new Agent();

        view()->share(['socialMedia' => $socialMedia,'agent' => $agent]);
    }
}
