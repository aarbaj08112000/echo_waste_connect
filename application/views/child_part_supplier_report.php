<div class="wrapper">
    <!-- Navbar -->
<?php 
 $role = trim($this->session->userdata['type']);

?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="width:2000px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Supplier Part Price </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">item part List</li>
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
                                <h3 class="card-title">

                                </h3>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button> -->

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
                                                <form action="<?php echo base_url('addchildpart_supplier') ?>" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                            <!-- <div class="form-group">
                                                                <label for="operation_number">Operation Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="operationNumber" class="form-control" required id="exampleInputPassword1" placeholder="Operation Number">
                                                        </div>-->
                                                            <div class="form-group">
                                                                <label> Supplier List </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="supplier_id" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($supplier_list as $c) {
                                                                    ?>
                                                                        <option value="<?php echo $c->id; ?>"><?php echo $c->supplier_name; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <label> Select item part </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="child_part_id" style="width: 100%;">
                                                                    <?php
                                                                    if ($child_part_list) {
                                                                        foreach ($child_part_list as $c) {
                                                                    ?>
                                                                            <option value="<?php echo $c->id; ?>"><?php echo $c->part_number . ' / ' . $c->part_description; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Select Tax Structure </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="gst_id" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($gst_structure as $c) {
                                                                    ?>
                                                                        <option value="<?php echo $c->id; ?>"><?php echo $c->code; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <label>With in State </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="with_in_state" style="width: 100%;">
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div> -->

                                                            <div class="form-group">
                                                                <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                                                <input type="text" value="" name="upart_rate" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Revision Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="revision_no" value="1" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Revision Remark</label><span class="text-danger">*</span>
                                                                <input type="text" name="revision_remark" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Remark" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Revision Date</label><span class="text-danger">*</span>
                                                                <input type="date" name="revision_date" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Quotation Document</label>
                                                                <input type="file" name="quotation_document" class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                                                            </div>




                                                        </div>


                                                        <div class="col-lg-6">


                                                        </div>


                                                        <!-- <div class="col-lg-6">

                                                            <div class="form-group">
                                                                <label for="operation_name">Operation Name</label><span class="text-danger">*</span>
                                                                <input type="text" name="operataionName" class="form-control" required id="exampleInputPassword1" placeholder="Operation Name ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fixture_number">Fixture Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="fixtureNumber" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fixture Number">
                                                            </div>
                                                        </div> -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="<?php echo base_url('view_child_part_supplier_by_filter') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div style="width: 400px;">
                                                <div class="form-group">
                                                    <label for="on click url">Select Supplier <span class="text-danger">*</span></label> <br>
                                                    <!-- <select name="child_part_id" class="form-control" id="">
                                                        <option <?php if ($filter_child_part_id === "All") ?> value="All">All</option>
                                                        <?php
                                                        foreach ($child_part_list_filter as $c) {
                                                        ?>
                                                            <option <?php if ($filter_child_part_id === $c->child_part_id) echo 'selected' ?> value="<?php echo $c->child_part_id ?>"><?php echo $c->part_number; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>           
                                                                                          -->

                                                    <select name="supplier_id" class="form-control select2" id="">
                                                        <option <?php if ($filter_supplier_id === "All") ?> value="All">All</option>
                                                        <?php
                                                        foreach ($supplier_list as $s) {
                                                        ?>
                                                            <option <?php if ($filter_supplier_id === $s->id) echo 'selected' ?> value="<?php echo $s->id ?>"><?php echo $s->supplier_name; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">&nbsp;</label> <br>
                                            <button class="btn btn-secondary">Search </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Approval Status </th>
                                            <th>Rev. & History</th>
                                            <th>Revision Number</th>
                                            <th>Revision Remark</th>
                                            <th>Revision Date</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Tax Structure</th>
                                            <!-- <th>Update Tax</th> -->
                                            <!-- <th>With In State</th> -->
                                            <th>Supplier</th>
                                            <th>Part Price</th>
                                            <th>Quotation Document </th>
                                            <!-- <th>HSN Code</th>
                                            <th>UOM</th>
                                            <th>Safety/Buffer Stack</th>
                                            <th>item part Type</th>
                                            <th>Drawing</th>
                                            <th>CAD File</th>
                                            <th>Modal file</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if ($child_part_master) {
                                            foreach ($child_part_master as $poo) {

                                                if (isset($filter_supplier_id) && $filter_supplier_id != "All" && $filter_supplier_id != $poo->supplier_id)
                                                    continue;
                                                $array = array(
                                                    "part_number" => $poo->part_number,
                                                    "supplier_id" => $poo->supplier_id,

                                                );
                                                $po = $this->Crud->get_data_by_id_multiple_condition("child_part_master", $array);
                                                $supplier_data = $this->Crud->get_data_by_id("supplier", $poo->supplier_id, "id");
                                                $uom_data = $this->Crud->get_data_by_id("uom", $po[0]->uom_id, "id");
                                                $child_part_id = $this->Crud->get_data_by_id("part_type", $po[0]->child_part_id, "id");
                                                $gst_structure2 = $this->Crud->get_data_by_id("gst_structure", $po[0]->gst_id, "id");
                                        ?>
                                                <tr>

                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $po[0]->admin_approve ?></td>
                                                    <td>
                                                        <?php
                                                        if ($po[0]->admin_approve == "accept") {
                                                        ?>
                                                            <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModaledit2<?php echo $i ?>"> <i class="fas fa-edit"></i></button>

                                                        <?php
                                                        }

                                                        ?>
                                                        <a href="<?php echo base_url('price_revision/') . $po[0]->part_number . "/" . $poo->supplier_id; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-history"></i></a>
                                                        <!-- <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-history"></i>

                                                        </a> -->

                                                        <div class="modal fade" id="exampleModaledit2<?php echo $i ?>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Revision </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="<?php echo base_url('updatechildpart_supplier') ?>" method="POST" enctype='multipart/form-data'>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <input value="<?php echo $po[0]->id ?>" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">

                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $po[0]->part_number  ?>" name="upart_number" readonly class="form-control" placeholder="Enter Part Number.">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $po[0]->part_description  ?>" name="upart_desc" readonly required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description">
                                                                                    </div>
                                                                                    <!-- <div class="form-group">
                                                                                        <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $po[0]->part_rate  ?>" name="upart_rate" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                                                                                    </div> -->
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                                                                        <input type="date" value="<?php echo date('Y-m-d'); ?>" name="urevision_date" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="urevision_no" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                                                                        <input type="hidden" readonly value="<?php echo $po[0]->supplier_id ?>" name="supplier_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="revision_remark" required class="form-control" id="exampleInputEmail1" placeholder="Enter revision_remark" aria-describedby="emailHelp">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="upart_rate" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Quotation Document</label>
                                                                                        <input type="file" name="quotation_document" class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label> Select Tax Structure </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2" name="gst_id" style="width: 100%;">
                                                                                            <?php
                                                                                            foreach ($gst_structure as $c) {
                                                                                            ?>
                                                                                                <option <?php if ($c->id == $gst_structure2[0]->id) {
                                                                                                            echo "selected";
                                                                                                        } ?> value="<?php echo $c->id; ?>"><?php echo $c->code; ?></option>
                                                                                            <?php
                                                                                            }
                                                                                            ?>
                                                                                        </select>
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
                            </div>

                            </td>
                            <td><?php echo $po[0]->revision_no ?></td>
                            <td><?php echo $po[0]->revision_remark ?></td>
                            <td><?php echo $po[0]->revision_date ?></td>
                            <td><?php echo $po[0]->part_number ?></td>
                            <td><?php echo $po[0]->part_description ?></td>
                            <td><?php echo $gst_structure2[0]->code ?></td>

                            <!-- <td> -->
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $i; ?>">
                                    <i class='far fa-edit'></i>
                                </button> -->
                            <!-- edit Modal -->
                            <div class="modal fade" id="edit<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <form action="<?php echo base_url('update_gst_report') ?>" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label> Select Tax Structure </label><span class="text-danger">*</span>
                                                            <input type="hidden" readonly value="<?php echo $po[0]->id ?>" name="id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">

                                                            <select class="form-control select2" name="gst_id" style="width: 100%;">
                                                                <?php
                                                                foreach ($gst_structure as $c) {
                                                                ?>
                                                                    <option <?php if ($c->id == $gst_structure2[0]->id) {
                                                                                echo "selected";
                                                                            } ?> value="<?php echo $c->id; ?>"><?php echo $c->code; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                </div>


                                                <div class="col-lg-6">

                                                </div>


                                            </div>

                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- edit Modal -->


                            <!-- </td> -->
                            <!-- <td><?php echo $po[0]->with_in_state ?></td> -->

                            <td><?php echo $supplier_data[0]->supplier_name ?></td>
                            <td><?php echo $po[0]->part_rate ?></td>
                            <td>
                                <?php
                                                if (!empty($po[0]->quotation_document)) { ?>
                                    <a href="<?php echo base_url('documents/') . $po[0]->quotation_document; ?>" download>Download </a>
                                <?php
                                                }
                                ?>
                            </td>


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