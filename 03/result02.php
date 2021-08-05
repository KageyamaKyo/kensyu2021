<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面</title>
    </head>
    <body>
        <?php
            $gold_id = "01";
            $gold_pw = "gold";
            $reg_id = "02";
            $reg_pw = "reg";

            if($_POST['id'] == $gold_id AND $_POST['password'] == $gold_pw){
                echo 'ゴールド会員：ログイン成功';
            }elseif($_POST['id'] == $reg_id AND $_POST['password'] == $reg_pw){
                echo 'レギュラー会員：ログイン成功';
            }else{
                echo 'ログイン失敗';
            }
        ?>
    </body>
</html>
