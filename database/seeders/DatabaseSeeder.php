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

        \App\Models\Application::create([
            'type' => '1',
            'currency' => 'USD',
            'genus' => 'Род', //род
            'comp' => 'Состав 1', //состав
            'date' => '22.07.2022',
            'country_sender' => 'Germany', //отправитель
            'station_sender' => 'Station1', //отправитель
            'country_receiver' => 'Poland', //получатель
            'station_receiver' => 'station2', //получатель
            'sender' => 'Ivan Ivanov', //грузоотправитель
            'receiver' => 'Sergei', //грузополучатель
            'code_cargo' => '302', //код груза
            'weight' => '500kg',
            'terms' => '-', //условия
            'qty' => '3',
            'payer' => 'Ivan Ivanov', //плательщики
            'notes' => '-', //примечания
            'loading' => '22.07.22', //погрузка/выгрука
            'cost_in_kzt' => '500', //стоимость в KZT
            'period' => '2 hour', //период подачи
            'user_id' => 1
        ]);

        \App\Models\Complaint::create([
            'name' => 'Ivan',
            'company' => 'ООО Ромашка',
            'phone' => '89005002019',
            'message1' => 'message1',
            'message2' => 'message2',
            'user_id' => 1
        ]);
    }
}
