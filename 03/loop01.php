<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>指定行数テーブル</title>
    </head>
    <body>
        <form method='post' action='loop01.php'>
        <table>
            <tr>
                <td><input type="number" name="cols" min="1" max="6" />行のテーブルを作成する</td>
            </tr>
        </table>
        <p><input type="submit" value="送信">
           <input type="reset" value="取り消し"></p>
        </form>
        <table border="1" style="border-collapse:collapse;">
            <?php
                for($i=0; $i < $_POST['cols']; $i++){
                    echo "<tr><td>佐藤</td><td>山田</td><td>田中</td><td>山本</td><td>影山</td></tr>";
                }
            ?>
        </table>
    </body>
</html>
