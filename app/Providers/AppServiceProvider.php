<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\menu;
use Illuminate\Support\Facades\DB;



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
        $menus = menu::all();
        $premission = DB::table('permission')->get();
        view()->share('menus', $menus);
        view()->share('premission', $premission);
    }
}
