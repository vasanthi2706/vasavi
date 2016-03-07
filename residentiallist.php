<?php include('header.php'); ?>

        <div id="page-wrapper">
            
         <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="page-header">List Of Properties</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                                        <tr>
                                            <th>Property Name</th>  
                                            <th>Minimum Price</th>  
                                            <th>Maximum Price</th>  
                                            <th>Property Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                    include "config/config.php";
                        $sql="SELECT *
  FROM tbl_property
  INNER JOIN tbl_area ON tbl_area.pname = tbl_property.p_name
  INNER JOIN tbl_price ON tbl_price.pname = tbl_area.pname
  LEFT JOIN tbl_ammenties ON tbl_ammenties.pname = tbl_price.pname
  LEFT JOIN tb_af ON tb_af.pname = tbl_ammenties.pname";
                                           $result=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
                                                 while($row=mysqli_fetch_array($result))
                                                 {
                                                 
                                                  $propertyname=$row['p_name'];
                                                  $minprice=$row['minprice']; 
                                                  $maxprice=$row['maxprice']; 
                                                  $image=$row['p_image'];
                                                   ?>
                                                    <tr>
                                                    <td><?php echo $propertyname; ?></td> 
                                                    <td><?php echo $minprice; ?></td> 
                                                    <td><?php echo $maxprice; ?></td> 
                                                    <td><?php echo '<img src="'.$image.'" width=100px height=100px/>' ?></td>
                       
                                                   <td><a href="editdetails.php?pname=<?php echo $row['p_name'];?>">Edit</a></td>  
                                                  </tr> 
                                                  <?php
                                                     }
                                                     ?>
                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
               
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->
        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
   
    </script>

<?php include('footer.php'); ?>
 
   

   
