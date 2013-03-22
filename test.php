<?php
include_once("youtube.php");
if (isset($_POST['youtube_video'])){
	$youtube_video = mysql_real_escape_string($_POST['youtube_video']);
	$embed_code = youtubeEmbedFromUrl($youtube_video, 400, 300);
	echo $embed_code ;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>hello logged in</p>
<form action="test.php" enctype="multipart/form-data" method="post">
<input name="youtube_video" size="30" type="text" />
<input name="post" type="submit" value="Post" />
</form>
</body>
</html>