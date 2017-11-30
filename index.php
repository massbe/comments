<?php
include_once ('vendor/autoload.php');


use Components\BlogPost;
use Components\Comment;
use Components\NewPost;

$newsPost1 = new NewPost('NewsPost 1', 'Текст 1');
$newsPost2 = new NewPost('NewsPost 2', 'Текст 2');
$newsPost3 = new NewPost('NewsPost 3', 'Текст 3');

$blogPost1 = new BlogPost('BlogPost 1', 'Текст 1', 'Животные');
$blogPost2 = new BlogPost('BlogPost 2', 'Текст 2', 'Машины');
$blogPost3 = new BlogPost('BlogPost 3', 'Текст 3', 'Вертолеты');

$comment1 = new Comment('Ivan', 'LOL');
$comment2 = new Comment('Vasya', 'KEK');
$comment3 = new Comment('Grisha', 'SHMEK');
$comment4 = new Comment('Petya', 'SPECK');

$comment1->assignCommentableEntity($newsPost1);
$comment2->assignCommentableEntity($newsPost1);
$comment3->assignCommentableEntity($blogPost3);
$comment4->assignCommentableEntity($blogPost1);

$publications = [$newsPost1, $newsPost2, $newsPost3, $blogPost1, $blogPost2, $blogPost3];

foreach ($publications as $publication){
    echo "<br>";
    echo "<br>".$publication->getHead()." <br>";
    foreach ($publication->getComment() as $item){
        echo "Комментарии: <br>";
        echo " Автор: ". $item->author." <br>";
        echo " Сообщение: ".$item->message."<br";
    }
}