<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $cheak = Role::where('id',1)->first();
        if (empty($cheak)){
            Role::create([
                'role' => 'SuperAdmin'
             ]);
     
             Role::create([
                 'role' => 'Moderator'
              ]);
     
              Role::create([
                 'role' => 'User'
              ]);
        } 
    }
}
