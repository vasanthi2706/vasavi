<?php include('header.php'); 
include "config/config.php";
?>
<script type="text/javascript">
     function hideA(x) {
   if (x.checked) {
     document.getElementById("apartment").style.display = "none";
     document.getElementById("villa").style.display = "block";
   }
 }

 function hideB(x) {
   if (x.checked) {
     document.getElementById("villa").style.display = "none";
     document.getElementById("apartment").style.display = "block";
   }
 }
</script>
   <?php
   $pname=$_REQUEST['pname'];
   $sql="SELECT *
  FROM tbl_property
  INNER JOIN tbl_area ON tbl_area.pname = tbl_property.p_name
  INNER JOIN tbl_price ON tbl_price.pname = tbl_area.pname
  LEFT JOIN tbl_ammenties ON tbl_ammenties.pname = tbl_price.pname
  LEFT JOIN tb_af ON tb_af.pname = tbl_ammenties.pname
 where tbl_property.p_name='$pname' and 
  tbl_area.pname='$pname' and   tbl_price.pname='$pname' and  tbl_ammenties.pname='$pname' and  tb_af.pname='$pname'";
  $result=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
   while($row=mysqli_fetch_array($result))
   {
    $aColors = array("1BHK", "2BHK", "3BHK", "4BHK", "4BHK+");

  $dbcolors= explode(',',$row['p_category1']);

    
    
    $gallery=explode(",",$row['p_gallery']);
  
   ?>

	<div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Update Residential Property</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            

            <div class="row">

                <form role="form" method="post" enctype="multipart/form-data" action="editresidential.php?name=<?php echo $row['p_name'];?>">

                    <div class="row">

                        

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Property Details

                                </div>

                                <div class="panel-body">

                                        <div class="form-group">

                                            <label>Property Name</label>

                                            <input type="text" name="pname" class="form-control" placeholder="Enter Property Name" value="<?php echo $row['p_name'];?>"></input>

                                        </div>



                                        <div class="form-group">

                                            <label>Property Description</label>

                                            <textarea class="form-control" name="pdesc"><?php echo $row['p_description'];?></textarea>

                                        </div>



                                        <div class="form-group">

                                            <label>Select Category:</label>
                                            <label class="radio-inline">
                                                <input type="radio" onchange="hideB(this)" name="ptype" value="Apartment" <?php if ($row['p_type'] == 'Apartment') echo "checked='checked'"; ?>>
                                                Apartment
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" onchange="hideA(this)" name="ptype" value="Villa" <?php if ($row['p_type'] == 'Villa') echo "checked='checked'"; ?>>
                                                Villa
                                            </label>
                                          <?php //foreach($category as $category1){ ?>
                                            <div id="apartment">
                                               <?php
                                              foreach ($aColors as $color) {

   if(in_array($color,$dbcolors)) {
    print_r($dbcolors);

    echo "<input name=\"category[]\" type=\"checkbox\" value=\"$color\" CHECKED> $color ";
      } else

      {

    echo "<input name=\"ctegory[]\" type=\"checkbox\" value=\"$color\"> $color";

          }
        }
  ?>
                                            </div>

                                            <div id="villa" style="display:none;">
                                             

                                            </div>
                                                
                                        </div>
                                       


                                        <div class="form-group">

                                            <label>Property Status</label>

                                            <select class="form-control" name="property">

                                              <option value="<?php echo $row['p_status'];?>"><?php echo $row['p_property'];?></option>
                                                <option value="Ready to Movie-in">Ready to Move-in</option>

                                                <option value="Ongoing">Ongoing</option>

                                                <option value="Upcoming">Upcoming</option>

                                            </select>

                                        </div>



                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Buildup Range

                                </div>

                                <div class="panel-body">

                                        <div class="form-group">

                                            <label>Minimum Size</label>

                                            <input type="text" name="sizemin" class="form-control" placeholder="Enter Minimum Size" value="<?php echo $row['sizemin'];?>">

                                        </div>

                                        <div class="form-group">

                                            <label>Maximum Size</label>

                                            <input type="text" name="sizemax" class="form-control" placeholder="Enter Maximum Size" value="<?php echo $row['sizemax'];?>"></input>

                                        </div>

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <!--<div class="panel-heading">

                                    House Features

                                </div>-->

                                <div class="panel-body">

                                    <!-- <div class="form-group">

                                        <label>Bedrooms</label>

                                        <input type="text" name="bedroom" class="form-control"></input>

                                    </div> -->

                                    <!-- <div class="form-group">

                                        <label>Bathrooms</label>

                                        <input type="text" name="bathroom" class="form-control"></input>

                                    </div> -->

                                    <!-- <div class="form-group">

                                        <label>Living Room</label>

                                        <input type="text" name="livingroom" class="form-control"></input>

                                    </div> -->

                                   



                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                    <div class="form-group">

                                        <!--<label>Car Parking</label>

                                        <label class="radio-inline">

                                                <input type="radio" name="car" id="optionsRadiosInline1" value="Yes" checked>Yes

                                        </label>

                                        <label class="radio-inline">

                                                <input type="radio" name="car" id="optionsRadiosInline2" value="No">No

                                        </label>-->

                                    </div>

                                    </div>



                                        

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Ammenties

                                </div>

                                <div class="panel-body">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                        <div class="form-group">

                                            <div>

                                                <label>Swimming Pool</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="swimming" id="optionsRadiosInline1" value="Yes" <?php if ($row['am_sp'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="swimming" id="optionsRadiosInline2" value="No"  <?php if ($row['am_sp'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Bounquite Hall</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="hall" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_bh'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="hall" id="optionsRadiosInline2" value="No"  <?php if ($row['am_bh'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                           <!-- <div>

                                            <label>Savage Treatment</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="savage" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="savage" id="optionsRadiosInline2" value="No">No

                                            </label>-->

                                        </div>



                                        <!-- <div class="form-group">

                                            <div>

                                            <label>Solar Fencing</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="solar" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="solar" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <div class="form-group">

                                            <div>

                                                <label>Security Stytem</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="security" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_ss'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="security" id="optionsRadiosInline2" value="No"  <?php if ($row['am_ss'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Gated Community</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gated" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_gc'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gated" id="optionsRadiosInline2" value="No"  <?php if ($row['am_gc'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>





                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                        <div class="form-group">

                                           <!-- <div>

                                                <label>Water Softner</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="water" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="water" id="optionsRadiosInline2" value="No">No

                                            </label>-->

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Walking/jogging track</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="walking" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_jt'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="wakling" id="optionsRadiosInline2" value="No"  <?php if ($row['am_jt'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Play Area</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="play" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_pa'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="play" id="optionsRadiosInline2" value="No"  <?php if ($row['am_pa'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <!--<div>

                                                <label>Outdoor Play Area</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="outdoor" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="outdoor" id="optionsRadiosInline2" value="No">No

                                            </label>-->

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Lifts</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="lifts" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_lifts'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="lifts" id="optionsRadiosInline2" value="No"  <?php if ($row['am_lifts'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>

                                        <div class="form-group">

                                            <div>

                                                <label>Gym</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gym" id="optionsRadiosInline1" value="Yes"  <?php if ($row['am_gym'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gym" id="optionsRadiosInline2" value="No"  <?php if ($row['am_gym'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>


                                    </div>



                                    

                                        

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Addtional Features

                                </div>

                                <div class="panel-body">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad0">

                                        <!-- <div class="form-group">

                                            <div><label>Remote garage</label></div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="garage" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="garage" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <div class="form-group">

                                            <div>

                                                <label>Car Wash</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="parking" id="optionsRadiosInline1" value="yes"  <?php if ($row['af_cp'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="parking" id="optionsRadiosInline2" value="yes" <?php if ($row['af_cp'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Study</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="study" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="study" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Dishwasher</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="washer" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="washer" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Built in robes</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="robes" id="optionsRadiosInline1" value="yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="robes" id="optionsRadiosInline2" value="no">No

                                            </label>

                                        </div> -->



                                        


                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Work shop</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="workshop" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="workshop" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Rumpus room</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="rumpus" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="rumpus" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Floor boards</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="floor" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="floor" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Broadband</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="broadband" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="broadband" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Pay tv</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="paytv" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="paytv" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                         <div class="form-group">

                                            <div>

                                                <label>Sewage Treatment Plan</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="sewage" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_stp'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="sewage" id="optionsRadiosInline2" value="No" <?php if ($row['af_stp'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Intercom</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="intercom" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_intercom'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="intercom" id="optionsRadiosInline2" value="No" <?php if ($row['af_intercom'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Spa</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="spa" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_spa'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="spa" id="optionsRadiosInline2" value="No" <?php if ($row['af_spa'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad0">

                                        <div class="form-group">

                                            <div>

                                                <label>Creche</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="creche" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_creche'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="creche" id="optionsRadiosInline2" value="No" <?php if ($row['af_creche'] == 'Yes') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Guest Room</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="guest" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_gr'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="guest" id="optionsRadiosInline2" value="No" <?php if ($row['af_gr'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                      <div class="form-group">

                                            <div>

                                                <label>Centralized Gas Connection</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gas" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_cgc'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gas" id="optionsRadiosInline2" value="No" <?php if ($row['af_cgc'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div> 



                                        <div class="form-group">

                                            <div>

                                                <label>Power Backup</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="power" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_pb'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="power" id="optionsRadiosInline2" value="No" <?php if ($row['af_pb'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Outdoor entertaining</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="entertaining" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="entertaining" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                         <!-- <div class="form-group">

                                            <div>

                                                <label>Shed</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="shed" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="shed" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Ducted Heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="heating" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="heating" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Ducted cooling</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="cooling" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="cooling" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Split system heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="split" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="split" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Hydronic heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="hydronic" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="hydronic" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Split system aircone</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="aircone" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="aircone" id="optionsRadiosInline2" value="Yes">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Gas heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gas" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="gas" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Reverse cycle aircone</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="reverse" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="reverse" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Evaporative cooling</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="ecooling" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="ecooling" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->



                                        <!-- <div class="form-group">

                                            <div>

                                                <label>Openfire Place</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="openfire" id="optionsRadiosInline1" value="Yes" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="openfire" id="optionsRadiosInline2" value="No">No

                                            </label>

                                        </div> -->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                        <div class="form-group">

                                            <label>Servent Quaters</label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="servent" id="optionsRadiosInline1" value="Yes" <?php if ($row['af_sq'] == 'Yes') echo "checked='checked'"; ?>>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="servent" id="optionsRadiosInline2" value="No" <?php if ($row['af_sq'] == 'No') echo "checked='checked'"; ?>>No

                                            </label>

                                        </div>

                                    </div>
                                </div>              
                       
                               </div>

                            </div>

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Floor Plan Image

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Upload File</label>

                                        <input type="file" name="plan" class="form-control" value="<?php echo $row['p_floorplan'];?>">
                                   <img src=<?php echo $row['p_floorplan'];?> width='100px' height='100px' border="0.1" alt="No Image">
                                    </div>     

                                </div>

                            </div>


                               </div> <!-- Col 7 ends -->

                         <!-- Sidebar Starts -->

                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Builder

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Select Bulider</label>

                        <input type="text" class="form-control" name="builder" value="<?php echo $row['a_name'];?>">

                                        
                                    

                                    </div>     

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Property Expiry Date

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Expiry Date</label>

                                        <input type="date" name="date" class="form-control" value="<?php echo $row['edate'];?>">

                                    </div>     

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Featured Image

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Upload File</label>

                                        <input type="file" name="image" class="form-control" value="<?php echo $row['p_image'];?>">
                                        <img src=<?php echo $row['p_image'];?> width='100px' height='100px' border="0.1" alt="No Image">

                                    </div>     

                                </div>

                            </div>

                        <div class="panel panel-default">

                                <div class="panel-heading">

                                    Property Address

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Street Name</label>

                                        <input type="text" name="sname" class="form-control" value="<?php echo $row['p_streetname'];?>">

                                    </div>



                                    <div class="form-group">

                                        <label>Area</label>

                                        <input type="text" name="area" class="form-control" value="<?php echo $row['p_subarea'];?>">

                                    </div>



                                    <div class="form-group">

                                        <label>City</label>

                                        <input type="text" name="city" class="form-control" value="<?php echo $row['p_city'];?>">

                                    </div>



                                    <div class="form-group">

                                        <label>State</label>

                                        <input type="text" name="state" class="form-control" value="<?php echo $row['p_state'];?>"

                                    </div>



                                    <div class="form-group">

                                        <label>Country</label>

                                        <input type="text" name="country" class="form-control" value="<?php echo $row['p_country'];?>"

                                    </div>



                                    <div class="form-group">

                                        <label>Map Coordinates</label>

                                        <input type="text" name="map" class="form-control" value="<?php echo $row['p_locationmap'];?>">

                                    </div>

                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Pricing

                                </div>

                                <div class="panel-body">

                                    <!-- <div class="form-group">

                                        <label>Price</label>

                                        <input type="text" name="price" class="form-control"></input>

                                    </div> --> 

                                    <div class="form-group">

                                        <label>Price Minimum</label>

                                        <input type="text" name="minprice" class="form-control" value="<?php echo $row['minprice'];?>">

                                    </div> 

                                      <div class="form-group">

                                        <label>Price Maximum</label>

                                        <input type="text" name="maxprice" class="form-control" value="<?php echo $row['maxprice'];?>">

                                    </div>                                

                                 <div class="form-group">

                                        <label>Sale Price Date</label>

                                        <input type="date" name="sdate" class="form-control" value="<?php echo $row['pr_spd'];?>">

                                    </div> 
                                     <div class="panel panel-default">

                                <div class="panel-heading">

                                     Add Gallery

                                </div>
                                   
                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Upload File</label>

                                           <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" value="<?php echo $row['p_gallery'];?>">
                                           <?php foreach($gallery as $gallerys){ ?>
                                         
                                           <img src=<?php echo $gallerys;?> width='100px' height='100px' border="0.1" alt="No Image">
                                             <?php }?>

                                    </div>     

                                </div>

                            </div>



                <div class="form-group">

                                      

                <!--<input type="hidden" name="type" class="form-control" value="Residential">
            -->
            <select name="type" style="visibility:hidden;">

<option value="Residential">Residential</option>

<option value="Commercial">Commercial</option>

</select>

                                    </div>
                                   



                                </div>

                            </div>



                            <input type="submit" name="submit" class="btn btn-primary" value="SAVE">

                        </div> <!-- Col 5 ends -->

                        <!-- Featured Image Ends -->

                    </div>



                    </form>
  <?php
}
?>

</div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->





<?php include('footer.php'); ?>

