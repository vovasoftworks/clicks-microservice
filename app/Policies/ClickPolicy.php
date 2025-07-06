<?php

namespace App\Policies;

use App\Models\User;

class ClickPolicy
{
    public function canStore(User $user, string $signature, string $clickId): bool
    {
        $secret = config('clicks.secret');

        $expected = hash_hmac('sha256', $clickId, $secret);

        return hash_equals($expected, $signature);
    }
}
