<?php

namespace App\Mail;

use BenBjurstrom\Otpz\Mail\OtpzMail as BaseOtpzMail;
use Illuminate\Mail\Mailables\Envelope;

class OtpzMail extends BaseOtpzMail
{
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Sign in to :app_name', ['app_name' => config('app.name')]),
        );
    }
}
