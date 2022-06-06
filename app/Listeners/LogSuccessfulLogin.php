<?php

namespace App\Listeners;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $admin = $event->admin;
        $admin->last_login_at = date('Y-m-d H:i:s');
        $admin->last_logout_at = date('Y-m-d H:i:s');
        $admin->save();
    }
}
