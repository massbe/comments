<?php
/**
 * Created by PhpStorm.
 * User: massbe
 * Date: 29.11.17
 * Time: 10:39
 */

namespace Components;


class NewPost implements Publication
{
    public $headNews;
    public $textNews;
    private $comments;

    public function __construct($headBlog, $textBlog)
    {
        $this->headNews = $headBlog;
        $this->textNews = $textBlog;
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
        return $this->headNews;
    }
}



