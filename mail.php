<?php require_once 'funcs.php';?>
<!DOCTYPE html>
<html lang="en">
<body>

<h2>TEXT MAIL</h2>

<form method="post">
    E-mail:
    <input type="text" name="mail" value=""><br>
    <input type="submit" value="Send" name="send">
    <input type="reset" value="Reset">
</form>
<?php if(isset($_POST['send'])){ sendMail($_POST['mail']);} ?>

<br style="line-height:100px;"/>

<h2>HTML MAIL</h2>

<form method="post">
    E-mail:
    <input type="text" name="mail" value=""><br>
    <input type="submit" value="SendHtml" name="sendHtml">
    <input type="reset" value="Reset">
</form>
<?php if(isset($_POST['sendHtml'])){ sendHtmlMail($_POST['mail']);} ?>
</body>
</html>
