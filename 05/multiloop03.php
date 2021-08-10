<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>自分でデータを作成してテーブルで表示</title>
    </head>
    <body>
        <h>最近見たアニメリスト</h>
        <table border="1" style="border-collapse:collapse;">
            <?php
                $anime01 = array(
                    "title" => "僕のヒーローアカデミア",
                    "name" => "堀越耕平",
                    "season" => "5",
                    "evaluation" => "5",
                    "note" => "毎週楽しみにしています。",
                    );
                $anime02 = array(
                    "title" => "魔入りました! 入間くん",
                    "name" => "西修",
                    "season" => "2",
                    "evaluation" => "5",
                    "note" => "ポップでとても見やすい。",
                    );
                $anime03 = array(
                    "title" => "東京リベンジャーズ",
                    "name" => "和久井健",
                    "season" => "1",
                    "evaluation" => "4",
                    "note" => "見始めたばっかですが、かなり面白い。",
                    );
                $anime04 = array(
                    "title" => "ハイキュー!!",
                    "name" => "古舘春一",
                    "season" => "4",
                    "evaluation" => "5",
                    "note" => "はやくファイナルシーズン始まらないかな...",
                    );
                $anime05 = array(
                    "title" => "呪術廻戦",
                    "name" => "芥見下々",
                    "season" => "1",
                    "evaluation" => "5",
                    "note" => "漫画も読んでみたい！",
                    );
                $anime06 = array(
                    "title" => "Dr. STONE",
                    "name" => "稲垣理一郎&Boichi",
                    "season" => "2",
                    "evaluation" => "4",
                    "note" => "学生の頃に見てたら化学好きになってたかも...?",
                    );

                $animes = array($anime01, $anime02, $anime03, $anime04, $anime05, $anime06);

                echo "<tr><th>作品名</th><th>作者</th><th>現在のシーズン</th><th>評価(5点満点)</th><th>メモ</th></tr>";
                echo "<tr>";
                foreach($animes as $each){
                    echo "<td>" . $each['title'] . "</td>"
                        . "<td>" . $each['name'] . "</td>"
                        . "<td style='text-align: right'>" . $each['season'] . "</td>"
                        . "<td style='text-align: right'>" . $each['evaluation'] . "</td>"
                        . "<td>" . $each['note'] . "</td></tr>";
                }
            ?>
        </table>
        <pre>
            <?php
                var_dump($animes);
            ?>
        </pre>
    </body>
</html>
