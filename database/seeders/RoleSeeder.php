<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Jugador']);

       Permission::create(['name'=> 'dashboard'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=> 'panel'])->assignRole($role1);
       Permission::create(['name'=> 'users'])->assignRole($role1);
      

       

    }
}
