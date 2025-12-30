<?php

namespace App\Http\Controllers;

use App\Mail\TenantCreatedMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class TenantEmailController extends Controller
{
    public function sendTenantEmail($user, $tenantId)
    {
        Mail::to($user->email)->send(
            new TenantCreatedMail($user, $tenantId)
        );
    }
}
