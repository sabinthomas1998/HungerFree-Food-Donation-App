


<!-- Row -->
<div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Donations</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Tracking Id</th>
                                                        <th class="border-bottom-0">Food Type</th>
                                                        <th class="border-bottom-0">Requestor Date</th>
                                                        <th class="border-bottom-0">Requested Time</th>
                                                        <th class="border-bottom-0">Quantity</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
$did="";$ftype="";$pdate="";$ptype="";$fqty="";$status="";
$sql="select * from tbl_donations where uid='$id'";
$re=$conn->query($sql);
while($row=mysqli_fetch_array($re))
{
    $did=$row['did'];
    $ftype=$row['food_type'];
    $pdate=$row['requested_date'];
    $ptime=$row['req_time'];
    $fqty=$row['qty'];
    $status=$row['status'];

    ?>
    <tr>
                                                        <td><?php echo $did;?> </td>
                                                        <td><?php echo $ftype;?></td>
                                                        <td><?php echo $pdate;?></td>
                                                        <td><?php echo $ptime;?></td>
                                                        <td><?php echo $fqty;?></td>
                                                        <td><?php echo $status;?></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                        </td>
                                                        <td>
                                                    
                                                                                       <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Reject Request"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
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