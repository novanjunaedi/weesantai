<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'admin_id' => 1,
            'name' => 'Admin',
            'gender' => 'Pria',
            'email' => 'admin@weesantai.id',
            'dateofbirth' => '2020-07-12',
            'phone' => '08123456789',
            'address' => 'Bandung',
            'img' => 'default-pria.png',
        ]);
    }
}
