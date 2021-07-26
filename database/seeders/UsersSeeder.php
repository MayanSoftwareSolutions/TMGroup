<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Irvin Moore',
                'email'          => 'irvin@thompsonmooregroup.com',
                'job_title'          => 'Director',
                'department'          => 'Development',
                'organisation'          => 'Thompson Moore Group',
                'password'       => bcrypt('Chelsea123*'),
                'remember_token' => null,
                'created_at'      => now(),
            ],
            [
                'id'             => 2,
                'name'           => 'Sean Bezuidenhout',
                'email'          => 'sean.mmi@outlook.com',
                'job_title'          => 'Dev consultant',
                'department'          => 'Development',
                'organisation'          => 'Thompson Moore Group',
                'password'       => bcrypt('Athina123%'),
                'remember_token' => null,
                'created_at'      => now(),
            ],
        ];

        User::insert($users);
    }
}