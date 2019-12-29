<?php

namespace App\Core;

use Illuminate\Support\Facades\Config;

/**
 * Global common function ..
 */
class Helper
{
    public static function VarReset()
    {
        $RoutePath = self::getRoutePath();
        $FormRequest = collect(request()->except('_token', 'page', 'event', 'order'))->filter(function ($value) {return (!is_null($value));});

        if ((request()->order != '' && session()->has($RoutePath . '_order')) && (session($RoutePath . '_order') != request()->order) || (!session()->has($RoutePath . '_order'))) {
            session([$RoutePath . '_order' => request()->order]);
            session([$RoutePath . '_sort' => 'ASC']);
        }

        if (!session()->has($RoutePath . '_sort')) {
            session([$RoutePath . '_sort' => 'ASC']);
        }

        // Has request
        if (request()->event == Config::get('OtherConfig.finalvariable.form_event.QUERY') && count($FormRequest->toArray()) > 0) {
            return session([$RoutePath => $FormRequest->toArray()]);
        }
        // Not has request but has session
        else if (count($FormRequest->toArray()) == 0 && session()->has($RoutePath)) {
            return request()->merge(session($RoutePath));
        }
    }

    public static function getRoutePath()
    {
        return request()->path();
    }
}
