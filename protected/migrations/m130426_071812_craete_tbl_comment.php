<?php

class m130426_071812_craete_tbl_comment extends CDbMigration {

    public function up() {
        $this->createTable('tbl_comment', array(
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'content' => 'text COLLATE utf8_unicode_ci NOT NULL',
            'status' => 'int(11) NOT NULL',
            'create_time' => 'int(11) DEFAULT NULL',
            'author' => 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
            'email' => 'varchar(128) COLLATE utf8_unicode_ci NOT NULL',
            'url' => "varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL",
            'post_id' => 'int(11) NOT NULL',
            'PRIMARY KEY (id)'
        ));
        $this->addForeignKey('FK_comment_post', 'tbl_comment', 'post_id', 'tbl_post', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        echo "m130426_071812_craete_tbl_comment droping table tbl_comment.\n";
        $this->dropForeignKey('FK_comment_post', 'tbl_comment');
        $this->dropTable('tbl_comment');

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