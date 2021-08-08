<?php

namespace App\Listeners;

class UpdateLastLoggedIn
{

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->update([
            'last_logged_in' => now()
        ]);
    }
}
