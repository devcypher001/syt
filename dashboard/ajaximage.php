<?php
session_start();
$path = "../register/uploads/";

	$valid_formats = array("doc", "docx", "pdf", "ppt");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			$_SESSION['upload_image'] = $name;
		?>
			<input type="text" id="hh" value="<?php echo $_SESSION['upload_image'];?>">
		<?php
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(3145728))
						{
							$kk = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$_SESSION['upload_token1'] = $kk;
							$actual_image_name = $kk;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								
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
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>