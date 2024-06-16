<?php
// Get the CodeIgniter super object
$CI = &get_instance();

// Load the model
$CI->load->model('SupplierParts');
?>

<div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>View Planning Data  </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <a class="btn btn-dark" href="<?php echo base_url('planing_data/').$financial_year.'/'.$month.'/'.$customer_id ; ?>">< Back </a>
                               
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Update Schedule Qty 2 </button>

                                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role=" document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('update_schedule_qty') ?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="contractorName">Enter Schedule 2 Qty </label><span class="text-danger">*</span>
                                                                    <input type="number" name="schedule_qty_2" placeholder="Enter Schedule 2 QTY" class="form-control" required name="schedule_qty" class="form-control">
                                                                    <input type="hidden" required name="id" value="<?php echo $planing_id; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Add Planing</button> -->

                                <!-- Modal -->
                              
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Item part Number</th>
                                            <th>Item part Description</th>
                                            <th>BOM Qty</th>
                                            <th>Schedule Qty </th>
                                            <!-- <th>Schedule 2 Qty </th> 
                                            <th>Change In Schedule Qty </th> -->
                                            <th>Required Qty </th>
                                            <th>Actual Stock </th>
                                            <th>Shortage Stock </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                            foreach ($planing_data as $t) {

                                                $child_part_data = $this->SupplierParts->getSupplierPartById($t->child_part_id);

                                                //$schedule_qty_2 = $t->schedule_qty_2;
                                                $schedule_qty = $t->schedule_qty;
                                                $net_schedule = 0;

                                                if ($schedule_qty_2  != 0) {
                                                    $net_schedule = $schedule_qty_2 - $schedule_qty;
                                                    $req_qty = $t->required_qty +($t->schedule_qty * $t->bom_qty)+ ($net_schedule * $t->bom_qty);
                                                } else {
                                                    $req_qty = ($t->schedule_qty * $t->bom_qty);
                                                }
                                                
                                                $shortage_qty = ($req_qty - $child_part_data[0]->stock);
                                                // $customers_data = $this->Crud->get_data_by_id("customer", $customer_part_data[0]->customer_id, "id");

                                        ?>

                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $child_part_data[0]->part_number ?></td>
                                                    <td><?php echo $child_part_data[0]->part_description ?></td>
                                                    <td><?php echo $t->bom_qty ?></td>
                                                    <td><?php echo $t->schedule_qty; ?></td>
                                                    <!-- 
                                                        schedule_qty_2 is not in use so far..
                                                    <td><?php echo $t->schedule_qty_2; ?></td>
                                                    <td><?php echo $net_schedule; ?></td> 
                                                    -->
                                                    <td><?php echo $req_qty ?></td>
                                                    <td><?php echo $child_part_data[0]->stock ?></td>
                                                    <td><?php echo $shortage_qty ?></td>


                                                </tr>
                                        <?php
                                                $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->