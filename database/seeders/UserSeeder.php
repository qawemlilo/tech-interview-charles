<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Leonel',
                'last_name' => 'Hampton',
                'avatar' => 'https://i.pravatar.cc/150?img=19',
            ],
            [
                'first_name' => 'Lizbeth',
                'last_name' => 'Baldwin',
                'avatar' => 'https://i.pravatar.cc/150?img=32',
            ],
            [
                'first_name' => 'Reginald',
                'last_name' => 'Mcdaniel',
                'avatar' => 'https://i.pravatar.cc/150?img=69',
            ],
            [
                'first_name' => 'Josue',
                'last_name' => 'Villanueva',
                'avatar' => 'https://i.pravatar.cc/150?img=4',
            ],
            [
                'first_name' => 'Janet',
                'last_name' => 'Fuller',
                'avatar' => 'https://i.pravatar.cc/150?img=66',
            ],
            [
                'first_name' => 'Moriah',
                'last_name' => 'Hines',
                'avatar' => 'https://i.pravatar.cc/150?img=53',
            ],
            [
                'first_name' => 'Yazmin',
                'last_name' => 'Washington',
                'avatar' => 'https://i.pravatar.cc/150?img=52',
            ],
            [
                'first_name' => 'Logan',
                'last_name' => 'Powell',
                'avatar' => '',
            ],
            [
                'first_name' => 'Giovanni',
                'last_name' => 'Garcia',
                'avatar' => 'https://i.pravatar.cc/150?img=68',
            ],
            [
                'first_name' => 'Clare',
                'last_name' => 'Powell',
                'avatar' => 'https://i.pravatar.cc/150?img=34',
            ],
            [
                'first_name' => 'Urijah',
                'last_name' => 'Edwards',
                'avatar' => 'https://i.pravatar.cc/150?img=51',
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}