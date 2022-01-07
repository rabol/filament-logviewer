<?php

namespace Rabol\FilamentLogviewer\Policies;

use App\Models\User;
use Rabol\FilamentLogviewer\Models\LogFile;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogFilePolicy
{
    use HandlesAuthorization;

    public function view(User $user, LogFile $logFile)
    {
        return true;
    }

    public function viewAny(User $user)
    {
        return true;
    }

    public function create(User $user, LogFile $logFile)
    {
        return true;
    }

    public function update(User $user, LogFile $logFile)
    {
        return true;
    }

    public function delete(User $user, LogFile $logFile)
    {
        return true;
    }
    public function deleteAny(User $user)
    {
        return true;
    }
}
