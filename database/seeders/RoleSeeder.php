<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin=Role::create(['name'=>'Admin']);
        $role_invitado=Role::create(['name'=>'Invitado']);
        $role_admin->givePermissionTo(Permission::all());

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name'=>'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role_admin,$role_invitado]);

        Permission::create(['name'=>'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.users.edit', 'description' => 'Asignar un rol a un usuario'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.users.update', 'description' => 'Actualizar roles de usuario'])->syncRoles([$role_admin]);

        Permission::create(['name'=>'admin.roles.index', 'description' => 'Ver listado de Roles'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.roles.create', 'description' => 'Crear Roles'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.roles.edit', 'description' => 'Editar Roles'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.roles.destroy', 'description' => 'Eliminar Roles'])->syncRoles([$role_admin]);

        Permission::create(['name'=>'admin.categoria.index', 'description' => 'Ver listado de categorías'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.categoria.create', 'description' => 'Crear categorías'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.categoria.edit', 'description' => 'Editar categorías'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.categoria.show', 'description' => 'ver Categorias'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.categoria.destroy', 'description' => 'Eliminar categorías'])->syncRoles([$role_admin]);

        Permission::create(['name'=>'admin.post.index', 'description' => 'Ver listado de publicaciones'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.post.create', 'description' => 'Crear publicaciones'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.post.edit', 'description' => 'Editar publicaciones'])->syncRoles([$role_admin]);
        Permission::create(['name'=>'admin.post.destroy', 'description' => 'Eliminar publicaciones'])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.carrucel.index', 'description' => 'Ver listado de carrucel'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.carrucel.create', 'description' => 'Crear carrucel'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.carrucel.edit', 'description' => 'Editar carrucel'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.carrucel.destroy', 'description' => 'Eliminar carrucel'])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.producto.index', 'description' => 'Ver listado de producto'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.producto.create', 'description' => 'Crear producto'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.producto.edit', 'description' => 'Editar producto'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.producto.destroy', 'description' => 'Eliminar producto'])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.empresa.index', 'description' => 'Ver listado de empresa'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.empresa.update', 'description' => 'Actualizar info de empresa '])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.configuracion.index', 'description' => 'Ver listado de configuracion'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.configuracion.update', 'description' => 'Actualizar info de configuracion '])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.uploads.index', 'description' => 'Ver listado de Archivos'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.uploads.create', 'description' => 'Subir Archivos'])->syncRoles([$role_admin]);
        //Permission::create(['name' => 'admin.uploads.store', 'description' => 'Ver Archivos'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.uploads.edit', 'description' => 'Editar Archivos'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.uploads.destroy', 'description' => 'Eliminar Archivos'])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.empresas.index', 'description' => 'Ver listado de Empresas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.empresas.create', 'description' => 'Crear Empresas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.empresas.edit', 'description' => 'Editar Empresas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.empresas.destroy', 'description' => 'Eliminar Empresas'])->syncRoles([$role_admin]);

        Permission::create(['name' => 'admin.download', 'description' => 'Descargar Archivos'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.dashboard', 'description' => 'Enviar Notificaciones'])->syncRoles([$role_admin]);
    }
}
