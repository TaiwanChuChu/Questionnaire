<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function getVarVal()
    // {
    //     $this->middleware(function ($request, $next) {

    //         // Request handle ..
    //         Helper::VarReset();
    //         return $next($request);
    //     });
    // }
}
