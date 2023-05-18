<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $cheak = User::where('phone',900196503)->first();
        if (empty($cheak)){
            $user = new User();
            $user->name = "SuperAdmin";
            $user->email = "superadmin@gmail.com";
            $user->phone = 900196503;
            $user->role_id = 1;
            $user->password = bcrypt('0000');
            $user->save();
        } 
    }
}
