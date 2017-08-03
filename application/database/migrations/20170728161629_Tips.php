<?php

class Migration_Tips extends CI_Migration {

    public function up() {

        $this->dbforge->drop_table('tips', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 1000,
            ),
            'tip' => array(
                'type' => 'TEXT',
                'constraint' => 1000,
            ),
            'author' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'date_created' => array(
                'type' => 'DATETIME',
            ),
            'date_updated' => array(
                'type' => 'DATETIME',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tips');
    }

    public function down() {
        $this->dbforge->drop_table('tips');
    }

}