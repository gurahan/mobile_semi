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
        <title>コメント投稿 | ブログテスト</title>
    </head>
    <body>
        <form method="post" action="blog_comment.php">
            <div class="post">
                <h2>コメント投稿</h2>
                <p>お名前</p>
                <p><input type="text" name="name" size="40" value="<?php echo $name ?>"></p>
                <p>コメント</p>
                <p><textarea name="content" rows="8" cols="64" wrap="off"><?php echo $content ?></textarea></p>
                <p>
                    <input type="hidden" name="post_no" value="<?php echo $post_no ?>">
                    <input name="submit" type="submit" value="投稿">
                </p>
                <p><?php echo $error ?></p>
            </div>
        </form>
        <?php
        
        ?>
    </body>
</html>
