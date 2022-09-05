<?php

namespace App\Http\Controllers;

use App\Jobs\sendEmailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class sendmailController extends Controller
{
    //
    function sendEmail()
    {
        $emailJob = (new sendEmailJob())->delay(Carbon::now());
        dispatch($emailJob);

        dd('email sent');
    }
}
