<?php

class Update_Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::table('posts', function($table)
    {
      $table->boolean('archived');
      $table->boolean('published');
    });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table)
    {
      $table->drop_column('archived');
      $table->drop_column('published');
    });
	}

}
