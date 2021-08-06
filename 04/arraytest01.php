<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>配列テスト</title>
    </head>
    <body>
        <?php
            $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");
            echo $fruit[3];
            echo $fruit[0];
            echo $fruit[9];
            $fruit[2] = "いちじく";
            $fruit[6] = "キウイ";
            for($i=0; $i < count($fruit) ; $i++){
                echo $fruit[$i] . "<br/>";
            }

            echo "<hr>";
            foreach($fruit as $each){
              echo $each . "<br/>";
            }

            echo "<hr>";

            foreach($fruit as $key => $value){
              echo $key . "番目の要素は" . $value . "です。<br/>";
            }

        ?>
        <pre>
            <?php var_dump($fruit); ?>
        </pre>

    </body>
</html>
