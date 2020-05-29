<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin';
        $admin->nim = '0';
        $admin->password = 'admin';
        $admin->role = 'admin';
        $admin->ktm = '';
        $admin->contact = '';
        $admin->save();
    }
}
