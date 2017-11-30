<?php
/**
 * Created by PhpStorm.
 * User: massbe
 * Date: 29.11.17
 * Time: 10:24
 */

namespace Components;

class Comment
{
    public $author;
    public $message;
    private $objectOfThisComment;

    public function __construct($author, $message)
    {
            $this->author = $author;
            $this->message = $message;
    }

    public function assignCommentableEntity(Publication $someClass)
    {
        $this->objectOfThisComment = $someClass;
        $someClass->addComment($this);
    }
}