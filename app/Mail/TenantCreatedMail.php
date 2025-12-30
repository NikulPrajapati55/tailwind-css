<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TenantCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $tenantId;


    public function __construct($user, $tenantId)
    {
        $this->user = $user;
        $this->tenantId = $tenantId;
    }


    public function build()
    {
        return $this->subject('Your Tenant Account Created')
                    ->view('emails.tenant-created');
    }
}
