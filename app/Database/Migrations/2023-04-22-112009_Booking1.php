<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booking1 extends Migration
{
    public function up()
    {
       $this->forge->addField([
         'booking_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
            'auto_increment' => true,
         ],
         'bus_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
         ],
         'user_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
            'null'=>true,
         ],
         'user_name' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null'=>true,
         ],
         'pickup_point' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null'=>true,
         ],
         'destination' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null'=>true,
         ],
         'no_of_seats' => [
            'type' => 'INT',
            'constraint' => 10,
            'null'=>true,
           
         ],
        'user_email' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
            'null'=>true,
        ],
        'user_phone' => [
         'type'       => 'VARCHAR',
         'constraint' => '25',
     ],
            'status' => [
               'type'       => 'VARCHAR',
               'constraint' => '10',
               'null'=>true,
           ],
       ]);
       $this->forge->addKey('booking_id', true);
       $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
       $this->forge->addForeignKey('bus_id', 'bus', 'bus_id', 'CASCADE', 'CASCADE');
       $this->forge->createTable('booking1',true);
    }

    public function down() {
        $this->forge->dropTable('booking1');
     }
}
