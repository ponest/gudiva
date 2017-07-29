<?php

class Migration_Topics extends CI_Migration {

    public function up() {
        $this->dbforge->drop_table('topics', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'subject' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
            ),
            'level' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'description' => array(
                'type' => 'TEXT',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE
            ),
            'date_created' => array(
                'type' => 'DATETIME',
            ),
            'date_updated' => array(
                'type' => 'DATETIME',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('topics');
    }

    public function down() {
        $this->dbforge->drop_table('topics');
    }

}