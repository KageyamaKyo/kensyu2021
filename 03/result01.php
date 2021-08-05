<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面</title>
    </head>
    <body>
        <?php
            $id = "kageyama";
            $password = "0123";

            if($_POST['id'] == $id AND $_POST['password'] == $password){
                echo 'ログイン成功';
            } else {
                echo 'ログイン失敗';
            }
        ?>
    </body>
</html>
