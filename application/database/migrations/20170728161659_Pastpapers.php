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
            'year' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'subject' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'level' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'questions' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'answers' => array(
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
        $this->dbforge->create_table('pastpapers');
    }

    public function down() {
        $this->dbforge->drop_table('pastpapers');
    }

}