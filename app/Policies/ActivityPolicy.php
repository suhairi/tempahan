<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;


class ActivityPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(): bool
    {
        return auth()->user()->hasRole('Super Admin');
    }
}
