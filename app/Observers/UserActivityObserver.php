<?php

namespace App\Observers;
use App\Events\UserActivityEvent;
use App\Models\Students;


class UserActivityObserver
{
    public function created(Students $student)
    {
        event(new UserActivityEvent(auth()->user(), 'created', Students::class, $student->id));
    }

    public function updated(Students $student)
    {
        event(new UserActivityEvent(auth()->user(), 'updated', Students::class, $student->id));
    }
}
