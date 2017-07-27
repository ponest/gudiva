<?php

class Migration_Questions extends CI_Migration {

    public function up() {
        $this->dbforge->drop_table('questions', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'question' => array(
                'type' => 'TEXT',
                'constraint' => 1000,
            ),
            'answer' => array(
                'type' => 'TEXT',
                'constraint' => 1000,
            ),
            'topic' => array(
                'type' => 'MEDIUMINT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'date_created' => array(
                'type' => 'DATETIME',
            ),
            'date_updated' => array(
                'type' => 'DATETIME',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('questions');
    }

    public function down() {
        $this->dbforge->drop_table('questions');
    }

}