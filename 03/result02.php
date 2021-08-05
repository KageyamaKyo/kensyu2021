<?php
    $gold_id = "01";
    $gold_pw = "gold";
    $reg_id = "02";
    $reg_pw = "reg";

    if($_POST['id'] == $gold_id AND $_POST['password'] == $gold_pw){
    echo 'ゴールド会員やんけ！';
    }elseif($_POST['id'] == $reg_id AND $_POST['password'] == $reg_pw){
    echo 'まだレギュラー会員？';
    }else{
    echo 'ログイン失敗してるで！';
    }
?>
