<?php

class UsersSeeder extends Seeder {

    private $table = 'users';

    public function run() {
        $this->db->truncate($this->table);

        //seed many records using faker
        $limit = 33;
        echo "seeding $limit user accounts";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'id'=> $this->faker->unique()->word,
                'username' => $this->faker->unique()->word,
                'password'=>'1234',
                'salt'=> $this->faker->word,
                'email'=>$this->faker->word,
                'activation_code'=> $this->faker->word,
                'forgotten_password_code'=>$this->faker->word,
                'forgotten_password_time'=>$this->faker->word,
                'remember_code'=> $this->faker->word,
                'created_on'=> $this->faker->word,
                'last_login'=> $this->faker->word,
                'active' => '1',
                'first_name'=> $this->faker->word,
                'last_name'=>$this->faker->word,
                'phone'=>$this->faker->word,
            );
            $this->db->insert($this->table, $data);
        }
        echo PHP_EOL;
    }
}
