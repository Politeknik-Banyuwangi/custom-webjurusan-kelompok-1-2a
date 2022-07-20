<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'id'                    => 1,
            'name'                  => 'Admin 1',
            'email'                 => 'admin@gmail.com',
            'email_verified_at'     => NULL,
            'password'              => '$2y$10$hZ1a0cYBH52Oav56uT0qpuE4SyN6Q0QkmtqeH4f1pY5i5qzej/R4O',
            'role_id'               => 1,
            'picture'          => 'images/users/default.jpg',
            'remember_token'        => null,
            'created_at'            => '2021-05-17 04:21:52',
            'updated_at'            => '2021-05-17 04:21:52',
            'deleted_at'            => null,
        ]];

        User::insert($users);
    }
}
