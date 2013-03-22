<?php
include("db.php");
/*if( isset($_POST['upload']) ) // si formulaire soumis
{		echo "soumis!";
        $content_dir = 'profile_picture/'; // dossier où sera déplacé le fichier
        $tmp_file = $_FILES['fichier']['tmp_name'];
		echo "dir".$content_dir;
		echo"file: ".$tmp_file;
        if( !is_uploaded_file($tmp_file) )
        {
                exit("Le fichier est introuvable");
        }
        // on vérifie maintenant l’extension
        $type_file = $_FILES['fichier']['type'];
        if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
        {
                exit("Le fichier n’est pas une image");
        }
        // on fait un test de sécurité
        $name_file = $_FILES['fichier']['name'];
        if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) )
        {
                exit("Nom de fichier non valide");
        }
        // on copie le fichier dans le dossier de destination
        else if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
        {
                exit("Impossible de copier le fichier dans $content_dir");
        }
        echo "Le fichier a bien été uploadé";
}*/

if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['user_email']))
 
{		/**********upload de la profile picture*****************/
		if($_FILES['profile_picture']['name']==''){ 
						 echo "select a profile picture";
						 print 'alert("select a profile picture")'; 
						 ?><script type="text/javascript">alert("select a profile picture");</script><?php
		}
		else{
		$content_dir = 'C:/wamp/www/LikethisMoove_GwenWay/profile_picture/'; // dossier où sera déplacé le fichier
        $tmp_file = $_FILES['profile_picture']['tmp_name'];
        if( !is_uploaded_file($tmp_file) )
        {
                exit("Le fichier est introuvable");
        }
        // on vérifie maintenant l’extension
        $type_file = $_FILES['profile_picture']['type'];
        if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
        {
                exit("Le fichier n’est pas une image");
        }
        // on fait un test de sécurité
        $name_file = $_FILES['profile_picture']['name'];
        if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) )
        {
                exit("Nom de fichier non valide");
        }
        // on copie le fichier dans le dossier de destination
        else if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
        {
                exit("Impossible de copier le fichier dans $content_dir");
        }
        echo "Le fichier a bien été uploadé \n";
		$path=$content_dir.$name_file;
		echo "nom fichier: ".$path;
		/**********fin upload de la profile picture*****************/

	//Prevent SQL injections
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_email = mysql_real_escape_string($_POST['user_email']);
	 
	 
	//Get MD5 hash of password
	$password = md5($_POST['password']);
	 
	//Check to see if username exists
	$sql = mysql_query("SELECT user_name FROM usersystem WHERE user_name = '".$user_name."'");
	if (mysql_num_rows($sql)>0)
	{
		die ("Username already taken.");
	}

mysql_query("INSERT INTO usersystem (user_name, password, user_email, profile_picture) VALUES ( '$user_name', '$password', '$user_email','$path')") or die (mysql_error());

}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LikeThisMoove</title>
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">

<style>
html,body{
	height:100%;
}
.thumbnail{
	background-color:#000;
	margin:0;
	padding:0;
	height:300px;
	text-overflow: ellipsis;
	transition:opacity 2s background-color 2s;
	-moz-transition:width opacity 2s background-color 2s; /* Firefox 4 */
	-webkit-transition:opacity 2s background-color 2s; /* Safari and Chrome */
	-o-transition:width opacity 2s background-color 2s; /* Opera */
}
.thumbnails .thumbnail:hover{
	opacity:0.5;
	filter:alpha(opacity=50);
	background-color:#B90000;
	
}
.thumbnails .thumbnail:hover .caption div.video_t h4{
	color:#FFF;
}
.thumbnails .thumbnail:hover div.description{
	color:#FFF;
}
.thumbnails .thumbnail:hover iframe{
	opacity:.5;
	filter:alpha(opacity=50);
	background-color:#B90000;
}
a:focus {
    outline: thin dotted rgb(51, 51, 51);
    outline-offset: 0px;
}
.navbar .navbar-inner {
  background-size:cover;
  background-image:url(img/texture_header2.jpg);
  background-repeat:no-repeat;
}

.navbar-inverse .navbar-inner {
    background-repeat: no-repeat;
}

.navbar .brand {
  padding: 8px 20px 12px;
  font-size: 20px;
  color: #e20f0f;
}

.navbar .divider-vertical {
  height: 41px;
  background-color: #d82424;
  border-right: 1px solid #e01f1f;
}

.navbar .nav > li > a {
  padding: 10px 10px 11px;
  font-size: 14px;
  color: #e81717;
}
.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
  /*color: #e82020;*/
  border-bottom-color:#F00;
}
	
.navbar .navbar-inner .container-fluid{
	min-height:220px;
}
.navbar .nav > li{
 float:none;
  display:inline-block;
}
.navbar ul.nav{
	margin-left:120px;
}
.navbar ul.nav.second{
	margin-left:120px;
	margin-top:-20px;
}
.navbar .nav > li.logo {
 padding: 30px 15px 20px;
}
.navbar .nav > li > a {
 padding: 30px 15px 20px;
 text-align:center;
 font-size:24px;
}
.navbar .nav > li:hover {
	 border-bottom-color:#900;
     text-decoration:none
}
.navbar-inverse .nav > li:focus, 
.navbar-inverse .nav > li:hover {
	 border-bottom-color:#900;
     text-decoration:none
}
.thumbnails .thumbnail .caption div.video_t h4{
	max-height:70px;
	color:#A00;
	text-overflow: ellipsis;
	overflow: hidden;
    white-space: nowrap;
}
.thumbnails .thumbnail .caption div.description{
	max-height:50px;
	text-overflow: ellipsis;
	overflow: hidden;
    white-space: nowrap;
}
form#registerHere{
		margin-left:30%;
}
#registerHere input[type="text"],
#registerHere input[type="file"],
#registerHere input[type="password"]{
	opacity:0.5;
	filter:alpha(opacity=50);
	background-color:#B90000;
	color:#FFF;
}

</style>
</head>

<body>
	<?php include_once("menu.php");?>
    <div class="container-fluid" id="wrapper">
	<div class="row">
	<div class="span8 offset2">
        <form class="form-horizontal" id="registerHere" method='post' action='inscription.php' enctype="multipart/form-data">
       
        <fieldset>
        
        <legend>Registration</legend>
        
        <div class="control-group">
	      <label class="control-label" for="input01"><b>Name</b></label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_name" name="user_name">
	        <!--<input type="text" class="input-xlarge" id="user_name" name="user_name" rel="popover" data-content="Enter your first and last name." data-original-title="Full Name">-->

	      </div>
		</div>
	
	 	<div class="control-group">
		<label class="control-label" for="input01"><b>Email</b></label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_email" name="user_email">
	     	<!--<input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="What’s your email address?" data-original-title="Email">-->

          </div>
		</div>
	
		<div class="control-group">
		<label class="control-label" for="input01"><b>Password</b></label>
	      <div class="controls">
	        <input type="password" class="input-xlarge" id="password" name="password" rel="popover" data-content="6 characters or more!" data-original-title="Password">
	      </div>
		</div>
        
       <div class="control-group">
            <label class="control-label"><b>Profile Picture</b></label>
            <div class="controls">
            	 <input type="file" class="input-xlarge" id="profile_picture" name="profile_picture">
				<!--<div class="input-append">
    				<input type="text" name="subfile" id="subfile" class="input-xlarge">
    				<a class="btn" onclick="$('#profile_picture').click();">Browse</a>
				</div>-->
           
            <!--<input type="submit" name="upload" value="Upload">-->
        	</div>
        </div>
        
        <!-- <div class="control-group">
        <label class="control-label">Video</label>
        <div class="controls">
        <input type="text" class="input-xlarge" id="user_video" name="user_video" rel="popover" data-content="Do you want to post a video?" data-original-title="Video">
        </div>
        </div>-->
        
        <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
        <button type="submit" class="btn btn-success" >Create My Account</button>
        </div>
        </div>
        
        </fieldset>
        
        </form>
	</div>
	</div>
	</div>
	 <!-- Le javascript
    ================================================== -->
    <script src="js/resize_youtube.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      $(document).ready(function()
		{
		// Popover 
		$('#registerHere input').hover(function()
		{
		$(this).popover('show')
		});
		
		// Validation
		$("#registerHere").validate({
		rules:{
		user_name:"required",
		user_email:{required:true,email: true},
		pwd:{required:true,minlength: 6},
		cpwd:{required:true,equalTo: "#pwd"},
		gender:"required"
		},
		
		messages:{
		user_name:"Enter your first and last name",
		user_email:{
		required:"Enter your email address",
		email:"Enter valid email address"},
		pwd:{
		required:"Enter your password",
		minlength:"Password must be minimum 6 characters"},
		cpwd:{
		required:"Enter confirm password",
		equalTo:"Password and Confirm Password must match"},
		gender:"Select Gender"
		},
		
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass)
		{
		$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass)
		{
		$(element).parents('.control-group').removeClass('error');
		$(element).parents('.control-group').addClass('success');
		}
		});
		});
    </script> 
		
						 
</body>
</html>