<?php
    include("config/config.php");

    //fetch table rows from mysql db
    //$sql = "select * from tbl_employee";
    //$sql="select * from tbl_property where p_name UNION ALL SELECT * FROM tbl_area WHERE pid=tbl_property.p_name";
  //$sql="SELECT * FROM `tbl_property` AS e INNER JOIN `tbl_area` AS u ON u.pid = e.p_name"; 
  $sql="SELECT *
  FROM tbl_agency";
/*$sql="SELECT *
  FROM tbl_property
   JOIN tbl_area ON tbl_area.pid = tbl_property.p_name
   JOIN tbl_price ON tbl_price.pid = tbl_area.pid
   JOIN tbl_hf ON tbl_hf.pid = tbl_price.pid
   JOIN tbl_ammenties ON tbl_ammenties.pid = tbl_hf.pid
   JOIN tb_af ON tb_af.pid = tbl_ammenties.pid
   JOIN tbl_hc ON tbl_hc.pid = tb_af.pid";*/
    $result = mysqli_query($mysqli, $sql) or die("Error in Selecting " .mysqli_error($mysqli));

    //create an array
    $proarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $proarray[] = $row;
    }
    echo json_encode($proarray);
     //write to json file
    /*$fp = fopen('prodata.json', 'w');
    fwrite($fp, json_encode($proarray));
    fclose($fp);*/

    //close the db connection
    mysqli_close($mysqli);
?>