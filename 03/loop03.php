<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>指定行列数テーブル2</title>
    </head>
    <body>
        <form method='post' action='loop03.php'>
        <table>
            <tr>
                <td><input type="number" name="cols" min="1" max="6" />行×
                    <input type="number" name="rows" min="1" max="5" />列
                </td>
            </tr>
        </table>
        <p><input type="submit" value="送信">
           <input type="reset" value="取り消し"></p>
        </form>
        <table border="1" style="border-collapse:collapse;">
            <?php
                for($i=1; $i <= $_POST['cols']; $i++){
                    echo "<tr>";
                    for($e=1; $e <= $_POST['rows']; $e++){
                        echo "<td>" . $i . "-" . $e . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
