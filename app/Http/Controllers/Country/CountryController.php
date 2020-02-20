<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\BaseAPIController;

class CountryController extends BaseAPIController
{
    public function __construct()
    {
        $this->slug = "countries";
    }
}
