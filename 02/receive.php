<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>第二回課題、フォーム部品練習</title>
    </head>
    <body>
        <?php
         echo "こんにちは". $_GET['name'] . " さん。<br/>";
        echo "好きな果物は" . $_GET['fruits'] . " ですね。<br/>";
        echo "好きなスポーツは " . $_GET['sports'] . " ですか。<br/>";
        echo "好きな数字は " . $_GET['number'][0]. "、 " .$_GET['number'][1]. "、 " .$_GET['number'][2]." なのね。<br/>";
        echo $_GET['name'] . "さんからのコメントはこちら！<br/> 「" . $_GET['comment']."」" ;
               ?>
    </body>
</html>
