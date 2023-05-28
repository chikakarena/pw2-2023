<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'name' => 'User1',
            'user' => 'user1',
            'pass' => '123',
            'email' => 'info@mail.com',
            'role' => 'User 2',
        ],
        [
            'no' => 2,
            'name' => 'User2',
            'user' => 'user2',
            'pass' => '123',
            'email' => 'info@mail.com',
            'role' => 'User 2',
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
