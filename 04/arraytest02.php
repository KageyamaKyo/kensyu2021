<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>配列テスト2</title>
    </head>
    <body>
        <?php
            $sport = array("野球", "サッカー", "テニス");
            echo $sport[0] . "<br>";
            $needle = "バレー";
            if(in_array($needle, $sport)) {
                echo $needle . " がsportの要素の値に存在しています" . "<br>";
            } else {
                echo $needle . " がsportの要素の値に存在しません" . "<br>";
            }

            $subject = ["英語", "国語", "算数", "理科", "社会"];
            echo $subject[3] . "<br>";
            for($i=0; $i < count($subject) ; $i++){
                echo $subject[$i] . "<br>";
            }

            $color[0] = "赤";
            $color[1] = "青";
            $color[2] = "黄色";
            $color[3] = "緑";
            $color[4] = "白";
            echo "<hr>";
            foreach($color as $each){
              echo $each . "<br>";
            }
            echo "<hr>";
            foreach($color as $key => $value){
              echo $key . "番目の要素は" . $value . "です。<br>";
            }
        ?>
        <pre>
            <?php
                var_dump($sport);
                var_dump($subject);
                var_dump($color);
            ?>
        </pre>
    </body>
</html>
