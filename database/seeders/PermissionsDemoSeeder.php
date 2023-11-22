<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create some roles and permissions.

     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'kategori']);
        Permission::create(['name' => 'create kategori']);
        Permission::create(['name' => 'edit kategori']);
        Permission::create(['name' => 'show kategori']);
        Permission::create(['name' => 'delete kategori']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Pengunjung']);
        $role1->givePermissionTo('show kategori');

        $role2 = Role::create(['name' => 'Pelanggan']);
        $role2->givePermissionTo('show kategori');

        $role3 = Role::create(['name' => 'Admin']);
        $role3->givePermissionTo('kategori');
        $role3->givePermissionTo('create kategori');
        $role3->givePermissionTo('edit kategori');
        $role3->givePermissionTo('show kategori');
        $role3->givePermissionTo('delete kategori');

        // pengunjung
        $user = \App\Models\User::factory()->create([
            'name' => 'Pengunjung',
            'email' => 'pengunjung@example.com',
            'password' => bcrypt('123456'),
        ]);
        $user->assignRole($role1);

        // pelanggan
        $user = \App\Models\User::factory()->create([
            'name' => 'Pelanggan',
            'email' => 'pelanggan@example.com',
            'password' => bcrypt('123456'),
        ]);
        $user->assignRole($role2);


        // admin        
        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->assignRole($role3);
    }
}
