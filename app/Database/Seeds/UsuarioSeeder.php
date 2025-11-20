<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Juan Perez',
                'email'  => 'juan@example.com',
            ],
            [
                'nombre' => 'Maria Garcia',
                'email'  => 'maria@example.com',
            ],
            [
                'nombre' => 'Carlos Lopez',
                'email'  => 'carlos@example.com',
            ],
            [
                'nombre' => 'Ana Martinez',
                'email'  => 'ana@example.com',
            ],
            [
                'nombre' => 'Luisa Rodriguez',
                'email'  => 'luisa@example.com',
            ]
        ];

        // Using Query Builder
        $this->db->table('usuarios')->insertBatch($data);
    }
}
