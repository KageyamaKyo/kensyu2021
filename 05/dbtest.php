<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>データベーステスト</title>
    </head>
    <body>
        <table border="1" style="border-collapse:collapse;">
            <tr>
                <th>ID</th>
                <th>メニュー</th>
                <th>ジャンル</th>
                <th>価格</th>
                <th>メモ</th>
            </tr>
            <?php
                $DB_DSN = "mysql:host=localhost; dbname=kkageyama; charset=utf8";
                $DB_USER = "webaccess";
                $DB_PW = "toMeu4rH";
                $pdo = new PDO($DB_DSN, $DB_USER, $DB_PW);


                $query_str = "SELECT ID, menu, genre, price, note FROM test_table WHERE 1";   // 実行するSQL文を作成して変数に保持

                echo $query_str;                                   // 実行するSQL文を画面に表示するだけ（デバッグプリント
                $sql = $pdo->prepare($query_str);                  // PDOオブジェクトにSQLを渡す
                $sql->execute();                                   // SQLを実行する
                $result = $sql->fetchAll();                        // 実行結果を取得して$resultに代入する

                foreach ($result as $x) {
                    echo "<tr><td style='text-align: right'>" . $x['ID'] . "</td>";
                    echo "<td>" . $x['menu'] . "</td>";
                    echo "<td>" . $x['genre'] . "</td>";
                    echo "<td style='text-align: right'>" . $x['price'] . "</td>";
                    echo "<td>" . $x['note'] . "</td></tr>";
                }
            ?>
        </table>
        <pre>
            <?php
                var_dump($result);
            ?>
        </pre>
    </body>
</html>
