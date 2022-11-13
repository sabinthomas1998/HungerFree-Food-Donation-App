<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <div class="card-title">
                                            Getting started
                                        </div>
                                    </div>
                                    <form id="req" class="needs-validation" novalidate>
                                    <div class="card-body">
                                        <div id="">
                                            <h3>Personal Information</h3>
                                            <section>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Firstname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="firstname" name="firstname"
                                                            placeholder="Enter firstname" required="" type="text" value="<?php echo $row['first_name'];?>">
                                                            <span id="err-fname" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Lastname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lastname" name="lastname"
                                                            placeholder="Enter lastname" required="" type="text" value="<?php echo $row['last_name'];?>">
                                                            <span id="err-lname" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Address 1: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="address1" name="address1"
                                                            placeholder="Enter your address 1" required="" type="text" value="<?php echo $row['address1'];?>">
                                                            <span id="err-address1" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                    <div class="col-lg-6">
                                                    <label class="form-control-label">Address 2: </label><input
                                                            class="form-control" id="address2" name="address2"
                                                            placeholder="Enter your address 2"  type="text" value="<?php echo $row['address2'];?>">
                                                            <span id="err-address2" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">State: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="state" name="state"
                                                            placeholder="Enter your State" required="" type="text" value="<?php echo $row['state'];?>">
                                                            <span id="err-state" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">City: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="city" name="city"
                                                            placeholder="Enter your City" required="" type="text" value="<?php echo $row['city'];?>">
                                                            <span id="err-city" style="font-size:12px;color:red;"></span>
                                                  
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
                                                            class="form-control" id="mob" name="mob"
                                                            placeholder="Enter your Mobile Number" required="" type="tel" value="<?php echo $row['phone'];?>" readonly>
                                                            <span id="err-mob" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <div class="row ">
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Landmark: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lmark" name="lmark"
                                                            placeholder="Enter your landmark" required="" type="text" value="<?php echo $row['landmark'];?>">
                                                            <span id="err-lmark" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Pincode: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pin" name="pin"
                                                            placeholder="Enter your pinocde" required="" type="text" value="<?php echo $row['pincode'];?>">
                                                            <span id="err-pin" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <div class="row ">
                                                <div class="col-lg-12"> 
                                                <h4>Know your location</h4>
                                                        <label class="form-control-label">Your location which helps us easier to pick your donations.<br> <span><b> Refreshed on: <?php echo $row['dou'];?></b></span></label>
                                                        <br><br>
                                                 <iframe id="mapl" src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=es;z=14&output=embed" width="100%" height="300"  frameborder="1"></iframe>
                                                <input type="hidden" id="lat" value="<?php echo $lat; ?>"/>
                                                <input type="hidden" id="lon" value="<?php echo $lon; ?>"/>
                                                    <div>           
                                                </div>
                                                </div><br>
                                                
                                               




                                            </section><br><br>
                                            <h3>Donation Information</h3>
                                            <section>
                                                <p>Lets help the helpless to acheive greater</p>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Type</label>
                                                    <select required class="form-control" name="food_type" id="ftype">
                                                    <option value="Fast Foods">Fast Foods</option>
                                                    <option value="Meals">Meals</option>
                                                    <option value="Snacks">Snacks</option>
                                                    </select>
                                                    <span id="err-ftype" style="font-size:12px;color:red;"></span>
                                                     
                                                </div>

                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Quantity</label>
                                                    <input
                                                            class="form-control" id="qty" name="qty"
                                                            placeholder="Enter the quantity" required="" type="number">
                                                            <span id="err-qty" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>
                                                
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label  class="form-label">Preferred Pickup Date: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pdate" name="pdate"
                                                            placeholder="Enter Pickup date" required="" type="date">
                                                            <span id="err-pdate" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label  class="form-label">Prefered Pickup Time: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="ptime" name="ptime"
                                                            placeholder="Enter Pickup Time" required="" type="time" >
                                                            <span id="err-ptime" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                    <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="sup" class="custom-control-input" name="sup" value="1" >
                                                                <span class="custom-control-label">I Require a Pickup Support to safely handover my parcel</span>
                                                                
                                                            </label> 
                                                    <label class="custom-control custom-checkbox">
                                                                 <input type="checkbox" id ="tnc" class="custom-control-input" name="tnc" value="1"  required>
                                                                <span class="custom-control-label">I Agree that the above details are valid and willing to procced with the donation</span>
                                                      
                                                            </label> 
                                                              </div>
                                                    
                                                </div><br>
                                                <span id= "error" class="form-label"></span>
                                            
                                            </section>
                                            <button id= "subre" class="btn btn-primary mt-4 mb-0">Submit Request</button>
                                            <a href="./" class="btn btn-danger mt-4 mb-0">Cancel</a> 
                                                 </form>
                                               
                                                      

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>




                               



