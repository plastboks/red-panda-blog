<?php

class Post extends Eloquent
{

    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Get post author
     *
     * @return object
     */
    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }

    /**
     * Get post categories
     *
     * @return object
     */
    public function categories()
    {
        return $this->belongsToMany('Category');
    }

    /**
     * Default form rules
     *
     * @return array
     */
    public static function defaultRules()
    {
        return array(
            'title' => 'required|min:3|max:128',
            'body'    => 'required',
        );
    }

}
