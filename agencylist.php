<?php include('header.php'); ?>

        <div id="page-wrapper">
            
         <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="page-header">List Of Builders</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                                        <tr>
                                            <th>Property Name</th>  
                                            <th>Mobile1</th>  
                                            <th>Mobile2</th>  
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                    include "config/config.php";
                        $sql="SELECT * FROM tbl_agency";
                                           $result=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
                                                 while($row=mysqli_fetch_array($result))
                                                 {
                                                 
                                                  $agencyname=$row['a_name'];
                                                  $phone1=$row['a_phoneno1']; 
                                                  $phone2=$row['a_phoneno2']; 
                                                  $email=$row['a_emailid']; 
                                                  $address=$row['a_address1']; 
                                                  $logo=$row['a_logo']; 
                                                 
                                                   ?>
                                                    <tr>
                                                    <td><?php echo $agencyname; ?></td> 
                                                    <td><?php echo $phone1; ?></td> 
                                                    <td><?php echo $phone2; ?></td> 
                                                    <td><?php echo $email; ?></td> 
                                                   <td><?php echo $address; ?></td> 
                                                    <td><?php echo '<img src="'.$logo.'" width=100px height=100px/>';; ?></td> 
                                                    <td><a href="editagency.php?id=<?php echo $row['aid'];?>">Edit</a></td>  
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
          <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
   
    </script>

<?php include('footer.php'); ?>
 
   

   
