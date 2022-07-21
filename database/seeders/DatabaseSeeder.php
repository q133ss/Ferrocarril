<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $roles = ['admin', 'user'];

        foreach ($roles as $role) {
                \App\Models\Role::create([
                    'name' => $role
            ]);
        }

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'last_name' => 'admin',
             'phone' => '8(999)111-11-11',
             'email' => 'admin@email.net',
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Str::random(10),
             'role_id' => 1
         ]);
    }
}
