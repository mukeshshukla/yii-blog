<?php

class m130426_071852_craete_tbl_tag extends CDbMigration {

    public function up() {
        $this->createTable('tbl_tag', array(
            'id' => 'pk',
            'name' => 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
            'frequency' => ' int(11) DEFAULT \'1\'',
        ));
    }

    public function down() {
        
        echo "m130426_071852_craete_tbl_tag droping table  tbl_tag.\n";
        $this->dropTable('tbl_tag');
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