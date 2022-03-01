<?php

namespace Database\Seeders;

use App\Models\Proessa;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proessa::create([
            'name' =>' Proessa Consultoria',
            'email' => 'anonymous20black@gmail.com',
            'celular' => '2491526985',
            'telefono'=> '2491702808',
            'direccion' => 'privada 3 Oriente',
        ]);

        User::create([
            'name' => 'Gomez Alberth',
            'email' => 'GomezAlbertOlivares@gmail.com',
            'password' => bcrypt('S1S73MK1R435859UM4'),
            'proessa_id' => 1,
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
