<?php

namespace App\Http\Controllers;

use App\Jobs\productLaunch;
use Illuminate\Http\Request;

class emailController extends Controller
{
    //
    public function sendEmail()
    {
       dispatch(new productLaunch());

       dd('Email has been delverd');
    }
}
