<?php

class Migration_Pastpapers extends CI_Migration {

    public function up() {
        $this->dbforge->drop_table('pastpapers', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'TEXT',
                'constraint' => 255,
            ),
            'level' => array(
                'type' => 'MEDIUMINT',
                'constraint' => 11,
            ),
            'year' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'type' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('pastpapers');
    }

    public function down() {
        $this->dbforge->drop_table('pastpapers');
    }

}