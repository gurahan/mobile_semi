<?php
$post_no = $error = $name = $content = '';
if(@$_POST['submit']) {
    $post_no = strip_tags($_POST['post_no']);
    $name = strip_tags($_POST['name']);
    $content = strip_tags($_POST['content']);
    if(!$name){ $name .='no name';}
    if(!$content) {$error .='コメントがありません。<br>';}
    if(!$error){
        //  テキストデータをクォートする
        //  $escape_name = pg_escape_string($name);
        //  $escape_content = pg_escape_string($content);
        
        //$name = preg_quote($name,'/');
        //$content = preg_quote($content,'/');
        
        preg_match_all('|http://\w+(?:-\w+)*(?:\.\w+(?:-\w+)*)+(?::\d+)?(?:[/\?][\w%&=~\-\+/;\.\?]*(?:#[^<\s>]*)?)?|', $content, $url);
        $url_id = $url;
        
        $pdo = new PDO("mysql:dbname=blog","root","19950103");
        $st = $pdo->prepare("INSERT INTO comment(post_no,name,content) VALUES(?,?,?)");
        $st->execute(array($post_no,$name,$content));
        header('Location: blog_index.php');
        exit();
    }
}
else{
    $post_no = strip_tags($_GET['no']);
}
require 'blog_t_comment.php';