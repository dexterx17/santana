<?php

use Illuminate\Database\Seeder;

use App\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "sistemas@santana.ec";
        $admin->password = bcrypt('santana90');

        $admin->save();

    }
}
