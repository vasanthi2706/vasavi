 <?php
 include("config/config.php");
 $errors= array();
      $pname=$_POST['pname'];
      $pdesc=$_POST['pdesc'];
      $ptype=$_POST['ptype'];
      $category= implode(', ',$_POST['category']);
      $property=$_POST['property'];
      $builder=$_POST['builder'];
      $sizemin=$_POST['sizemin'];
      $sizemax=$_POST['sizemax'];
      $servent=$_POST['servent'];
      $swimming=$_POST['swimming'];
      $hall=$_POST['hall'];
      $gym=$_POST['gym'];
      $security=$_POST['security'];
      $gated=$_POST['gated'];
      $walking=$_POST['walking'];
      $play=$_POST['play'];
      $lifts=$_POST['lifts'];
      $parking=$_POST['parking'];
      $intercom=$_POST['intercom'];
      $spa=$_POST['spa'];
      $creche=$_POST['creche'];
      $guest=$_POST['guest'];
      $gas=$_POST['gas'];
      $power=$_POST['power'];
      $sewage=$_POST['sewage'];
      $date=$_POST['date'];
      $sname=$_POST['sname'];
      $area=$_POST['area'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $map=$_POST['map'];
      //$aquire=$_POST['aquire'];
      //$price=$_POST['price'];
      $sdate=$_POST['sdate'];
      $type=$_POST['type'];
      $minprice=$_POST['minprice'];
      $maxprice=$_POST['maxprice'];
    
  $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "dist/gallery/"; // Upload directory
$count = 0;


$getuploadfiles="";
    $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
    for($i=0;$i<=count($_FILES["files"]["name"])-1;$i++)
    {
        $filename=$_FILES["files"]["tmp_name"][$i];
        $fileExtension = strrchr($_FILES['files']['name'][$i], ".");
        if (in_array($fileExtension, $validExtensions)) 
        {
                $newName = $_FILES['files']['name'][$i];
             $destination = 'dist/gallery/' . $newName;
              if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $destination)) 
            {
                    $getuploadfiles=$getuploadfiles.$destination.',';
                }
           } 
    }//gallery
    //floor plan image started
     $target_dir = "dist/floorplan/";
    $floorplan = $target_dir . basename($_FILES["plan"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($floorplan,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["plan"]["tmp_name"], $floorplan); 
  //floor plan image completed
      //featured image started
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
     
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
     
      }
      
      if($file_size >2000000){
         $errors[]='File size must be 2MB';
        
      }
      $path="dist/images/";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$path.$file_name);
          $image=$path.$file_name;
       $sql1 = "INSERT INTO `tbl_property`(`p_name`, `p_description`, `p_image`,`p_gallery`,`p_floorplan`,`p_type`, `p_category1`, `p_streetname`, `p_subarea`, `p_city`, `p_state`, `p_country`, `p_locationmap`, `p_property`, `a_name`, `type`,`edate`) VALUES ('$pname','$pdesc','$image','$getuploadfiles','$floorplan','$ptype','$category','$sname','$area','$city','$state','$country','$map','$property','$builder','$type','$date')";
    
    
    // execute query
     $rs = mysqli_query($mysqli, $sql1)or  die(mysqli_error($mysqli));
     
      //building area   
     $sql2 = "INSERT into tbl_area (pname,sizemin,sizemax)
             values('$pname','$sizemin','$sizemax')";  
           
    // execute query
      $rs = mysqli_query($mysqli, $sql2)or  die(mysqli_error($mysqli));
       //price details
       $sql3 = "INSERT into tbl_price (pname,pr_spd,minprice,maxprice)
             values('$pname','$sdate','$minprice','$maxprice')";  
              
    // execute query
      $rs = mysqli_query($mysqli, $sql3)or  die(mysqli_error($mysqli));
       //housing features
       /*$sql4 = "insert into tbl_hf (pname,hf_sq)
             values('$pname','$servent')";    
   
    // execute query
      $rs = mysqli_query($mysqli, $sql4)or  die(mysqli_error($mysqli));*/
     
    
      //ammenities
      $sql5 = " INSERT into tbl_ammenties ( pname, am_sp, am_bh, am_gym,am_ss,am_jt,am_pa, am_gc,am_lifts) VALUES (
 '$pname','$swimming','$hall','$gym','$security','$walking','$play','$gated','$lifts')";
    
  
     // execute query
       $rs = mysqli_query($mysqli, $sql5)or  die(mysqli_error($mysqli));
     //additional features
  
  $sql6="INSERT INTO `tb_af`(`pname`, `af_cp`,`af_intercom`, `af_spa`, `af_sq`, `af_cgc`, `af_pb`,`af_creche`,`af_stp`, `af_gr`) VALUES ('$pname','$parking','$intercom','$spa','$servent','$gas','$power','$creche','$sewage','$guest')";
 
     //execute query
         $rs = mysqli_query($mysqli, $sql6)or  die(mysqli_error($mysqli));

        //additional
        /*$sql7="INSERT INTO `tbl_hc`(`pname`, `hc_dh`, `hc_dc`, `hc_ssh`, `hc_hh`, `hc_ssa`, `hc_gh`, `hc_rca`, `hc_ec`, `hc_ofp`) VALUES ('$pname','$heating','$cooling','$split','$hydronic','$aircone','$gas','$reverse','$ecooling','$openfire')"; 

        //execute query
         $rs = mysqli_query($mysqli, $sql7)or  die(mysqli_error($mysqli));*/
    
      if($rs == true )
      {
       echo '<script language="javascript">';
                                    echo 'alert("Property Uploaded Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=addresidential.php" />';
         }
         else
         {
         	echo '<script language="javascript">';
                                    echo 'alert("Property Doesnot Inserted Sucessfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=addresidential.php" />';
         }
      }

     
      /*else{
         print_r($errors);
         header( "refresh:5;url=uploadimage.php" );
      	
      }*/
   
	?>