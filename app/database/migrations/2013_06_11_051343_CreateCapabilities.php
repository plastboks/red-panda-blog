<?php

class CreateCapabilities {

  /**
   * Make changes to the database.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('capabilities', function($table)
    {
      $table->increments('id');
      $table->string('name');
      $table->timestamps();
    });

    $stdCapabilites =  array(
                                // posts
                                'createPost',
                                'updatePost',
                                'publishPost',
                                'unpublishPost',
                                'changePostState',
                                'deletePost',
                                // categories
                                'createCategory',
                                'updateCategory',
                                'deleteCategory',
                                // users
                                'seeUsers',
                                'createUser',
                                'updateUser',
                                'deleteUser',
                                'blockUser',
                                'unblockUser',
                                // roles
                                'seeRoles',
                                'createRole',
                                'updateRole',
                                'deleteRole',
                                // other
                                'siteSettings',
                            );
    foreach ($stdCapabilites as $cap) {
      DB::table('capabilities')->insert(array(
                                       'name' => $cap,
                                      ));
    }

  }

  /**
   * Revert the changes to the database.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('capabilities');
  }

}
