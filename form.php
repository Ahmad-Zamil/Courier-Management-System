<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="" method="post">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Full Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Full Name" value="" name="full_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="" name="email" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="tel" pattern="[0-9]{11}" class="form-control" placeholder="01XXXXXXXXX" value="" name="phone" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label"><strong>Password</strong></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" value="" name="password" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Salary</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" placeholder="Salary" value="" name="" required>
                                </div>
                            </div>


                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-form-label col-sm-3 pt-0"><strong>Radios</strong></div>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">First Radio</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Second Radio</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Checkbox</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Example Checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="">
                                        <option>Tech</option>
                                        <option>News</option>
                                        <option>Political</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" value="" name="" required></textarea>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>