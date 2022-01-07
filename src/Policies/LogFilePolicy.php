<?php

namespace Rabol\FilamentLogviewer\Policies;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Rabol\FilamentLogviewer\Models\LogFile;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogFilePolicy
{
    use HandlesAuthorization;

    public function view(Model $user, LogFile $logFile)
    {
        return true;
    }

    public function viewAny(Model $user)
    {
        return true;
    }

    public function create(Model $user, LogFile $logFile)
    {
        return true;
    }

    public function update(Model $user, LogFile $logFile)
    {
        return true;
    }

    public function delete(Model $user, LogFile $logFile)
    {
        return true;
    }
    public function deleteAny(Model $user)
    {
        return true;
    }
}
