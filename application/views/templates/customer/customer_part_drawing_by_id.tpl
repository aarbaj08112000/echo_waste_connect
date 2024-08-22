<%if $entitlements.isPLMEnabled%>
<div  class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
    <form action="<%$base_url%>customer_part_drawing/<%$customer_id%>" method="post">
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
          <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Parts</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select class="form-control select2" name="search_part_id" style="width: 100%;">
                <option value="">Select</option>
                <option value="ALL">ALL</option>
            <%foreach from=$customer_part item=part%>
                <option <%if $search_part_id == $part->id%>selected<%/if%>
                    value="<%$part->id%>"><%$part->part_number%></option>
            <%/foreach%> 
        </select>
                </div>
              </li>
             
            </div>
            
            

        </ul>
      </div>
    </nav>
    <div class="filter-popup-btn">
            <button class="btn btn-outline-danger reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
        </form>
</aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes" href="<%$base_url%>customer_master" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer Master</em></a>
        </h1>
        <br>
        <span >Customer Part Drawing</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col">
                        <!-- /.card -->
                            <div class="card">
                            <div class="card-header">
                            <div class="row">
                               
                                <div class="col-lg-1">
                                <br>
                                <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal" data-bs-target="#add_new">
                                    Add </button>   
                                </div>
                                <!-- search by part number -->
                            
                                </div>
                                </div>
                                </div>
                            <!-- /.card-header -->
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleAddModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleAddModalLabel">Add Drawing</h5>
                                            <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<%$base_url%>add_customer_drawing" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <div class="form-group">
                                                            <label for="po_num">Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_master_id" id="" class="from-control select2">
                                                                <%if $customer_part%>
                                                                    <%foreach from=$customer_part item=c%>
                                                                    <option value="<%$c->id%>"><%$customer_data[0]->customer_name%>/<%$customer_data[0]->customer_code%>/<%$c->part_number%>/<%$c->part_description%></option>
                                                                    <%/foreach%>
                                                                <%/if%>
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Part Drawing </label><span class="text-danger">*</span>
                                                            <input type="file" name="drawing" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Cad File </label>
                                                            <input type="file" name="cad"  class="form-control" id="exampleCadFile" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">3D Model </label>
                                                            <input type="file" name="model"  class="form-control" id="example3DModel" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_no" required class="form-control" id="exampleInputEmail1" aria-describedby=" emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Date</label><span class="text-danger">*</span>
                                                            <input type="date" name="revision_date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Remark</label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_remark" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                               </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                                            <th>Add Revision</th>
                                            <th>Revision Number</th>
                                            <th>Revision Date</th>
                                            <th>Revision Remark</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Drawing</th>
                                            <th>Cad File</th>
                                            <th>3D Model</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <%assign var="i" value=1%>
                                        <%if $customer_part_drawing%>
                                            <%foreach from=$customer_part_drawing item=poo%>
                                                <%if $customer_data[0]->id == $customer_id%>

                                                    <tr>
                                                        <td><%$i%></td>
                                                        <td>
                                                            <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary add-revision" data-bs-target="#add_revision" data-value="<%$poo->encoded_data%>">Add</button><br><br>
                                                            
                                                            <a href="<%$base_url%>view_part_drawing_history/<%$poo->customer_master_id%>/<%$customer_id%>" class="btn btn-primary btn-sm">History</a>
                                                            
                            </div>
                            </td>
                            <td><%$customer_part_drawing_data[$poo->customer_master_id][0]->revision_no%></td>
                            <td><%$customer_part_drawing_data[$poo->customer_master_id][0]->revision_date%></td>
                            <td><%$customer_part_drawing_data[$poo->customer_master_id][0]->revision_remark%></td>
                            <td><%$po[$poo->customer_master_id][0]->part_number%></td>
                            <td><%$po[$poo->customer_master_id][0]->part_description%></td>
                            <td>
                                <%if $customer_part_drawing_data[0]->drawing != ""%>
                                    <a title="Download" download href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->drawing%>" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->drawing%>" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                <%/if%>
                                 &nbsp;
                                 <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocumentDrawing<%$i%>"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocumentDrawing<%$i%>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<%$base_url%>update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->id%>" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="drawing">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                         
                                <!-- Ends new upload button -->
                               
                            </td>
                            <td>
                                <%if $customer_part_drawing_data[$poo->customer_master_id][0]->cad != ""%>
                                    <a title="Download" download href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->cad%>" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->cad%>" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                  
                                <%/if%>
                                <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocumentCad<%$i%>"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocumentCad<%$i%>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<%$base_url%>update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->id%>" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="cad">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                <!-- Ends new upload button -->
                            </td>
                            <td>
                                <%if $customer_part_drawing_data[$poo->customer_master_id][0]->model != ""%>
                                    <a title="Download" download href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->model%>" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<%$base_url%>documents/<%$customer_part_drawing_data[$poo->customer_master_id][0]->model%>" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                <%/if%>
                                <!-- new upload button -->

                                <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocument<%$i%>"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocument<%$i%>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<%$base_url%>update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->id%>" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="model">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                <!-- Ends new upload button -->
                            </td>
                            </tr>
                                                <%assign var="i" value=$i+1%>
                                                <%/if%>
                                            <%/foreach%>
                                        <%/if%>
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

    <div class="modal fade" id="add_revision" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Revision</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<%$base_url%>updatecustomerpartdrwing" method="POST" enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-lg">
                            <input value="<%$po[$poo->customer_master_id][0]->id%>" type="hidden" name="id" required class="form-control" id="customer_part" aria-describedby="emailHelp" placeholder="Customer Name">

                            <div class="form-group">
                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                <input type="text" readonly value="<%$po[$poo->customer_master_id][0]->part_number%>" name="upart_number" required class="form-control" id="part_number" placeholder="Enter Part Number" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                <input type="text" readonly value="<%$po[$poo->customer_master_id][0]->part_description%>" name="upart_desc" required class="form-control" id="part_description" placeholder="Enter Part Description" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Part Drawing </label><span class="text-danger">*</span>
                                <input type="file" name="drawing" required class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Cad File </label>
                                <input type="file" name="cad" required class="form-control" id="exampleCadFile">
                            </div>
                            <div class="form-group">
                                <label for="po_num">3D Model </label>
                                <input type="file" name="model" required class="form-control" id="example3DModel">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                <input type="date" value="<%$po[$poo->customer_master_id][0]->revision_date%>" name="revision_date" required class="form-control" id="revision_date" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->customer_master_id%>" name="customer_master_id" required class="form-control" id="customer_master_id" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->cad%>" name="cad" required class="form-control" id="cad" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<%$customer_part_drawing_data[$poo->customer_master_id][0]->model%>" name="model" required class="form-control" id="model" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                <input type="text" value="<%$po[$poo->customer_master_id][0]->revision_no%>" name="revision_no" required class="form-control" id="revision_no" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                <input type="hidden" value="<%$po[$poo->customer_master_id][0]->customer_id%>" name="customer_id" required class="form-control" id="customer_id" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                <input type="hidden" value="<%$po[$poo->customer_master_id][0]->customer_part_id%>" name="customer_part_id" required class="form-control" id="customer_part_id" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                <input type="text" value="" name="revision_remark" required class="form-control" id="revision_remark" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

    <script src="<%$base_url%>/public/js/planning_and_sales/customer_part_drawing.js"></script>
    <%/if%>
<!-- /.content-wrapper -->

