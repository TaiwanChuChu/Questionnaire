<?php

namespace App\Core;

/**
 * Global common function ..
 */
class Helper
{
    public static function VarReset()
    {
        $RoutePath = self::getRoutePath();
        $FormRequest = collect(request()->except('_token', 'page'))->filter(function ($value) {return (!is_null($value));});

        if ((session()->has($RoutePath . '_order') && session($RoutePath . '_order') != request()->order) || (!session()->has($RoutePath . '_order'))) {
            session([$RoutePath . '_order' => request()->order]);
            session([$RoutePath . '_sort' => 'ASC']);
        }

        if (!session()->has($RoutePath . '_sort')) {
            session([$RoutePath . '_sort' => 'ASC']);
        }

        // Has request
        if (count($FormRequest->toArray()) > 0) {
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
