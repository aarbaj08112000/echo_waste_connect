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
                        <h1>PO Summary Report</h1>
                    </div>
                    <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">PO Balance Qty</li>
                        </ol>
                    </div>-->
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
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo base_url('reports_po_balance_qty'); ?>" method="post">

                                        <div class="form-group">
                                            <label for="">Select Month  <span class="text-danger">*</span></label>
                                            <select required name="created_month" id="" class="form-control select2">
                                                <?php
                                                 for ($i = 1; $i <= 12; $i++) {

                                                    $month_data = $this->Common_admin_model->get_month($i);
                                                    $month_number = $this->Common_admin_model->get_month_number($month_data);
                                                    ?>
                                                    <option
                                                    <?php 
                                                    if($month_number == $created_month){echo "selected";}
                                                    ?>
                                                    value="<?php echo $month_number;?>"><?php echo $month_data?></option>
                                                    <?php
                                                 }
                                                ?>
                                            </select>
                                        </div>
                                        
                                       

                                    </div>
                                    <div class="col-lg-2">

                                    <div class="form-group">
                                            <label for="">Select Year  <span class="text-danger">*</span></label>
                                            <select required name="created_year" id="" class="form-control select2">
                                                <?php
                                                 for ($i = 2022; $i <= 2027; $i++) {

                                                    ?>
                                                    <option 
                                                    <?php 
                                                    if($i == $created_year){echo "selected";}
                                                    ?>
                                                    value="<?php echo $i;?>"><?php echo $i?></option>
                                                    <?php
                                                 }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">

                                        <input type="submit" class="btn btn-primary mt-4"value="Search">
                                       

                                        </form>
                                    </div>
                                </div>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button> -->
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('add_job_card') ?>" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">




                                                        <div class="form-group">
                                                            <label for="po_num">Select Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_part_id" id="" class="from-control select2">
                                                                <?php
                                                                if ($customer_part) {
                                                                    foreach ($customer_part as $c) {
                                                                        if (true) {                                                                        // $data['toolList'] = $this->Crud->get_data_by_id("tools", "insert", "type");
                                                                            $customer = $this->Crud->get_data_by_id("customer", $c->customer_id, "id");

                                                                ?>
                                                                            <option value="<?php echo $c->id ?>"><?php echo $customer[0]->customer_name . "/" . $customer[0]->customer_code . "/" . $c->part_number . "/" . $c->part_description ?></option>
                                                                <?php
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Required Quantity </label><span class="text-danger">*</span>
                                                            <input type="number" name="req_qty" placeholder="Enter Quantity" min="1" value="" class="form-control">

                                                        </div>
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


                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Supplier name</th>
                                            <th>Part No</th>
                                            <th>Part Description</th>
                                            <th>PO Number</th>
                                            <th>Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th>Qty</th>
                                            <th>Received QTY</th>
                                            <th>Balance QTY</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Sr. No.</th>
                                            <th>Supplier name</th>
                                            <th>Part No</th>
                                            <th>Part Description</th>
                                            <th>PO Number</th>
                                            <th>Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th>Qty</th>
                                            <th>Received QTY</th>
                                            <th>Balance QTY</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if ($po_data) {
                                            foreach ($po_data as $po) {
                                            ?>

                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $po->supplier_name ?></td>
                                                        <td><?php echo $po->part_number ?></td>
                                                        <td><?php echo $po->part_description ?></td>
                                                        <td><?php echo $po->po_number; ?></td>
                                                        <td><?php echo $po->created_date; ?></td>
                                                        <td><?php echo $po->expiry_po_date; ?></td>
                                                        <td><?php echo $po->status; ?></td>
                                                        <td><?php echo $po->qty; ?></td>
                                                        <td><?php echo ($po->qty - $po->pending_qty); ?></td>
                                                        <td><?php echo $po->pending_qty; ?></td>
                                                    </tr>
                                        <?php
                                                    $i++;
                                            }
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