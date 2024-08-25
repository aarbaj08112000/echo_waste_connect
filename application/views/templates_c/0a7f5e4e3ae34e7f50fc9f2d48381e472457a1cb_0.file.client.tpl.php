<?php
/* Smarty version 4.3.2, created on 2024-08-25 17:05:05
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb16e90ab520_20797287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a7f5e4e3ae34e7f50fc9f2d48381e472457a1cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\client.tpl',
      1 => 1724585703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb16e90ab520_20797287 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.modal-body {
    max-height: 600px; /* Adjust the height as needed */
    overflow-y: auto;
}
</style>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
      <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
          <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
        <div class="simplebar-content" >
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Part Number</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select name="clientUnit" id="clientId" class="form-control select2" id="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client_list']->value, 'cl');
$_smarty_tpl->tpl_vars['cl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cl']->value) {
$_smarty_tpl->tpl_vars['cl']->do_else = false;
?>
                <option <?php if (($_smarty_tpl->tpl_vars['filter_client']->value === $_smarty_tpl->tpl_vars['cl']->value->id)) {?>selected<?php }?>
                  value="<?php echo $_smarty_tpl->tpl_vars['cl']->value->client_unit;?>
"><?php echo $_smarty_tpl->tpl_vars['cl']->value->client_unit;?>

                </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    </aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Admin
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Master</em></a>
          </h1>
          <br>
          <span >Client</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
        <?php if (($_smarty_tpl->tpl_vars['noOfClients']->value == 0 || ($_smarty_tpl->tpl_vars['noOfClients']->value == 1 && $_smarty_tpl->tpl_vars['isMultiClient']->value == "true"))) {?>
        <button type="button" class="btn btn-primary float-left" title="Add Client" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="ti ti-plus"></i></button>
        </div>
        <?php }?>
      </div>

      <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered"  role=" document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('addClient');?>
" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="Client_name">Client Unit</label><span class="text-danger">*</span>
                      <input type="text" maxlength="30" name="clientUnit" required class="form-control" id="exampleInputUnit" aria-describedby="unitHelp" placeholder="Client Unit">
                    </div>
                    <div class="form-group">
                      <label for="Client_name">Client Name</label><span class="text-danger">*</span>
                      <input type="text" name="clientName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Client Name">
                    </div>
                    <div class="form-group">
                      <label for="contactPerson">Contact Person</label><span class="text-danger">*</span>
                      <input type="text" name="contactPerson" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Person">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">Client billing address</label><span class="text-danger">*</span>
                      <input type="text" name="clientBaddress" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Client Billing Address">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">Client Shipping address</label><span class="text-danger">*</span>
                      <input type="text" name="clientSaddress" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Client Shipping Address">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">Add GST Number</label><span class="text-danger">*</span>
                      <input type="text" name="gst_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">Add PAN</label><span class="text-danger">*</span>
                      <input type="text" name="pan_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">State</label><span class="text-danger">*</span>
                      <input type="text" name="state" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                    </div>
                    <div class="form-group">
                      <label for="Client_location">State Code</label><span class="text-danger">*</span>
                      <input type="text" name="state_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                    </div>
                    <!-- Example single danger button -->
                    <!-- <div class="form-group">
                    <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                    <input type="text" name="paymentTerms" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
                  </div> -->
                  <div class="form-group">
                    <label for="payment_terms">Phone Number</label><span class="text-danger">*</span>
                    <input type="number" min="0" name="phone_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
                  </div>
                  <div class="form-group">
                    <label for="payment_terms">Bank Details</label><span class="text-danger">*</span>
                    <input type="text" name="bank_details" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                  </div>
                  <div class="form-group">
                    <label for="payment_terms">Address 1</label><span class="text-danger">*</span>
                    <input type="text" name="address1" required class="form-control" aria-describedby="emailHelp" placeholder="Address 1">
                  </div>
                  <div class="form-group">
                    <label for="payment_terms">Location</label><span class="text-danger">*</span>
                    <input type="text" name="location" required class="form-control" aria-describedby="emailHelp" placeholder="Location">
                  </div>
                  <div class="form-group">
                    <label for="payment_terms">Pin</label><span class="text-danger">*</span>
                    <input type="text" name="pin" required class="form-control" aria-describedby="emailHelp" placeholder="Pin">
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
    </div>


    <!-- Main content -->
    <div class="card p-0 mt-4">
 

      <div class="table-responsive text-nowrap">
        <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="client">
          <thead>
            <tr>
              <th>Sr. No.</th>
              <th>Client Unit</th>
              <th>Client Name</th>
              <th>Contact Person</th>
              <th>Client Billing Address</th>
              <th>Client Shipping Address</th>
              <th>GST Number</th>
              <th>Phone Number</th>
              <th>PAN NO</th>
              <th>State</th>
              <th>State Code</th>
              <th>Bank Details</th>
              <th>Address 1</th>
              <th>Location</th>
              <th>Pin</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $_smarty_tpl->_assignInScope('i', 1);?>
            <?php if (($_smarty_tpl->tpl_vars['client_list']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client_list']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->client_unit;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->client_name;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->contact_person;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->billing_address;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->shifting_address;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->phone_no;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->bank_details;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->address1;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->pin;?>
</td>
              <td>
                <button type="submit" data-bs-toggle="modal" class="btn no-btn btn-primary edit-part" data-bs-target="#exampleModal2" data-value="<?php echo base64_encode(json_encode($_smarty_tpl->tpl_vars['t']->value));?>
"> <i class="ti ti-edit"></i></button>
                
              </td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- /.col -->

  <div class="modal fade" id="exampleModal2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Tool</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                      </div>
                      <form action="<?php echo base_url('updateClient');?>
" method="POST" id="update_client_form">
                      <div class="modal-body">
                          <div class="row">
                            
                              <div class="form-group col-6">
                                <label>Contact Unit</label><span class="text-danger">*</span>
                                <input type="label" readonly value="<?php echo $_smarty_tpl->tpl_vars['t']->value->client_unit;?>
" name="uclientUnit" required class="form-control" id="client_unit" aria-describedby="unitHelp" placeholder="Client Unit">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_name">Client Name</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->client_name;?>
" name="uclientName" required class="form-control" id="client_name" aria-describedby="emailHelp" placeholder="Client Name">
                              </div>
                              <div class="form-group col-6">
                                <label for="contact_person">Contact Person</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->contact_person;?>
" name="ucontactPerson" required class="form-control" id="contact_person" aria-describedby="emailHelp" placeholder="Client Code">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">Client billing address</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->billing_address;?>
" name="uclientBaddress" required class="form-control" id="billing_address" aria-describedby="emailHelp" placeholder="Client Billing Address">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">Client Shipping address</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->shifting_address;?>
" name="uclientSaddress" required class="form-control" id="shifting_address" aria-describedby="emailHelp" placeholder="Client Shipping Address">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">Add GST Number</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
" name="ugst_no" required class="form-control" id="gst_number" aria-describedby="emailHelp" placeholder="Add GST Number">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">Add PAN No</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
" name="pan_no" required class="form-control" id="pan_no" aria-describedby="emailHelp" placeholder="Add GST Number">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">State</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
" name="state" required class="form-control" id="state" aria-describedby="emailHelp" placeholder="Add GST Number">
                              </div>
                              <div class="form-group col-6">
                                <label for="Client_location">State Code</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
" name="state_no" required class="form-control" id="state_no" aria-describedby="emailHelp" placeholder="Add GST Number">
                              </div>
                              <div class="form-group col-6">
                                <label for="payment_terms">Phone Number</label><span class="text-danger">*</span>
                                <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->phone_no;?>
" min="0" name="uphone_no" required class="form-control" id="phone_no" aria-describedby="emailHelp" placeholder="Payment Terms">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" id="t-id">
                              </div>
                              <div class="form-group col-6">
                                <label for="payment_terms">Bank Details</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->bank_details;?>
" name="bank_details" required class="form-control" id="bank_details" aria-describedby="emailHelp" placeholder="Bank Details">
                              </div>
                              <div class="form-group col-6">
                                <label for="payment_terms">Address 1</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->address1;?>
" name="address1" required class="form-control" id="address1" aria-describedby="emailHelp" placeholder="Address 1">
                              </div>
                              <div class="form-group col-6">
                                <label for="payment_terms">Location</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
" name="location" required class="form-control" id="location" aria-describedby="emailHelp" placeholder="Location">
                              </div>
                              <div class="form-group col-6">
                                <label for="payment_terms">Pin</label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pin;?>
" name="pin" required class="form-control" id="pin" aria-describedby="emailHelp" placeholder="Pin">
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
                </div>


  <div class="content-backdrop fade"></div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/client.js"><?php echo '</script'; ?>
>
<?php }
}
