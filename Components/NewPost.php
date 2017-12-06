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
    private $headNews;
    private $textNews;
    private $comments;

    public function __construct($headBlog, $textBlog)
    {
        $this->headNews = $headBlog;
        $this->textNews = $textBlog;
    }

    public function getTextNews()
    {
        return $this->textNews;
    }

    public function setHeadNews($headNews)
    {
        $this->headNews = $headNews;
    }

    public function setTextNews($textNews)
    {
        $this->textNews = $textNews;
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



