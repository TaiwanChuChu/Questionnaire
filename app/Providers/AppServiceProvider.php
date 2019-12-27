<?php

namespace App\Providers;

use App\Core\Helper;
use Illuminate\Support\Facades\DB;
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
        // share menu source to sidebar view
        view()->composer('layouts.sidebar', function ($view) {
            $Menu = DB::table('Menu')->where([['UpperID', '0'], ['IsHide', '0'], ['Status', '1']])->select('MenuID', 'MenuNo', 'MenuName', 'UpperID')->get();
            $SubMenu = DB::table('Menu')
                ->where([['UpperID', '>', '0'], ['IsHide', '0'], ['Status', '1']])
                ->select('MenuID', 'MenuNo', 'MenuName', 'UpperID')->orderBy('Sort')->get();
            $sub_menu = array();
            foreach ($SubMenu as $sub) {
                $sub_menu[$sub->UpperID][] = ['MenuNo' => $sub->MenuNo, 'MenuName' => $sub->MenuName];
            }
            return $view->with(['Menu' => $Menu, 'SubMenu' => $sub_menu]);
        });
        // RoutePath
        session(['RoutePath' => Helper::getRoutePath()]);
    }
}
