<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Auth;
use App\Models\User;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

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
        $user = User::get();
        view()->share('user',$user);
    }
}