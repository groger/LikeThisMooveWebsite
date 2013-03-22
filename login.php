

<?php
include("db.php");
if (isset($_POST['user_name']) && isset($_POST['password']))
{    
	user_login($_POST['user_name'], $_POST['password']);
}
?>
<html></html>
<form action="login.php" method="post">
Username: <input name="user_name" type="text" />
Password: <input type="password" name="password" />
<input type="submit" value="Submit" />
</form>
