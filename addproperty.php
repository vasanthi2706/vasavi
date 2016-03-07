<?php 
 session_start();
 include("config/config.php");
include('header.php'); 
?>



	<div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Add Properties</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>


            <div class="row">

            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        Select the Property

                    </div>

                    <div class="panel-body">

                        <div class="row">

                            <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">

                                <a href="addresidential.php" class="btn btn-primary">Residential Property</a>
                                   
                            </p>



                            <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">

                                <a href="addcommercial.php" class="btn btn-primary">Commercial Property</a>

                            </p>
                         
                            <!--<form name="select" methos="post">

                                <div class="form-group">
                                <select name="types" class="form-control" onchange="la(this.value)">
                                    <option>--select--</option>
                                    <option value="addresidential.php">Residential</option>
                                    <option value="addcommercial.php">Commercial</option>

                                     
                                </div>
                            </form>-->
                               <?php  //echo $_SESSION['types'];?>
                        </div>

                       

                    </div>

                </div>

            </div>

                

                    

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->
  
<script>
function la(src)
{
 window.location=src;
}

</script>


<?php  include('footer.php'); ?>

