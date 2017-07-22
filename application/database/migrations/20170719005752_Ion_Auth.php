<?php

class Migration_Ion_Auth extends CI_Migration {

    public function up() {

        //Drop table 'groups' if it exists
        $this->dbforge->drop_table('groups', TRUE);

        //Table structure for 'groups'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('groups');

        //Drop table 'users' if it exists
        $this->dbforge->drop_table('users', TRUE);

        //Table structure for table 'users'
        $this->dbforge->add_field(
            array(
                'id' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '8'
                ),
                'username' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '80'
                ),
                'salt' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40'
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
                ),
                'activation_code' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                    'null' => TRUE
                ),
                'forgotten_password_code' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                    'null' => TRUE
                ),
                'forgotten_password_time' => array(
                    'type' => 'INT',
                    'constraint' => '11',
                    'unsigned' => TRUE,
                    'null' => TRUE
                ),
                'remember_code' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '40',
                    'null' => TRUE
                ),
                'created_on' => array(
                    'type' => 'INT',
                    'constraint' => '11',
                    'unsigned' => TRUE
                ),
                'last_login' => array(
                    'type' => 'INT',
                    'constraint' => '11',
                    'unsigned' => TRUE
                ),
                'active' => array(
                    'type' => 'TINYINT',
                    'constraint' => '1',
                    'unsigned' => TRUE,
                    'null' => TRUE
                ),
                'first_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'null' => TRUE
                ),
                'last_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'null' => TRUE
                ),
                'phone' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                    'null' => TRUE
                )
            )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');


        // Drop table 'users_groups' if it exists
        $this->dbforge->drop_table('users_groups', TRUE);

        // Table structure for table 'users_groups'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '8',
                'unsigned' => TRUE
            ),
            'group_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '8',
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users_groups');


        // Drop table 'login_attempts' if it exists
        $this->dbforge->drop_table('login_attempts', TRUE);

        // Table structure for table 'login_attempts'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '16'
            ),
            'login' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null', TRUE
            ),
            'time' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('login_attempts');
    }

    public function down() {
        $this->dbforge->drop_table('users', TRUE);
        $this->dbforge->drop_table('groups', TRUE);
        $this->dbforge->drop_table('users_groups', TRUE);
        $this->dbforge->drop_table('login_attempts', TRUE);
    }

}