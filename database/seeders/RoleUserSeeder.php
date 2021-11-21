<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        $user= User::create([
            'name'=>"Admin",
            'email'=>'Admin@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $role=Role::where('name','admin')->first();
        $user->assignRole($role->name);
    }
}
