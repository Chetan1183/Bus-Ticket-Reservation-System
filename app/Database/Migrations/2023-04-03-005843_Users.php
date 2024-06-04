<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
       $this->forge->addField([
         'user_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
            'auto_increment' => true,
         ],
         'user_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
        'user_address' => [
            'type'       => 'VARCHAR',
            'constraint' => '25',
        ],
        'user_phone' => [
            'type'       => 'VARCHAR',
            'constraint' => '25',
        ],
        'user_gender' => [
            'type' => 'VARCHAR',
            'constraint' => '25',
        ],
        'user_idproof' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'user_email' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'user_password' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
       ]);
       $this->forge->addKey('user_id', true);
       $this->forge->createTable('users',true);
    }

    public function down() {
        $this->forge->dropTable('users');
     }
}
