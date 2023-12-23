<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla Ciudadano
            'ver-Ciudadano',
            'crear-Ciudadano',
            'editar-Ciudadano',
            'borrar-Ciudadano'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }

        echo "******** PERMISOS AGREGADOS *************";
    }
}
