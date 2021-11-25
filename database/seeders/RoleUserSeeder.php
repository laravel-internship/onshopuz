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
        Role::create(['name'=>'supplier']);

        $user= User::create([
            'name'=>"admin",
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $role=Role::where('name','admin')->first();
        $user->assignRole($role->name);


        $user= User::create([
            'name'=>"user",
            'email'=>'user@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $role=Role::where('name','user')->first();
        $user->assignRole($role->name);

        $user= User::create([
            'name'=>"supplier",
            'email'=>'supplier@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $role=Role::where('name','supplier')->first();
        $user->assignRole($role->name);
    }
}
