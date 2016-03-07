<?php include('header.php'); ?>



	<div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Add Commercial Property</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            

            <div class="row">

                <form role="form" method="post" action="insertresedential.php">

                    <div class="row">

                        

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Property Details

                                </div>

                                <div class="panel-body">

                                        <div class="form-group">

                                            <label>Property Name</label>

                                            <input type="text" class="form-control" placeholder="Enter Property Name"></input>

                                        </div>



                                        <div class="form-group">

                                            <label>Property Description</label>

                                            <textarea class="form-control"></textarea>

                                        </div>



                                        <div class="form-group">

                                            <label>Category</label>

                                            <select class="form-control">

                                                <option>Select Category</option>

                                                <option>FARM SHELL</option>

                                                <option>WARM SHELL</option>

                                                <option>FULLY FURNISHED</option>                                               

                                            </select>

                                        </div>



                                        <div class="form-group">

                                            <label>Property Status</label>

                                            <select class="form-control">

                                                <option>Select Status</option>

                                                <option>Current</option>

                                                <option>Under Offer</option>

                                                <option>Other</option>

                                            </select>

                                        </div>



                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Building Details

                                </div>

                                <div class="panel-body">

                                       



                                        



                                        <div class="form-group">

                                            <label>Builtup Area</label>

                                            <input type="text" class="form-control" placeholder="Enter Property Name"></input>

                                        </div>



                                       



                                </div>

                            </div>



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    House Features

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Bedrooms</label>

                                        <input type="text" class="form-control"></input>

                                    </div>

                                    <div class="form-group">

                                        <label>Bathrooms</label>

                                        <input type="text" class="form-control"></input>

                                    </div>

                                    <div class="form-group">

                                        <label>Living Room</label>

                                        <input type="text" class="form-control"></input>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                        <div class="form-group">

                                            <label>Servent Quaters</label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                    <div class="form-group">

                                        <label>Car Parking</label>

                                        <label class="radio-inline">

                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                        </label>

                                        <label class="radio-inline">

                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                        </label>

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

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Bounquite Hall</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                            <label>Savage Treatment</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                            <label>Solar Fencing</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Security Stytem</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Gated Community</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>





                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12 pad0">

                                        <div class="form-group">

                                            <div>

                                                <label>Water Softner</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Walking/jogging track</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Indoor Play Area</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Outdoor Play Area</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Lifts</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

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

                                         <div class="form-group">

                                            <div>

                                                <label>Remote garage</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Secure parking</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Study</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Dishwasher</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Built in robes</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Gym</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Work shope</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Rumpus room</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Floor boards</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Broadband</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Pay tv</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Vaccum system</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Intercom</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Spa</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad0">

                                        <div class="form-group">

                                            <div>

                                                <label>Tennis cort</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Balcony</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Deck</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Courtyard</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Outdoor entertaining</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                         <div class="form-group">

                                            <div>

                                                <label>Shed</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Ducted Heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Ducted cooling</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Split system heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Hydronic heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Split system aircone</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Gas heating</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Reverse cycle aircone</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Evaporative cooling</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>



                                        <div class="form-group">

                                            <div>

                                                <label>Openfire Place</label>

                                            </div>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Yes

                                            </label>

                                            <label class="radio-inline">

                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No

                                            </label>

                                        </div>

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

                                        <select class="form-control">

                                                <option>Select Details</option>

                                                <option>Builder1</option>

                                                <option>Builder2</option>

                                                <option>Builder3</option>

                                        </select>

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

                                        <input type="date" class="form-control"></input>

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

                                        <input type="file" class="form-control"></input>

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

                                        <input type="text" class="form-control"></input>

                                    </div>



                                    <div class="form-group">

                                        <label>Area</label>

                                        <input type="text" class="form-control"></input>

                                    </div>



                                    <div class="form-group">

                                        <label>City</label>

                                        <input type="text" class="form-control"></input>

                                    </div>



                                    <div class="form-group">

                                        <label>State</label>

                                        <input type="text" class="form-control"></input>

                                    </div>



                                    <div class="form-group">

                                        <label>Country</label>

                                        <input type="text" class="form-control"></input>

                                    </div>



                                    <div class="form-group">

                                        <label>Map Coordinates</label>

                                        <input type="text" class="form-control"></input>

                                    </div>

                                </div>

                            </div>



                            



                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    Pricing

                                </div>



                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Aquire</label>

                                        <select class="form-control">

                                            <option>Buy</option> 

                                             <option>Rent</option>  

                                        </select> 

                                    </div>



                                    <div class="form-group">

                                        <label>Price</label>

                                        <input type="text" class="form-control"></input>

                                    </div>                                  

                                        

                                  



                                    <div class="form-group">

                                        <label>Sale Price Date</label>

                                        <input type="date" class="form-control"></input>

                                    </div>


                <div class="form-group">

                                      
  <select name="type" style="visibility: hidden">

<option value="Commercial">Commercial</option>
<option value="Residential">Residential</option>

</select>

                                    </div>          

                                </div>

                            </div>



                            <input type="submit" class="btn btn-primary" value="SAVE">

                        </div> <!-- Col 5 ends -->

                        <!-- Featured Image Ends -->

                    </div>

                    </form>













                

                    

            </div>

            <!-- /.row -->

        </div>-->

        <!-- /#page-wrapper -->





<?php include('footer.php'); ?>

