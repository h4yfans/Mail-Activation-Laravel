<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Mail;
use App\Mail\SendActivationToken;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationEmail
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {

        Mail::to($event->user)->send(new SendActivationToken($event->user->activationToken));

    }
}
