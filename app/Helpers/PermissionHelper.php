<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

function slugs()
{
    return auth()->user()->permissions()->pluck('slug')->toArray();
    return Cache::remember('slugs', 3600, function () {
        
        return auth()->user()->permissions()->pluck('slug')->toArray();

    });
}

/**
 * ------------------------------------------------------------
 * Class PermissionHelper
 * ------------------------------------------------------------
 */
function hasPermission($slug, $permission_slugs)
{    
    if (auth()->id() == 1 || auth()->id() == 2) {
        return true;
    }
    return in_array($slug, $permission_slugs);
    
}




/*
* --------------------------------------------------------------------------
* Permission: Permission Any
* --------------------------------------------------------------------------
*/
function hasAnyPermission($input_slugs, $permission_slugs)
{
    if (auth()->id() == 1) {
           return true;
    } else {
        if(count(array_intersect($permission_slugs, $input_slugs)) !== 0) {
            return true;
        } else {
            return false;
        }
    }
}





/*
* --------------------------------------------------------------------------
* Permission: Permission For Module
* --------------------------------------------------------------------------
*/
function hasModulePermission($module_name, $activae_modules)
{
    return in_array($module_name, $activae_modules);
}



