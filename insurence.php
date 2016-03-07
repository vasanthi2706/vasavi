
<?php

    //open connection to mysql db
    $connection = mysqli_connect('timesheetdemo.db.11689578.hostedresource.com','timesheetdemo','Timesheet@123','timesheetdemo') or die("Database Error");

$output=array();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
	$jsonString = file_get_contents('php://input');
	
	$myArray = json_decode($jsonString,true);
    
	$memberid = $myArray['fuel'];
    $password = $myArray['make']; 
    $memberid = "123";
    
$emparray['memid'] = $memberid;
$emparray['result'] ='success';
    //fetch table rows from mysql db
    $sql = "select * from vehicleMasterList
    INNER JOIN insurer ON insurer.id = vehicleMasterList.id";
     //$sql.= "select * from carYears;";
/*$mysqli = new mysqli("timesheetdemo.db.11689578.hostedresource.com", "timesheetdemo", "Timesheet@123", "timesheetdemo");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}     
   

if (!$mysqli->multi_query($sql)) {
    echo "Multi query failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
*/
    //create an array
 //   $emparray = array();
 /*   do {
    if ($res = $mysqli->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
         $emparray[] = $res;
        $res->free();
    }
} while ($mysqli->more_results() && $mysqli->next_result());
*/
 $result = mysqli_query($connection,$sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {
      //  $emparray[] = $row;
        $emparray['RTOMasterList'][] = $row;
    }
     $sql = "select * from vehicleMasterList;";
    $result = mysqli_query($connection,$sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray['vehicleMasterList'][] = $row;
    }
//    carYears
    
          $sql = "select * from carYears;";
    $result = mysqli_query($connection,$sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray['carYears'][] = $row;
    }
    
    //popularModel
              $sql = "select * from popularModel;";
    $result = mysqli_query($connection,$sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray['popularModel'][] = $row;
    }
 
         $emparray['results']['liabilityPremiumMap']['Basic Third Party Liability'] = "4931";
         $emparray['results']['Compulsory PA Cover For Owner Driverp']['Basic Third Party Liability'] = "100";
 $emparray['results']['totalOwnDamagePremium'] ="512900";
$emparray['results']['packagePremium'] =512900 + 4931 +100;
 
 echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>