 <?php
 include("config/config.php");
 $errors= array();
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile1=$_POST['mobile1'];
      $mobile2=$_POST['mobile2'];
      $address=$_POST['address'];
      $url=$_POST['url'];
      $file_name = $_FILES['logo']['name'];
      $file_size =$_FILES['logo']['size'];
      $file_tmp =$_FILES['logo']['tmp_name'];
      $file_type=$_FILES['logo']['type'];
      //$new_image = 'image' .'_' . uniqid().'.jpg';
      $file_ext=strtolower(end(explode('.',$_FILES['logo']['name'])));
      //$date=date("d-m-Y");
      //echo $date;
/*$timezone = "Asia/Kolkata";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$time= date(' H:i:s ');
$date=date('d-m-Y');*/
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
       header( "refresh:5;url=addbuilder.php" );
      	/*echo '<script language="javascript">';
                                    echo 'alert("Image extension not allowed, please choose a JPEG or PNG file.")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=uploadimage.php" />';*/
      }
      
      if($file_size >2000000){
         $errors[]='File size must be 2MB';
         header( "refresh:5;url=addbuilder.php" );
      		/*echo '<script language="javascript">';
                                    echo 'alert("Image size must be excately 100*100")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=uploadimage.php" />';*/
      }
      if(empty($errors)==true){
        $logo="dist/logo/".$file_name;
         move_uploaded_file($file_tmp,);
       /* $sql = mysqli_query($mysqli,"SELECT memid from tbl_members WHERE memid = '$memid'");

      
    if (mysqli_num_rows($sql) > 0)
     {*/
       $query=mysqli_query($mysqli,"insert into tbl_agency(a_name,a_logo,a_phoneno1,a_phoneno2,a_emailid,a_address1,url)values('$name','$logo','$mobile1','$mobile2','$email','$address','$url')") or die(mysqli_error($mysqli));//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
   
       echo '<script language="javascript">';
                                    echo 'alert("Builder Uploaded Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=addbuilder.php" />';
         }
         else
         {
         	echo '<script language="javascript">';
                                    echo 'alert("Builder Doesnot Inserted Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=addbuilder.php" />';
         }
     /* }
      else{
         print_r($errors);
         header( "refresh:5;url=uploadimage.php" );
      	
      }*/
   
	?>