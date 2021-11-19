<?php

require 'db_user.php';
if(isset($_POST['uploadFiles'])) 
{
    $extension = array('jpeg', 'jpg', 'png', 'gif' );
  foreach ($_FILES['file']['tmp_name'] as $key => $value){
     $filename=$_FILES['file']['name'][$key];
      $filename_tmp=$_FILES['file']['tmp_name'][$key];
      echo '<br>';
      $ext=pathinfo($filename,PATHINFO_EXTENSION);

      $finaling='';
		if(in_array($ext, $extension))
		{
			if(!file_exists('images/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'images/'.$filename);
			$finaling=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'images/'.$newfilename);
				 $finaling=$newfilename;
			}
			$creattime=date('Y-m-d h:i:s');
			//insert
			$insertqry="INSERT INTO `requirements`( `Requirements`, `Date Posted`) VALUES ('$finaling','$creattime')";
			mysqli_query($conn,$insertqry);

			header('Location: index.php');
		}
  }
} else {
    header("location: ../profile.php?error=walangnangyyare");
    exit();
}

?>