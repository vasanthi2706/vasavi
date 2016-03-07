<?php include('header.php'); 
include "config/config.php";
?>



	<div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Update Builder</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>
             <?php
             $id=$_REQUEST['id'];
             $sql="select * from tbl_agency where aid='$id'";
             $result=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
             while($row=mysqli_fetch_array($result))
             {
             ?>
            

            <div class="row">

            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        Update Builder

                    </div>

                    <div class="panel-body">

                        <form role="form" method="post" enctype="multipart/form-data" action="editbuilder.php?id=<?php echo $row['aid'];?>">

                            <div class="form-group">

                                <label>Builder Name</label>

                                <input type="text" name="name" class="form-control" value="<?php echo $row['a_name']; ?>">

                            </div>


                            <div class="form-group">

                                <label>Builder Logo</label>

                                <input type="file" name="logo" class="form-control" value="<?php echo $row['a_logo'];?>">
                                <img src=<?php echo $row['a_logo'];?> width='100px' height='100px' border="0.1">

                            </div>



                            <div class="form-group">

                                <label>Email ID</label>

                                <input type="email" name="email" class="form-control" value="<?php echo $row['a_emailid'];?>"></input>

                            </div>



                            <div class="form-group">

                                <label>Phone Number</label>

                                <input type="text" name="mobile1" class="form-control" value="<?php echo $row['a_phoneno1']; ?>"></input>

                            </div>



                            <div class="form-group">

                                <label>Alternate Number</label>

                                <input type="text" name="mobile2" class="form-control" value="<?php echo $row['a_phoneno2'];?>"></input>

                            </div>



                            <div class="form-group">

                                <label>Address</label>

                                <textarea class="form-control" name="address"><?php echo $row['a_address1'];?></textarea>

                            </div>

                             <div class="form-group">

                                <label>Website Url</label>

                                <input type="text" name="url" class="form-control" value="<?php echo $row['url'];?>">

                            </div>

                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-primary" value="SAVE">

                            </div>

                        </form>
                        <?php
                    }
                    ?>

                    </div>

                </div>

            </div>

                

                    

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->





<?php include('footer.php'); ?>

