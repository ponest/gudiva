<?php

class TopicsSeeder extends Seeder {

    private $table = 'topics';

    public function run() {
        $this->db->truncate($this->table);

        //seed many records using faker
        $limit = 12;
        echo "seeding $limit Topics";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'name' => $this->faker->unique()->word,
                'subject' =>  $this->faker->word,
                'level' =>  $this->faker->word,
                'description' =>  'Lorem ipsum dolor sit amet,nec cu lorem iudico intellegam, quo deseruisse interpretaris ex, ne his dolor quando delenit. Agam unum solum in mea, at quo latine propriae. Eos cu adhuc reque veniam. Quo amet menandri ad, et vocentlucilius partiendo usu, adhuc illum vel et. ',
                'date_created' => $this->faker->date($format = 'Y-m-d'),
                'date_updated' => $this->faker->date($format = 'Y-m-d'),
            );

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}
