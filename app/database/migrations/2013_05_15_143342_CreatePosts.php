<?php

class CreatePosts {

  /**
   * Make changes to the database.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('posts', function($table)
      {
        $table->increments('id');
        $table->string('title', 128);
        $table->text('body');
        $table->text('excerpt');
        $table->integer('author_id');
        $table->boolean('archived');
        $table->boolean('published');
        $table->timestamps();
      });
  }

  /**
   * Revert the changes to the database.
   *
   * @return void
   */
  public function down()
  {
      Schema::drop('posts');
  }

}
