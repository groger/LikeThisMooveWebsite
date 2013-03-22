<?php
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db("myDB");

function user_login ($user_name, $password)
{
//take the username and prevent SQL injections
$user_name = mysql_real_escape_string($user_name);
//begin the query
$sql = mysql_query("SELECT * FROM usersystem WHERE user_name = '".$user_name."' AND password = md5('".$password."') LIMIT 1");
//check to see how many rows were returned
$rows = mysql_num_rows($sql);
if ($rows<=0 )
{
echo "Incorrect user_name/password".$user_name;

}
else
{
//have them logged in
echo "good";
$_SESSION['user_name'] = $user_name;
echo "<form action=\"logout.php\" method=\"post\">".$user_name."<input type=\"submit\" value=\"Logout\"/></form>";
}
}
?>
 