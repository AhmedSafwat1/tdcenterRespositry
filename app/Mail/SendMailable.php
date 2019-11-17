<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    public  $user;
    public  $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $request)
    {
        //

        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adminTdcenter@tdcenter.com')->
            view('mails.request');
    }
}
