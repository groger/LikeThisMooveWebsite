<?php
include("db.php");
/*$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["profile_picture"]["name"]));
if ((($_FILES["profile_picture"]["type"] == "image/gif")
|| ($_FILES["profile_picture"]["type"] == "image/jpeg")
|| ($_FILES["profile_picture"]["type"] == "image/png")
|| ($_FILES["profile_picture"]["type"] == "image/pjpeg"))
&& ($_FILES["profile_picture"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["profile_picture"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["profile_picture"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["profile_picture"]["name"] . "<br>";
    echo "Type: " . $_FILES["profile_picture"]["type"] . "<br>";
    echo "Size: " . ($_FILES["profile_picture"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["profile_picture"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["profile_picture"]["name"]))
      {
      echo $_FILES["profile_picture"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["profile_picture"]["tmp_name"],
      "profile_picture/" . $_FILES["profile_picture"]["name"]);
	  $profile_picture="profile_picture/" . $_FILES["profile_picture"]["name"];
      echo "Stored in: " . "/profile_picture/" . $_FILES["profile_picture"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }*/
  if( isset($_POST['upload']) ) // si formulaire soumis
{		echo "soumis!";
        $content_dir = 'profile_picture/'; // dossier où sera déplacé le fichier
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
        echo "Le fichier a bien été uploadé";
}

?>