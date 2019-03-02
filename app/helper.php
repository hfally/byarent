<?php

/**
 * Checks if given route name is active.
 *
 * @param $route_name
 * @return bool
 */
function active($route_name) {
    if (!\Illuminate\Support\Facades\Route::has($route_name)) {
        return false;
    }

    return url(request()->path()) == route($route_name);
}