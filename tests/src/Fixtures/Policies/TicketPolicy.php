<?php

namespace Filament\Tests\Fixtures\Policies;

use Filament\Tests\Fixtures\Models\Ticket;
use Filament\Tests\Fixtures\Models\User;

class TicketPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Ticket $ticket): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Ticket $ticket): bool
    {
        return true;
    }

    public function delete(User $user, Ticket $ticket): bool
    {
        return true;
    }

    public function deleteAny(User $user): bool
    {
        return true;
    }

    public function restore(User $user, Ticket $ticket): bool
    {
        return true;
    }

    public function forceDelete(User $user, Ticket $ticket): bool
    {
        return true;
    }
}
