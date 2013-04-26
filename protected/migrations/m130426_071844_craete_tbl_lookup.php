<?php

class m130426_071844_craete_tbl_lookup extends CDbMigration {

    public function up() {
        $this->createTable('tbl_lookup', array(
            'id' => 'pk',
            'name' => 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
            'code' => 'int(11) NOT NULL',
            'type' => 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
            'position' => ' int(11) DEFAULT \'1\'',
        ));



        $row = 1;
        if (($handle = fopen(dirname(__FILE__) . "/../data/tbl_lookup-1.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;

                $this->insert('tbl_lookup', array(
                    'id' => '',
                    'name' => $data[1],
                    'code' => $data[2],
                    'type' => $data[3],
                    'position' => $data[4],
                ));
            }
            fclose($handle);
        }
    }

    public function down() {
        echo "m130426_071844_craete_tbl_lookup droping table  tbl_lookup.\n";
        $this->dropTable('tbl_lookup');
        return true;
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}