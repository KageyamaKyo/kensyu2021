<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>二次元配列</title>
    </head>
    <body>
        <table border="1" style="border-collapse:collapse;">
            <?php
                $team_a = array("東京", "名古屋", "博多", "北海道", "沖縄");
                $team_b = array("英語", "国語", "算数", "理科", "社会");
                $team_c = array("1G", "2G", "3G", "営業G", "マーケG");
                $team_d = array("お水", "お茶", "コーヒー", "お酒", "ウーロン茶");
                $team_e = array("鯛", "鮪", "鯖", "鰯", "鮭");
                $team_f = array("水星", "金星", "地球", "火星", "木星");

                $team_all = array($team_a, $team_b, $team_c, $team_d, $team_e, $team_f);

                foreach($team_all as $team){
                    echo "<tr>";
                    foreach($team as $each){
                        echo "<td>" . $each . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <pre>
            <?php
                var_dump($team_all);
            ?>
        </pre>
    </body>
</html>
