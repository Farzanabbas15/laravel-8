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
        $emailJob = (new sendEmailJob())->delay(Carbon::now()->addSeconds(5));
        dispatch($emailJob);

        dd('email sent');
    }
}
