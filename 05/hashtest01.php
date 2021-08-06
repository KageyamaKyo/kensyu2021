<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>連想配列テスト</title>
    </head>
    <body>
        <?php
            $my_data = array(
            'fruit' => 'メロン',
            'sport' => '野球',
            'town' => '八王子',
            'age' => 21,
            'food' => '牡蠣'
            );
            echo $my_data['town'] . "<br>";
            echo $my_data['age'] . "<br>";
            echo $my_data['food'] . "<br><br>";

            $his_data = [
            'fruit' => 'バナナ',
            'sport' => 'サッカー',
            'town' => '郡山',
            'age' => 25,
            'food' => '焼肉'
            ];
            echo $his_data['sport'] . "<br>";
            echo $his_data['town'] . "<br>";
            echo $his_data['fruit'] . "<br><br>";

            $her_data['name'] = '鈴木';
            $her_data['blood'] = 'B型';
            $her_data['hobby'] = 'ゲーム';
            $her_data['town'] = '鳥取';
            $her_data['age'] = 20;
            $her_data['college'] = '東京大学';
            echo $her_data['name'] . "<br>";
            echo $her_data['blood'] . "<br>";
            echo $her_data['college'] . "<br>";
        ?>
        <pre>
            <?php
                var_dump($my_data);
                var_dump($his_data);
                var_dump($her_data);
            ?>
        </pre>
    </body>
</html>
