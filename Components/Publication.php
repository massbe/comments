<?php
/**
 * Created by PhpStorm.
 * User: massbe
 * Date: 29.11.17
 * Time: 14:48
 */

namespace Components;


interface Publication
{
    public function addComment(Comment $comment);
    public function getComment();
}