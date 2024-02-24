<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array(
                'id' => 2,
                'name' => 'Alessio',
                'email' => 'alessio27@gmail.com',
                'email_verified_at' => '10-11-2020',
                'password' => '123432324',
            ),
            array(
                'id' => 3,
                'name' => 'Gina',
                'email' => 'gina11@gmail.com',
                'email_verified_at' => '10-11-2020',
                'password' => '1223423343',
            ),
            array(
                'id' => 4,
                'name' => 'Ginevra',
                'email' => 'ginevra34@gmail.com',
                'email_verified_at' => '10-11-2020',
                'password' => '1243453',
            ),
            array(
                'id' => 5,
                'name' => 'Luca',
                'email' => 'superluca@gmail.com',
                'email_verified_at' => '10-11-2020',
                'password' => '12353454',
            ),
        );

        foreach($users as $user){
            $newUser = new User();
            $newUser->id = $user['id'];
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->email_verified_at = $user['email_verified_at'];          
            $newUser->password = Hash::make($user['password']);
            $newUser->save();
        }
    }
}
