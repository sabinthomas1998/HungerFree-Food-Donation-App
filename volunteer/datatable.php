<!-- Row -->
<div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pending Donations</h3>
                                    </div>

                                  
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Tracking Id</th>
                                                        <th class="border-bottom-0">Food Type</th>
                                                        <th class="border-bottom-0">Requestor Name</th>
                                                        <th class="border-bottom-0">Requestor Phone</th>
                                                        <th class="border-bottom-0">Requestor Email</th>
                                                        <th class="border-bottom-0">Requestor Date</th>
                                                        <th class="border-bottom-0">Requested Time</th>
                                                        <th class="border-bottom-0">Requestor Address</th>
                                                        <th class="border-bottom-0">Quantity</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$email="";$mob="";$address="";$name="";$did="";$ftype="";$pdate="";$ptype="";$fqty="";$status="";
$sql="select * from tbl_donations where volid='$id' and volstatus=0";
if($re=$conn->query($sql)){
while($row=mysqli_fetch_array($re))
{
    $did=$row['did'];
    $uid=$row['uid'];
    $ftype=$row['food_type'];
    $pdate=$row['requested_date'];
    $ptime=$row['req_time'];
    $fqty=$row['qty'];
    $status=$row['finalstatus'];
    $name=$row['fname']. ' '.$row['lname'];
    $address=$row['address1'].', '.$row['address2'].', '.$row['city'].', '.$row['state'].', Pincode:'.$row['pin'];
    
    $sql1="select * from reg_users where id='$uid'";
$re1=$conn->query($sql1);
while($row1=mysqli_fetch_array($re1)){
$email=$row1['userid'];
$phone=$row1['phone'];
}
    ?>
    <tr>                                            <input type="hidden" value="<?php echo $did;?> " name="rid"/>
                                                        <td>#<?php echo $did;?> </td>
                                                        <td><?php echo $ftype;?></td>
                                                        <td><?php echo $name;?></td>
                                                        <td><?php echo $phone;?></td>
                                                        <td><?php echo $email;?></td>
                                                        <td><?php echo $pdate;?></td>
                                                        <td><?php echo $ptime;?></td>
                                                        <td><?php echo $address;?></td>
                                                        <td><?php echo $fqty;?></td>
                                                        <td>
                                                    
                                                                                       <div class="g-2">
                                                                                       <a  href="<?php echo './auth/acc-order.php?did='.$did.'&s=1';?>" class="btn btn-success btn-sm"
                                                                                            id="upd" >Accept Request</a>
                                                                                            
                                                                                            <a href="<?php echo './auth/rej-order.php?did='.$did.'&r=2';?>"  class="btn btn-danger btn-sm"
                                                                                            id="rej" >Reject Request</a>
                                                                                    </div>
                                                        
                                                        </td>
                                                    </tr><?php
}}

?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                  
                           