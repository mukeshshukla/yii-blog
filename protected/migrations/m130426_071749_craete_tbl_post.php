<?php

class m130426_071749_craete_tbl_post extends CDbMigration {

    public function up() {
        $this->createTable('tbl_post',
                            array(
                            'title'=> 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
                            'content' =>'text COLLATE utf8_unicode_ci NOT NULL',
                            'tags'=> 'text COLLATE utf8_unicode_ci',
                            'status'=> 'int(11) NOT NULL',
                            'create_time'=> 'int(11) DEFAULT NULL',
                            'update_time'=>'int(11) DEFAULT NULL',
                            'author_id'=> 'int(11) NOT NULL',
                            'PRIMARY KEY (id)',
                                
        ));
        $this->addForeignKey('FK_post_author', 'tbl_post', 'author_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        echo "m130426_071749_craete_tbl_post droping table tbl_post.\n";
        $this->dropForeignKey('FK_post_author', 'tbl_post');
        $this->dropTable('tbl_post');
        
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