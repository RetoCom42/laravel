<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $admin = Role::create(['name' => 'Admin']);
        $destacamento1 = Role::create(['name' => 'Destacamento1']);
        $destacamento2 = Role::create(['name' => 'Destacamento2']);
        $destacamento3 = Role::create(['name' => 'Destacamento3']);
        $destacamento4 = Role::create(['name' => 'Destacamento4']);
        $destacamento5 = Role::create(['name' => 'Destacamento5']);
        $planaMayor = Role::create(['name' => 'PlanaMayor']);

        // Crear permisos
        Permission::create(['name' => 'view Destacamento1']);
        Permission::create(['name' => 'view Destacamento2']);
        Permission::create(['name' => 'view Destacamento3']);
        Permission::create(['name' => 'view Destacamento4']);
        Permission::create(['name' => 'view Destacamento5']);
        Permission::create(['name' => 'view PlanaMayor']);

        // Asignar permisos a roles
        $admin->givePermissionTo(Permission::all());
        $destacamento1->givePermissionTo('view Destacamento1');
        $destacamento2->givePermissionTo('view Destacamento2');
        $destacamento3->givePermissionTo('view Destacamento3');
        $destacamento4->givePermissionTo('view Destacamento4');
        $destacamento5->givePermissionTo('view Destacamento5');
        $planaMayor->givePermissionTo('view PlanaMayor');
    }
}
