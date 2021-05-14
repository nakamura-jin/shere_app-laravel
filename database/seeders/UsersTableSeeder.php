<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@example.com',
            'password' => 'taro1234'
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'jiro',
            'email' => 'jiro@example.com',
            'password' => 'jiro1234'
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'name' => 'saburo',
            'email' => 'saburo@example.com',
            'password' => 'saburo1234'
        ];
        $user = new User;
        $user->fill($param)->save();

    }
}
