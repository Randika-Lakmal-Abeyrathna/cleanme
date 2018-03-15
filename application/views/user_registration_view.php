
<div class="container-fluid">



    <div class="row">
        <div class="col-lg-2" id="col2" >

        </div>
        <div class="col-lg-8">
            <!---- Registration Form ------>
            <form action="" method="post" >
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Basic Information </div>
                        <div class="panel-body">


                            <!-----basic information Panel ----->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Salutation</label>
                                        <select class="form-control" name="salutaion">

                                            <option>Mr</option>
                                            <option>Miss</option>
                                            <option>Rev</option>

                                        </select>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="fname"  name="fname" placeholder="First Name">

                                        <hr>
                                        <label>NIC Number</label>
                                        <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number">
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                        <hr>
                                        <label>Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <hr>
                                    </div>

                                </div>
                                <p> <br/></p>
                            </div>               
                            <!----- End of basic information Panel ----->


                            <!--- Address panel--->

                            <div class="panel panel-default">
                                <div class="panel-heading"> Address </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Address No</label>
                                                <input type="text" class="form-control" id="addressno"  name="addressno">
                                                <hr>
                                                <label> Street 2</label>
                                                <input type="text" class="form-control" id="street2" name="street2" >
                                                <hr>
                                            </div>


                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Street 1</label>
                                                <input type="text" class="form-control" id="street1" name="street1" >
                                                <hr>
                                                <label> City</label>
                                                <input type="text" class="form-control" id="City1" name="city" >
                                                <hr>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!----- End of Address Panel---->

                            <!---- contact details Panel---->
                            <div class="panel panel-default">
                                <div class="panel-heading"> Contact Details </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label> Mobile Number</label>
                                                <input type="tel" class="form-control" id="mobileno" name="mobileno" >
                                                <hr>
                                                <label> Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                                <label id="emailMsg"></label>
                                                <hr>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Home or Office Number</label>
                                                <input type="tel" class="form-control" id="homeno" name="homeno" >
                                                <hr>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!---- End of contact details Panel---->

                            <!--- Password and userName panel --->
                            <div class="panel panel-danger">
                                <div class="panel-heading"> Password  </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                                <hr>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>  Conform Password</label>
                                                <input type="password" class="form-control" id="conformpassword" name="conformpassword" >
                                                <label id="passwordmsg"></label>
                                                <hr>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--- End  of Password and userName panel --->


                        </div>
                        <!----Submit Button ---->
                        <div class="row">
                            <aside id="buttonsSide">
                                <input type="submit" class="btn btn-primary" value="Register">
                                <input type="button" class="btn btn-warning" value="Cancel"  >
                            </aside>
                        </div>
                        <!---- End of Submit Button ---->

                    </div>

                </div>

            </form>

        </div>

        <div class="col-lg-2" id="col2">
        </div>
    </div>
</div>