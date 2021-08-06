<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>連想配列テスト2</title>
    </head>
    <body>
        <table border="1" style="border-collapse:collapse;">
            <?php
                $my_data = array(
                'fruit' => 'メロン',
                'sport' => '野球',
                'town' => '八王子',
                'age' => 21,
                'food' => '牡蠣'
                );

                echo "<tr>";
                foreach($my_data as $each){
                    echo "<td>" . $each . "</td>";
                }
                echo "</tr>";

                echo "<tr>";
                foreach($my_data as $key => $value){
                    echo "<td>" . $key . " : " . $value . "</td>";
                }
                echo "</tr>";
            ?>
        </table>
        <pre>
            <?php
                var_dump($my_data);
            ?>
        </pre>
    </body>
</html>
