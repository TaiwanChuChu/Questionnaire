<?php

namespace App\Core;

use Illuminate\Support\Facades\Config;

/**
 * Global common function ..
 */
class Helper
{
    // app onload: request > session
    public static function VarReset()
    {
        // get uri path
        $RoutePath = self::getRoutePath();
        // get request except _token, page, event, order parameters and not null value ..
        $FormRequest = collect(request()->except('_token', 'page', 'event', 'order'))->filter(function ($value) {return (!is_null($value));});

        // order by handler
        if ((request()->order != '' && session()->has($RoutePath . '_order')) && (session($RoutePath . '_order') != request()->order) || (!session()->has($RoutePath . '_order'))) {
            session([$RoutePath . '_order' => request()->order]);
            session([$RoutePath . '_sort' => 'ASC']);
        }

        // order by handler
        if (!session()->has($RoutePath . '_sort')) {
            session([$RoutePath . '_sort' => 'ASC']);
        }

        // Has request
        if (request()->event == Config::get('OtherConfig.finalvariable.form_event.QUERY') || count($FormRequest->toArray()) > 0) {
            session([$RoutePath . '_sort' => 'ASC']);
            return session([$RoutePath => $FormRequest->toArray()]);
        }
        // Not has request but has session
        else if (count($FormRequest->toArray()) == 0 && session()->has($RoutePath)) {
            return request()->merge(session($RoutePath));
        }
    }

    // get uri path
    public static function getRoutePath()
    {
        return request()->path();
    }

    // get menu number
    public static function getMenuNum()
    {
        return \Request::segment(Config::get('OtherConfig.finalvariable.menu.MENU_URI_INDEX'));
    }
}
