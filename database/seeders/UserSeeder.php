<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$director = Role::create(['name' => 'director']);
        $maestro = Role::create(['name' => 'maestro']);

        $permissions = [
            "listar usuarios"   => true,
            "crear usuarios"    => false,
            "eliminar usuarios" => false,
            "editar usuarios"   => false,

            "listar alumnos"    => true,
            "crear alumnos"     => false,
            "eliminar alumnos"  => false,
            "editar alumnos"    => true,

            "listar generos"    => true,
            "crear generos"     => true,
            "eliminar generos"  => false,
            "editar generos"    => false,

            "listar autores"    => true,
            "crear autores"     => true,
            "eliminar autores"  => true,
            "editar autores"    => true,

            "listar libros"     => true,
            "crear libros"      => true,
            "eliminar libros"   => false,
            "editar libros"     => false,

            "gestionar prestamos"   => true,

            "finalizar prestamos"   => true,
        ];

        foreach($permissions as $permission_name => $assign_to_maestro) {

            $permission = Permission::create(['name' => $permission_name]);

            $director->givePermissionTo($permission);

            if ($assign_to_maestro) {
                $maestro->givePermissionTo($permission);
            }

        }*/

        //$user = User::find(1);

        //$user->assignRole(['director']);






        /*$director = Role::find(1);
        $maestro = Role::find(2);

        $permissions = [
            "crear prestamos"   => true,
            "ver prestamos"   => true,
        ];

        foreach($permissions as $permission_name => $assign_to_maestro) {

            $permission = Permission::create(['name' => $permission_name]);

            $director->givePermissionTo($permission);

            if ($assign_to_maestro) {
                $maestro->givePermissionTo($permission);
            }

        }*/




    }
}
