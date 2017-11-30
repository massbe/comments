<?php
/**
 * Created by PhpStorm.
 * User: massbe
 * Date: 29.11.17
 * Time: 10:39
 */

namespace Components;


class BlogPost implements Publication
{
    public $headBlogs;
    public $textBlogs;
    public $category;
    private $comments;

    public function __construct($headBlog, $textBlog, $category)
    {
        $this->headBlogs = $headBlog;
        $this->textBlogs = $textBlog;
        $this->category = $category;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function getComment()
    {
        return $this->comments;
    }

    public function getHead(){
        return $this->headBlogs;
    }
}