<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class QuillaBlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'blo_title'       => 'Creando una Aplicación con Codeigniter 4',
                'blo_subtitle'    => 'Descarga y Creación',
                'blo_description' => 'Como crear, descargar y configurar una apliacación usando el framework en PHP codeigniter 4',
                'blo_images'      => 'blog/img3.jpg',
                'blo_author'      => 'Kevin Laruta',
                'blo_category'    => 'Desarrollo Web',
                'blo_date'        => '2020-08-03 07:35:58',
                'blo_link'        => 'none',
                'blo_status'      => 1,
            ],
            [
                'blo_title'       => 'Modulo de Calificación de Asitencia Automático',
                'blo_subtitle'    => 'Mejorando habilidades con datos de horas',
                'blo_description' => 'Se procurará realizar un calificador automatico para el sistema de conrtol ed asistencia con la finalidad de que se realice la calificacion acorde a los parametros establecidos, horarios, turnos, permisos, cambios, y otros.',
                'blo_images'      => 'blog/img1.jpg',
                'blo_author'      => 'Kevin Laruta',
                'blo_category'    => 'Aplicativo Empresa',
                'blo_date'        => '2023-09-03 07:45:26',
                'blo_link'        => 'none',
                'blo_status'      => 1,
            ],
        ];

        $this->db->table('quilla_blog')->insertBatch($data);
    }
}
