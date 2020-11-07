<?php

namespace esemka\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function profile()
    {
        return view('companies/profile');
    }
}
