<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bus extends Migration
{
    public function up()
    {
       $this->forge->addField([
         'bus_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
            'auto_increment' => true,
         ],
         'bus_name' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null'=>true,
         ],
       
        
         'bus_number' => [
            'type'       => 'VARCHAR',
            'constraint' => '10',
            'null'=>true,
        ],
        'bus_capacity' => [
         'type'       => 'INT',
         'constraint' => 10,
         'null'=>true,
     ],
     'origin' => [
      'type'       => 'VARCHAR',
      'constraint' => '100',
  ],
  'destination' => [
   'type'       => 'VARCHAR',
   'constraint' => '100',
],
'departure' => [
   'type'       => 'DATETIME',
],
'price' => [
   'type'       => 'VARCHAR',
   'constraint' => '100',
],
        'bus_status' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
      
       ]);
       $this->forge->addKey('bus_id', true);
       $this->forge->createTable('bus',true);
    }

    public function down() {
        $this->forge->dropTable('bus');
     }
}
