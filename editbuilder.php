<?php
 include("config/config.php");
      $id=$_REQUEST['id'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile1=$_POST['mobile1'];
      $mobile2=$_POST['mobile2'];
      $address=$_POST['address'];
      $url=$_POST['url'];
      $file_name = $_FILES['logo']['name'];
      $file_tmp =$_FILES['logo']['tmp_name'];
   
     $path="dist/logo/";
     $logo=$path.$file_name;      
      move_uploaded_file($file_tmp,$logo);
       $sql="UPDATE `tbl_agency` SET `a_name`='$name',`a_logo`='$logo',`a_emailid`='$email',`a_phoneno1`='$mobile1',`a_phoneno2`='$mobile2',`a_address1`='$address',`url`='$url' WHERE aid='$id'";
       $query=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
       if($query)
     {
       echo '<script language="javascript">';
                                    echo 'alert("Builder Updated Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=agencylist.php" />';
         }
         else
         {
         	echo '<script language="javascript">';
                                    echo 'alert("Builder Doesnot Updated Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=agencylist.php" />';
         }
     
   
	?>