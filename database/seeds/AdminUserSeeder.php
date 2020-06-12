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
        $admin->email = 'admin@admin.admin';
        $admin->password = 'admin';
        $admin->admin = true;
        $admin->contact = '';
        $admin->save();
    }
}
