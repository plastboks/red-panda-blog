<?php

class Admin_Post_Controller extends Base_Controller {
  
  public function __construct() {
    $this->filter('before', 'auth');
  }

  public function action_list() {
    $data = array(
      'posts' => Post::all(),
    );
    return View::make('admin/post/list', $data);
  }

  public function action_new() {
    $data = array(
      'user' => Auth::user(),
    );
    return View::make('admin/post/new', $data);
  }

  public function action_create() {

    $v = Validator::make(Input::all(), Post::defaultRules());

    if ($v->fails()) {
      return Redirect::to('admin/post/new')
              ->with('user', Auth::user())
              ->with_errors($v)
              ->with_input();
    }

    $post = new Post(Input::all());
    $post->save();

    return Redirect::to('post/view/'.$post->id);
  }

  public function action_edit($id) {
    $data = array(
      'post' => Post::find($id),
      'user' => Auth::user(),
    );
    return View::make('admin/post/edit', $data);
  }

  public function action_update($id) {

    $v = Validator::make(Input::all(), Post::defaultRules());

    if ($v->fails()) {
      return Redirect::to('admin/post/edit/'.$id)
              ->with('user', Auth::user())
              ->with_errors($v)
              ->with_input();
    }

    if ($post = Post::find($id)) {
      $post->title = Input::get('title');
      $post->body = Input::get('body');
      $post->author_id = Input::get('author_id');
      $post->save();
      return Redirect::to('post/view/'.$id);
    }
  }
}