<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>データ構造の作成</title>
    </head>
    <body>
        <table border="1" style="border-collapse:collapse;">
            <?php
                $player01 = array(
                    "id" => "3",
                    "name" => "梶谷隆幸",
                    "position" => "外野手",
                    "from" => "島根",
                    "year" => "2007",
                    );
                $player02 =  array(
                    "id" => "44",
                    "name" => "佐野恵太",
                    "position" => "外野手",
                    "from" => "岡山",
                    "year" => "2017",
                    );
                $player03 =  array(
                    "id" => "15",
                    "name" => "井納翔一",
                    "position" => "投手",
                    "from" => "東京",
                    "year" => "2013",
                    );

                $players = array($player01, $player02, $player03);

                echo "<tr><td>背番号</td><td>名前</td><td>ポジション</td><td>出身地</td><td>入団年</td></tr>";
                echo "<tr>";
                foreach($players as $each){
                    echo "<td>" . $each['id'] . "</td>"
                        . "<td>" . $each['name'] . "</td>"
                        . "<td>" . $each['position'] . "</td>"
                        . "<td>" . $each['from'] . "</td>"
                        . "<td>" . $each['year'] . "</td></tr>";
                }

            ?>
        </table>
        <pre>
            <?php
                var_dump($players);
            ?>
        </pre>
    </body>
</html>
