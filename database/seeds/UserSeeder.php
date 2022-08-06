<?php

use App\User;
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
        //
        User::truncate();
        $user = new User();
        $user->name = 'Admin HipHop';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin123');
        $user->type = 'admin';
        $user->save();
    }
}
