<?php

class m130426_071736_craete_tbl_user extends CDbMigration
{
	public function up()
	{
            $this->createTable('tbl_user', array(
          			    'id' => 'pk',
				    'username'=>'string NOT NULL ',
			            'password' => 'string NOT NULL',
			            'email' => 'string NOT NULL',
			            'profile' => 'text',
			        ));
	}

	public function down()
	{
		echo "m130426_071736_craete_tbl_user droping table tbl_user.\n";
                $this->dropTable('tbl_user');
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