<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Str;

class InviteNewUser
{
    public function handle(string $email, string $name): void
    {
        $inviteToken = '';

        do {
            $inviteToken = Str::random(60);
        } while (User::where('invite_token', $inviteToken)->exists());

        $randomPw = Str::random(8);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'invite_token' => $inviteToken,
            'password' => bcrypt($randomPw),
        ]);

        dispatch(new \App\Jobs\InviteNewUser($user));
    }
}
