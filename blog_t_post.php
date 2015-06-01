<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="blog_design.css">
        <title>記事投稿 | ブログテスト</title>
    </head>
    <body>
        <form method="post" action="blog_post.php">
            <div class="post">
                <h2>記事投稿</h2>
                <p>題名</p>
                <p><input type="text" name="title" size="40" value="<?php echo $title ?>"></p>
                <p>本文</p>
                <p><textarea name="content" rows="8" cols="40"><?php echo $content ?></textarea></p>
                <p><input name="submit" type="submit" value="投稿"></p>
                <p><?php echo $error ?></p>
            </div>
        </form>
        <?php
        ?>
    </body>
</html>
