<!-- Row -->
<div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pending Donations Requests nearby</h3>
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
                                                        <th class="border-bottom-0">Comments</th>
                                                        <th class="border-bottom-0">Assign Volunteer</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$email="";$mob="";$address="";$name="";$did="";$ftype="";$pdate="";$ptype="";$fqty="";$status="";
$sql="SELECT *,SQRT( POW(69.1 * (lat - 9.5697086), 2) + POW(69.1 * (76.6490366 - lon) * COS(lat / 57.3), 2)) 
AS distance FROM tbl_donations where ngoid=0 and finalstatus='' HAVING distance < 20 ORDER BY distance";
$re=$conn->query($sql);
while($row=mysqli_fetch_array($re))
{
    $did=$row['did'];
    $uid=$row['uid'];
    $ftype=$row['food_type'];
    $pdate=$row['requested_date'];
    $ptime=$row['req_time'];
    $fqty=$row['qty'];
    $status=$row['ngostatus'];
    $name=$row['fname']. ' '.$row['lname'];
    $address=$row['address1'].', '.$row['address2'].', '.$row['city'].', '.$row['state'].', Pincode:'.$row['pin'];
   
    
$sql1="select * from reg_users where id='$uid'";
$re1=$conn->query($sql1);
while($row1=mysqli_fetch_array($re1)){
$email=$row1['userid'];
$phone=$row1['phone'];
}
    ?>
    <tr>                                            <input type="hidden" value="<?php echo $id;?> " id="rid"/>
                                                        <td>#<?php echo $did;?> </td>
                                                        <td><?php echo $ftype;?></td>
                                                        <td><?php echo $name;?></td>
                                                        <td><?php echo $phone;?></td>
                                                        <td><?php echo $email;?></td>
                                                        <td><?php echo $pdate;?></td>
                                                        <td><?php echo $ptime;?></td>
                                                        <td><?php echo $address;?></td>
                                                        <td><?php echo $fqty;?></td>
                                                        <td><textarea class="form-control" rows="3" id="comments<?php echo $did;?>"></textarea></td>
                                                        <td><select class="form-control" id="vol<?php echo $did;?>" onchange="assign(this.value)">
                                                        <option value="">Select</option>   
                                                        
                                                       <?php
                                                       $qq="SELECT *,SQRT( POW(69.1 * (lat - 9.5697086), 2) + POW(69.1 * (76.6490366 - lon) * COS(lat / 57.3), 2)) AS distance FROM reg_users where user_type= '2' and isactive='1'  HAVING distance < 25 ORDER BY distance";
                                                       $resq=$conn->query($qq);
                                                       
                                                       while($row3=mysqli_fetch_array($resq))
                                                       {
                                                           $vid=$row3['id'];
                                                           $name=$row3['first_name'].' '.$row3['last_name'];
                                                           echo '<option value="'.$vid.'">'.$name.'</option>';
                                                       }?>
                                                        
                                                        
                                                        
                                                        </select></td>
                                                        <td>
                                                    
                                                                                       <div class="g-2">
                                                                                       <a  onclick="approve(<?php echo $did;?>)" class="btn btn-success btn-sm"
                                                                                            id="upd" >Accept Request</a>
                                                                                            
                                                                                            <a href="<?php echo './auth/rej-order.php?did='.$did.'&r=2';?>"  class="btn btn-danger btn-sm"
                                                                                            id="rej" >Reject Request</a>
                                                                                    </div>
                                                        
                                                        </td>
                                                    </tr><?php
}
?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                  
                           <script>

var assignee="";

function assign(a)
{

    assignee= a;
   
}


function approve(a)
{   var com="comments".concat(a);
    b=document.getElementById(com).value;
    ngo=document.getElementById("rid").value;
    if (assignee == "")
    alert("Choose Assignee..");

    else
    window.location.replace("approve.php?did="+a+"&com="+b+"&assign="+assignee+"&ngo="+ngo);

}
</script>