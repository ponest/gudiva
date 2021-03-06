<?php

class Migration_Ion_Auth extends CI_Migration {

    public function up() {

        //Drop table 'groups' if it exists
        $this->dbforge->drop_table('groups', TRUE);

        //Table structure for 'groups'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
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
        // Dumping data for table 'groups'
        $data = array(
            array(
                'id' => '1',
                'name' => 'admin',
                'description' => 'Administrator'
            ),
            array(
                'id' => '2',
                'name' => 'student',
                'description' => 'Student'
            )
        );
        $this->db->insert_batch('groups', $data);


        //Drop table 'users' if it exists
        $this->dbforge->drop_table('users', TRUE);

        //Table structure for table 'users'
        $this->dbforge->add_field(
            array(
                'id' => array(
                    'type' => 'MEDIUMINT',
                    'constraint' => '11',
                    'auto_increment' => TRUE
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
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
                ),
                'phone' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                    'null' => TRUE
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
                'ip_address' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '16'
                ),
                'active' => array(
                    'type' => 'TINYINT',
                    'constraint' => '1',
                    'unsigned' => TRUE,
                    'null' => TRUE
                ),
            )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');

        // Dumping data for table 'users'
        $data = array(
            'id' => '1',
            'first_name' => 'Gudiva',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '0000000000',
            'username' => 'admin',
            'password' => '$2y$08$uNpCGObYHRVrk3DK1wCtFeEFG89ZqQtxtO..yHibDb2UsXU1v9RZ6',
            'salt' => '',
            'activation_code' => '',
            'forgotten_password_code' => NULL,
            'created_on' => '1268889823',
            'last_login' => '1268889823',
            'ip_address' => '127.0.0.1',
            'active' => '1',

        );
        $this->db->insert('users', $data);

        // Drop table 'users_groups' if it exists
        $this->dbforge->drop_table('users_groups', TRUE);

        // Table structure for table 'users_groups'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '11',
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

        // Dumping data for table 'users_groups'
        $data = array(
            array(
                'id' => '1',
                'user_id' => '1',
                'group_id' => '1',
            ),
            array(
                'id' => '2',
                'user_id' => '1',
                'group_id' => '2',
            )
        );
        $this->db->insert_batch('users_groups', $data);

        // Drop table 'login_attempts' if it exists
        $this->dbforge->drop_table('login_attempts', TRUE);

        // Table structure for table 'login_attempts'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '11',
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