<div class="card">
    <div class="card-header">
        <h3 class="card-title">Getting started</h3>
    </div>
    <div class="card-body">
       
          
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Firstname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="firstname" name="firstname"
                                                            placeholder="Enter firstname" required="" type="text" value="<?php echo $row['first_name'];?>">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Lastname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lastname" name="lastname"
                                                            placeholder="Enter lastname" required="" type="text" value="<?php echo $row['last_name'];?>">
                                                    </div>
                                                </div><br>


                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Address 1: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="address1" name="address1"
                                                            placeholder="Enter your address 1" required="" type="text" value="<?php echo $row['address1'];?>">
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <label class="form-control-label">Address 2:</label> <input
                                                            class="form-control" id="address2" name="address2"
                                                            placeholder="Enter your address 2"  type="text" value="<?php echo $row['address2'];?>">
                                                    </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">State: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="state" name="state"
                                                            placeholder="Enter your State" required="" type="text" value="<?php echo $row['state'];?>">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">City: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="city" name="city"
                                                            placeholder="Enter your City" required="" type="text" value="<?php echo $row['city'];?>">
                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Email: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="email" name="email"
                                                            placeholder="Enter your email" required="" type="email" value="<?php echo $row['userid'];?>" readonly>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Mobile Number: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="mpb" name="mob"
                                                            placeholder="Enter your Mobile Number" required="" type="tel" value="<?php echo $row['phone'];?>" readonly>
                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Landmark: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lmark" name="lmark"
                                                            placeholder="Enter your landmark" required="" type="text" value="<?php echo $row['landmark'];?>">
                                                </div>
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Pincode: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pin" name="pin"
                                                            placeholder="Enter your pinocde" required="" type="text" value="<?php echo $row['pincode'];?>">
                                                </div>

                                                <div class="col-lg-12"> <br>
                                                <h4>Know your location</h4>
                                                        <label class="form-control-label">Your location which helps us easier to pick your donations.<br> <span><b> Refreshed on: <?php echo $row['dou'];?></b></span></label>
                                                        <br><br>
                                                        <iframe id="mapl" src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=es;z=14&output=embed" width="100%" height="300"  frameborder="1"></iframe>
                                                </div>
                                               
                          
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Type</label>
                                                    <select required class="form-control" name="food_type" id="">
                                                    <option value="Fast Foods">Fast Foods</option>
                                                    <option value="Meals">Meals</option>
                                                    <option value="Snacks">Snacks</option>
                                                    </select>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Quantity</label>
                                                    <input
                                                            class="form-control" id="qty" name="qty"
                                                            placeholder="Enter the quantity" required="" type="number">
                                                    </div>
                                                </div><br>
                                                
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Pickup Date: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pdate" name="pdate"
                                                            placeholder="Enter Pickup date" required="" type="date">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Pickup Time: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="ptime" name="ptime"
                                                            placeholder="Enter Pickup Time" required="" type="time" >
                                                    </div>
                                                </div><br>
                   
                
                                            <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">First Name:</label>
                                                        <label id= "fname" class="form-control-label"></label>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Last Name:</label>
                                                        <label id= "lname" class="form-control-label"></label>

                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Address 1:</label>
                                                        <label id= "address1" class="form-control-label"></label>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Address 2:</label>
                                                        <label id= "address2" class="form-control-label"></label>

                                                    </div>
                                                </div><br>
                                            
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">State:</label>
                                                        <label id= "state" class="form-control-label"></label>


                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">City:</label>
                                                        <label id= "city" class="form-control-label"></label>

                                                    </div>
                                                </div><br>
                                            
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Landmark:</label>
                                                        <label id= "lmark" class="form-control-label"></label>


                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Pincode:</label>
                                                        <label id= "pincode" class="form-control-label"></label>

                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Email:</label>
                                                        <label id= "email" class="form-control-label"></label>


                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Mobile Number:</label>
                                                        <label id= "mob" class="form-control-label"></label>

                                                    </div>
                                                </div><br>



                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                        <label class="form-control-label">Current Location:</label><br>
                                                        <iframe id="map" src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=es;z=14&output=embed" width="100%" height="300"  frameborder="1"></iframe>
                                                

                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Food Type:</label>
                                                        <label id= "ftype" class="form-control-label"></label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Quantity:</label>
                                                        <label id= "fqty" class="form-control-label"></label>
                                                    </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Pickup Date:</label>
                                                        <label id= "pkdate" class="form-control-label"></label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Pickup Time:</label>
                                                        <label id= "pktime" class="form-control-label"></label>
                                                    </div>
                                                </div><br>
                                              
                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                    <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="sup" value="1"  required>
                                                                <span class="custom-control-label">I Require a Pickup Support to safely handover my parcel</span>
                                                                
                                                            </label> 
                                                    <label class="custom-control custom-checkbox">
                                                                 <input type="checkbox" class="custom-control-input" name="tnc" value="1"  required>
                                                                <span class="custom-control-label">I Agree that the above details are valid and willing to procced with the donation</span>
                                                      
                                                            </label> 
                                                              </div>
                                                    
                                                </div><br>
                                                
                                            </div>
                                           
            
                                          </div>
        </div>
    </div>
</div>
</div>
</div>
<!--End Row-->