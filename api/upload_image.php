<?php
    // Get image string posted from Android App
    include '../connect.php';
    $base=$_REQUEST['image'];
    // Get file name posted from Android App
    $filename = $_REQUEST['filename'];
    $email = $_REQUEST['email'];
    $imgname = $_GET['imgname']; 
    // Decode Image
    $binary=base64_decode($base);
    header('Content-Type: bitmap; charset=utf-8');
    // Images will be saved under 'www/imgupload/uplodedimages' folder
    $file = fopen('../dashboard/images/'.$filename, 'wb');
    // Create File
    $q= mysql_query("UPDATE `syt_registration` SET `image`='$filename' WHERE `email`='$email'");
    if($q){
    	echo "Uploaded successfully";
    }
    else
    {
    	echo "Error";
    }
    
    /*if($q)
    {
    	$json = array("status" => 1, "msg" => "updation successfully");
    }
    else
    {
    	$json = array("status" => 0, "msg" => "updation successfully");
    }*/
    

    
    
    fwrite($file, $binary);
    fclose($file);
   // echo 'Image upload complete, Please check your php file directory';
   echo "Uploaded successfully ";
   
  // echo "[".json_encode($json)."]";
?>