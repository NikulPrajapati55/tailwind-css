<?php

namespace App\Providers;

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

    public function boot(): void
    {
        $data = [
            'phone' => '6354125439',
            'email' => 'nikulprajapti203@gmail.com',


            //social media links
            'git' => 'https://github.com/NikulPrajapati55',
            'insta' => 'https://www.instagram.com/hii.codes/',
            'linkedin' => 'https://www.linkedin.com/in/nikulprajapati203/',
        ];
        View::share('config', $data);
    }
}
