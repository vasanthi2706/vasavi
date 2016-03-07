<?php include('header.php'); ?>



	<div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Add Builder</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            

            <div class="row">

            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        Add Builder

                    </div>

                    <div class="panel-body">

                        <form role="form" method="post" enctype="multipart/form-data" action="insertbuilder.php">

                            <div class="form-group">

                                <label>Builder Name</label>

                                <input type="text" name="name" class="form-control"></input>

                            </div>



                            <div class="form-group">

                                <label>Builder Logo</label>

                                <input type="file" name="logo" class="form-control"></input>

                            </div>



                            <div class="form-group">

                                <label>Email ID</label>

                                <input type="email" name="email" class="form-control"></input>

                            </div>



                            <div class="form-group">

                                <label>Phone Number</label>

                                <input type="text" name="mobile1" class="form-control"></input>

                            </div>



                            <div class="form-group">

                                <label>Alternate Number</label>

                                <input type="text" name="mobile2" class="form-control"></input>

                            </div>



                            <div class="form-group">

                                <label>Address</label>

                                <textarea class="form-control" name="address"></textarea>

                            </div>

                             <div class="form-group">

                                <label>Website Url</label>

                                <input type="text" name="url" class="form-control"></input>

                            </div>

                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-primary" value="SAVE">

                            </div>

                        </form>

                    </div>

                </div>

            </div>

                

                    

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->





<?php include('footer.php'); ?>

