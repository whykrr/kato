<?php

namespace Database\Seeders;

use App\Models\Admin;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = "Super Admin";
        $admin->email = "superadmin@katoplus.com";
        $admin->password = Hash::make("admin123");
        $admin->is_deletable = 0;

        $admin->save();
    }
}
