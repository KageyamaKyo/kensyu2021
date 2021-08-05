<?php
    $id = "kageyama";
    $password = "0123";

    if($_POST['id'] == $id AND $_POST['password'] == $password){
        echo 'ログイン成功おめでとう';
    } else {
            echo 'ログイン失敗してるで';
    }
?>
