<?php

use App\Models\Company;
use Illuminate\Support\Facades\Cache;



function getCache($key)
{

    if (Cache::has($key)) {
        return Cache::get($key);
    }
}


function getSupplierId()
{
    return getCache('supplier') ?? 1;
}


function getCompany()
{
    return Company::first();
}
