<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

View::share('s', App::make('settings'));
View::share('p', App::make('permissions'));
View::share('flashStatus', Session::get('flashStatus'));
View::share('flashError', Session::get('flashError'));
View::share('flashSuccess', Session::get('flashSuccess'));

/**
 * Post part
 */
Route::get('/',
           array(
               'uses' => 'PostController@getIndex'));
Route::get('post/view/{id}',
            array(
                'uses' => 'PostController@getView'));
Route::get('post/category/{slug}',
            array(
                'uses' => 'PostController@getCategory'));
Route::post('post/query',
            array(
                'uses' => 'PostController@getQ'));

/**
 * Admin User routes
 */
Route::get('admin/user/list',
            array(
                'uses' => 'AdminUserController@getList'));
Route::get('admin/user/blocked',
            array(
                'uses' => 'AdminUserController@getBlocked'));
Route::get('admin/user/archived',
            array(
                'uses' => 'AdminUserController@getArchived'));
Route::get('admin/user/new',
            array(
                'uses' => 'AdminUserController@getNew'));
Route::get('admin/user/edit/{id}',
            array(
                'uses' => 'AdminUserController@getEdit'));
Route::get('admin/user/block/{id}',
            array(
                'uses' => 'AdminUserController@getBlock'));
Route::get('admin/user/unblock/{id}',
            array(
                'uses' => 'AdminUserController@getUnblock'));
Route::get('admin/user/delete/{id}',
            array(
                'uses' => 'AdminUserController@getDelete'));
Route::get('admin/user/undelete/{id}',
            array(
                'uses' => 'AdminUserController@getUndelete'));
Route::get('admin/user/truedelete/{id}',
            array(
                'uses' => 'AdminUserController@getTrueDelete'));
Route::post('admin/user/create',
            array(
                'before' => 'csrf',
                'uses' => 'AdminUserController@postCreate'));
Route::post('admin/user/update/{id}',
            array(
                'before' => 'csrf',
                'uses' => 'AdminUserController@postUpdate'));

/**
 * Admin Post routes
 */
Route::get('admin/post/list',
            array(
                'uses' => 'AdminPostController@getList'));
Route::get('admin/post/unpublished',
            array(
                'uses' => 'AdminPostController@getUnpublished'));
Route::get('admin/post/archived',
            array(
                'uses' => 'AdminPostController@getArchived'));
Route::get('admin/post/new',
           array(
               'uses' => 'AdminPostController@getNew'));
Route::get('admin/post/edit/{id}',
            array(
                'uses' => 'AdminPostController@getEdit'));
Route::get('admin/post/unpublish/{id}',
            array(
                'uses' => 'AdminPostController@getUnpublish'));
Route::get('admin/post/publish/{id}',
            array(
                'uses' => 'AdminPostController@getPublish'));
Route::get('admin/post/undelete/{id}',
            array(
                'uses' => 'AdminPostController@getUndelete'));
Route::get('admin/post/delete/{id}',
            array(
                'uses' => 'AdminPostController@getDelete'));
Route::get('admin/post/truedelete/{id}',
            array(
                'uses' => 'AdminPostController@getTrueDelete'));
Route::post('admin/post/create',
            array(
                'before' => 'csrf',
                'uses' => 'AdminPostController@postCreate'));
Route::post('admin/post/update/{id}',
            array(
                'before' => 'csrf',
                'uses' => 'AdminPostController@postUpdate'));

/**
 * Admin Image routes
 */
Route::get('admin/image/list',
            array(
                'uses' => 'AdminImageController@getList'));
Route::get('admin/image/archived',
            array(
                'uses' => 'AdminImageController@getArchived'));
Route::get('admin/image/ajaxnewlist/{images?}',
            array(
                'uses' => 'AdminImageController@ajaxNewList'));
Route::get('admin/image/ajaxeditlist/{postid}',
            array(
                'uses' => 'AdminImageController@ajaxEditList'));
Route::get('admin/image/new',
            array(
                'uses' => 'AdminImageController@getNew'));
Route::get('admin/image/edit/{id}',
            array(
                'uses' => 'AdminImageController@getEdit'));
Route::get('admin/image/delete/{id}',
           array(
               'uses' => 'AdminImageController@getDelete'));
Route::get('admin/image/undelete/{id}',
            array(
                'uses' => 'AdminImageController@getUndelete'));
Route::get('admin/image/truedelete/{id}',
            array(
                'uses' => 'AdminImageController@getTrueDelete'));
Route::post('admin/image/create',
            array(
                'before' => 'csrf',
                'uses' => 'AdminImageController@postCreate'));
Route::post('admin/image/update/{id}',
            array(
                'before' => 'csrf',
                'uses' => 'AdminImageController@postUpdate'));

/**
 * Admin Category routes
 */
Route::get('admin/category/list',
            array(
                'uses' => 'AdminCategoryController@getList'));
Route::get('admin/category/archived',
            array(
                'uses' => 'AdminCategoryController@getArchived'));
Route::get('admin/category/new',
           array(
               'uses' => 'AdminCategoryController@getNew'));
Route::get('admin/category/edit/{id}',
            array(
                'uses' => 'AdminCategoryController@getEdit'));
Route::get('admin/category/delete/{id}',
            array(
                'uses' => 'AdminCategoryController@getDelete'));
Route::get('admin/category/undelete/{id}',
            array(
                'uses' => 'AdminCategoryController@getUndelete'));
Route::get('admin/category/truedelete/{id}',
            array(
                'uses' => 'AdminCategoryController@getTrueDelete'));
Route::post('admin/category/create',
            array(
                'before' => 'csrf',
                'uses' => 'AdminCategoryController@postCreate'));
Route::post('admin/category/update/{id}',
            array(
                'before' => 'csrf',
                'uses' => 'AdminCategoryController@postUpdate'));

/**
 * Admin Settings routes
 */
Route::get('admin/settings',
           array(
               'uses' => 'AdminSettingController@getEdit'));
Route::post('admin/settings',
            array(
                'before' => array('csrf'),
                'uses' => 'AdminSettingController@postRegister'));

/**
 * Admin Role routes
 */
Route::get('admin/role/list',
            array(
                'uses' => 'AdminRoleController@getList'));
Route::get('admin/role/archived',
            array(
                'uses' => 'AdminRoleController@getArchived'));
Route::get('admin/role/new',
            array(
                'uses' => 'AdminRoleController@getNew'));
Route::get('admin/role/edit/{id}',
            array(
                'uses' => 'AdminRoleController@getEdit'));
Route::get('admin/role/delete/{id}',
            array(
                'uses' => 'AdminRoleController@getDelete'));
Route::get('admin/role/undelete/{id}',
            array(
                'uses' => 'AdminRoleController@getUndelete'));
Route::get('admin/role/truedelete/{id}',
            array(
                'uses' => 'AdminRoleController@getTrueDelete'));
Route::post('admin/role/create',
            array(
                'before' => array('csrf'),
                'uses' => 'AdminRoleController@postCreate'));
Route::post('admin/role/update/{id}',
            array(
                'before' => array('csrf'),
                'uses' => 'AdminRoleController@postUpdate'));

/**
 * Admin Dash routes
 */
Route::get('admin', array('before' => 'auth', function(){
  return View::make('admin/index');
}));


/**
 * Account routes
 */
Route::get('account',
           array(
               'uses' => 'AccountController@getIndex'));
Route::get('account/profile',
           array(
               'uses' => 'AccountController@getProfile'));
Route::get('account/password',
            array(
                'uses' => 'AccountController@getPassword'));
Route::get('account/myposts',
            array(
                'uses' => 'AccountController@getMyposts'));
Route::post('account/update',
            array(
                'before' => 'csrf',
                'uses' => 'AccountController@postUpdate'));
Route::post('account/changepassword',
            array(
                'before' => 'csrf',
                'uses' => 'AccountController@postChangepassword'));

/**
 * Login Logout routes
 */
Route::get('login',
           array(
               'uses' => 'AuthController@getLogin'));
Route::post('login',
            array(
                'before' => 'csrf',
                'uses' => 'AuthController@postTry'));
Route::get('logout',
           array(
               'uses' => 'AuthController@getLogout'));
Route::get('auth/forgot',
            array(
                'uses' => 'AuthController@getForgot'));
Route::get('password/forgot',
            array(
                'uses' => 'AuthController@getNewpassword'));
Route::post('auth/sendmail',
            array(
                'before' => 'csrf',
                'uses' => 'AuthController@postSendmail'));
Route::post('password/forgot',
            array(
                'before' => 'csrf',
                'uses' => 'AuthController@postSetnewpass'));

/**
 * Install routes
 */
Route::get('install',
           array(
               'uses' => 'InstallController@getIndex'));

Route::post('install/createuser',
            array(
                'before' => 'csrf',
                'uses' => 'InstallController@postCreateuser'));

