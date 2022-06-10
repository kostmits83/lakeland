<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Http\Middleware\Closure;

class StripEmptyParams
{
    public function handle($request, $next)
    {
        $query = request()->query();
        $querycount = count($query);
        foreach ($query as $key => $value) {
            if ($value == '') {
                unset($query[$key]);
            }
        }
        if ($querycount > count($query)) {
            $path = url()->current() . (!empty($query) ? '/?' . http_build_query($query) : '');
            return redirect()->to($path);
        }
        return $next($request);
   }
}
