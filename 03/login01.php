<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面</title>
    </head>
    <body>
        <form method='post' action='login01.php'>
        <tr>
            <td><input type="text" name="id" size="20" maxlength="28" placeholder="ID" /></td>
            <td><input type="text" name="password" size="20" maxlength="28" placeholder="PASSWORD" /></td>
        </tr>
        <p><input type="submit" value="ログイン">
           <input type="reset" value="リセット"></p>
        <?php
            $id = "kageyama";
            $password = "0123";

            if($_POST['id'] == $id AND $_POST['password'] == $password){
                header( "Location: ./result01.php" ) ;
            } else {
                    echo 'ログイン失敗してるで';
            }
        ?>
        </form>
    </body>
</html>
