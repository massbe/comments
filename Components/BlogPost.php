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
    private $headBlogs;
    private $textBlogs;
    private $category;
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

    public function getTextBlogs()
    {
        return $this->textBlogs;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getComment()
    {
        return $this->comments;
    }

    public function getHead(){
        return $this->headBlogs;
    }

    public function setHeadBlogs($headBlogs)
    {
        $this->headBlogs = $headBlogs;
    }

    public function setTextBlogs($textBlogs)
    {
        $this->textBlogs = $textBlogs;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }




}