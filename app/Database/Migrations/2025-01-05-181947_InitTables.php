<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InitTables extends Migration
{
    public function up()
    {
        // Tabla quilla_blog
        $this->forge->addField([
            'blo_ide' => [
                'type'           => 'INTEGER',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'blo_title' => [
                'type'       => 'TEXT', // SQLite no tiene VARCHAR
                'null'       => true,
            ],
            'blo_subtitle' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_images' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_author' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_category' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_date' => [
                'type'       => 'TEXT', // SQLite maneja fechas como cadenas
                'null'       => true,
                'default'    => 'CURRENT_TIMESTAMP',
            ],
            'blo_link' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'blo_status' => [
                'type'       => 'INTEGER',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('blo_ide', true);
        $this->forge->createTable('quilla_blog');

        // Tabla quilla_project
        $this->forge->addField([
            'pro_ide' => [
                'type'           => 'INTEGER',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pro_name' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_client' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_category' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_link' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_images' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pro_date' => [
                'type'       => 'TEXT',
                'null'       => true,
                'default'    => 'CURRENT_TIMESTAMP',
            ],
            'pro_status' => [
                'type'       => 'INTEGER',
                'null'       => true,
            ],
            'pro_video' => [
                'type'       => 'TEXT',
                'null'       => true,
                'default'    => '#',
            ],
        ]);
        $this->forge->addKey('pro_ide', true);
        $this->forge->createTable('quilla_project');

        // Tabla users
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'password' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'created_at' => [
                'type'       => 'TEXT',
                'null'       => true,
                'default'    => 'CURRENT_TIMESTAMP',
            ],
            'updated_at' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Eliminar tablas
        $this->forge->dropTable('quilla_blog');
        $this->forge->dropTable('quilla_project');
        $this->forge->dropTable('users');
    }
}
