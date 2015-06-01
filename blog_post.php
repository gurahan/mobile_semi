<?php
$error = $title = $content = '';
if (@$_POST['submit']){
    $title = $_POST['title'];
    $content = $_POST['content'];
    if(!$title) {$error .= 'タイトルがありません。<br>';}
    if(mb_strlen($title) > 80) {$error .= 'タイトルが長すぎます。<br>';}
    if(!$content) {$error .= '本文がありません。<br>';}
    if(!$error){
        //  $escape_title = pg_escape_string($title);
        //  $escape_content = pg_escape_string($content);
        
        $pdo = new PDO("mysql:dbname=blog","root","19950103");
        $st = $pdo->query("INSERT INTO post(title,content) VALUES('$title','$content')");
        header('Location: blog_index.php');
        exit();
    }
}
require 'blog_t_post.php';