<?php
session_start();
include 'connect.php';
$path = "images/";

$uid = $_SESSION['syt_id'];

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_FILES['photoimg']['name'];
		$size = $_FILES['photoimg']['size'];
			
		if(strlen($name))
		{
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats))
			{
				if($size<(1024*1024))
				{
					$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
					$tmp = $_FILES['photoimg']['tmp_name'];
					if(move_uploaded_file($tmp, $path.$actual_image_name))
						echo "<img src='images/".$actual_image_name."'  class='preview'>";
						$query = mysql_query("UPDATE `syt_registration` SET `banner`='$actual_image_name' WHERE `id` = '$uid'");			
				}
				else
					echo "failed";
			}
			else
				echo "Image file size max 1 MB";					
		}
		else
			echo "Invalid file format..";	
	}
				
		
?>