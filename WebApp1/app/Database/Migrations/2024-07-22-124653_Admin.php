<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'empid' => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'moble' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'praddress' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peraddress' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cnfpassword' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                'default'=>'user',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('empd', true);
        $this->forge->createTable('Admin');
    }

    public function down()
    {
        $this->forge->dropTable('Admin');
    }
}
