<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ブログテスト</title>
        <link rel="stylesheet" href="blog_design.css">
    </head>
    <body>
        <h1>ブログテスト</h1>
        <!-- <?php if(is_array($posts)){ ?> -->
            <?php foreach ((array)$posts as $post) { ?>
                <div class="post">
                    <h2><?php echo $post['no'] . ". " . $post['title'] ?></h2>
                    <div id="content">
                        <div style="width: auto;height: auto;overflow: auto;">
                            <?php echo nl2br($post['content']) ?>
                        </div>
                    </div>
                    <?php foreach ($post['comments'] as $comment) { ?>
                        <div class="comment">
                            <h3>
                                <div class="no_name"><?php echo $comment['no'] . ". " . $comment['name']  ?></div>
                                <div class="timer"><?php echo $comment['time'] ?></div>
                            </h3>
                            <div style="width: auto;height: auto;overflow: auto;">
                                <p><?php 
                                echo nl2br($comment['content'])
                                ?></p>
                                
                                <!-- a href="<?php $comment['url_id']?>"><?php $comment['url_id'] ?></a> -->
                            </div>
                            <script type="text/javascript">
                                function submitChk () {
                                    var flag = confirm("削除してもよろしいですか？");
                                    return flag;
                                }
                            </script>
                            <br>
                            <p class="delete_link">
                                <a href='blog_delete.php?no=<?php echo $comment['no']?>' <?php echo "onclick=\"return confirm('削除しますか？')\" "?>>削除</a>
                            </p>
                        </div>
                    <?php } ?>

                    <p class="comment_link">
                        投稿日：<?php echo $post['time'] ?>
                        <a href="blog_comment.php?no=<?php echo $post['no'] ?>">コメント</a>
                    </p>
                </div>
            <?php } ?>
        <!-- <?php } ?> -->
    </body>
</html>
