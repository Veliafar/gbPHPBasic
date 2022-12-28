<?php

class UserProvider
{
    private array $account = [
        'admin' => '123',
    ];

    public function getUserByNameAndPass(string $userName, string $pass): ?User
    {
        $checkUserPass = $this->account[$userName] ?? null;
        if ($checkUserPass === $pass) {
            return new User($userName);
        }
        return null;
    }
}