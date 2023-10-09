<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Slider</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="branch_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="branch_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="branch_phone" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch Address</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="branch_address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch Manager</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="branch_manager_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Manager Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="branch_manager_phone" required>
                                </div>
                            </div>


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>