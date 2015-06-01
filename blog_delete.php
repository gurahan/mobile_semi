<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" http-equiv="refresh" content="5;URL=http://localhost/BlogTest/blog_index.php">
        <title>コメントの削除</title>
    </head>
    <body>
        <?php
        $pdo = new PDO("mysql:dbname=blog","root","19950103");
        $st = $pdo->prepare("DELETE FROM comment WHERE no=?");
        $st->execute(array($_GET['no']));
        ?>
        コメントを削除しました。<br>
        5秒後にジャンプします。<br>
        ジャンプしない場合は、下記のURLをクリックしてください。<br>
        <br>
        <a href="http://localhost/BlogTest/blog_index.php">http://localhost/BlogTest/blog_index.php</a>
    </body>
</html>
