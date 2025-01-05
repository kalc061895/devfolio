<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuillaProjectSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pro_name'        => 'Control de Asistencia Remoto',
                'pro_description' => 'Provee servicios de control de personal se empresas, permitiendo su registro, control y gestion.',
                'pro_client'      => 'Red de Salud San Román',
                'pro_category'    => 'APLICATIVO WEB',
                'pro_link'        => 'demos/controlasistencia',
                'pro_images'      => 'asistencia/1.png,asistencia/2.png,asistencia/3.png',
                'pro_date'        => '2023-09-02 18:45:47',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
            [
                'pro_name'        => 'Firma Digital',
                'pro_description' => 'Aplicativo que permite la firma digital y seguimiento de documentos administrativos hasta su publicación',
                'pro_client'      => 'Dirección Regional de Educación Puno',
                'pro_category'    => 'SOFTWARE DE EMPRESA',
                'pro_link'        => 'demos/seguimiento',
                'pro_images'      => 'seguimiento/8.png,seguimiento/9.png,seguimiento/10.png',
                'pro_date'        => '2023-08-02 18:34:55',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
            [
                'pro_name'        => 'FarmaSys',
                'pro_description' => 'Gestor para actividades de farmacia: control de inventario, modulo de ventas, caja, vencimientos, estadisticas diarias.',
                'pro_client'      => 'Mi Farma',
                'pro_category'    => 'VENTAS',
                'pro_link'        => 'demos/farmacia',
                'pro_images'      => 'farmacia/4.png,farmacia/5.png,farmacia/6.png,farmacia/7.png',
                'pro_date'        => '2023-08-26 08:50:07',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
            [
                'pro_name'        => 'Reclutamiento RRHH',
                'pro_description' => 'Aplicativo para la reclutación de expedientes en formato digital y su posterior calificación para las oficinas de recursos humanos.',
                'pro_client'      => 'Hospital Carlos Monge Medrano',
                'pro_category'    => 'APLICATIVO WEB',
                'pro_link'        => 'demos/contrato',
                'pro_images'      => 'contrato/17.png,contrato/18.png,contrato/19.png',
                'pro_date'        => '2020-07-05 18:52:51',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
            [
                'pro_name'        => 'Consultorio Obstetrico',
                'pro_description' => 'Aplicativo para seguimiento de pacientes obstetricos para consultorios particulares, pudiendo adjuntar imagenes, ecografias y otros.',
                'pro_client'      => 'Dr. Alejandro Huaman',
                'pro_category'    => 'CLINICA',
                'pro_link'        => 'demos/consultorio',
                'pro_images'      => 'consultorio/15.png,consultorio/16.png,consultorio/17.png',
                'pro_date'        => '2021-01-02 09:04:51',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
            [
                'pro_name'        => 'Camas Hospitalización',
                'pro_description' => 'Control de camas hospitalarias y manejo de pacientes, gestion de ingresos, tiempos de estancia, y otros datos etadisticos.',
                'pro_client'      => 'Clinica Privada',
                'pro_category'    => 'CLINICA',
                'pro_link'        => 'demos/censohospitalizacion',
                'pro_images'      => 'censo/11.png,censo/12.png,censo/13.png',
                'pro_date'        => '2022-12-07 07:58:13',
                'pro_status'      => 1,
                'pro_video'       => '#',
            ],
        ];

        $this->db->table('quilla_project')->insertBatch($data);
    }
}
