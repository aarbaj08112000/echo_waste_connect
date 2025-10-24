
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
 

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Citizen Management
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Garbage Pickup Request</em></a>
          </h1>
          <br>
          <span >Listing</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <%* <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> *%>
        <%if checkGroupAccess("garbage_pickup_request","add","No")%>
        <a href="add_garbage_pickup_request" class="btn btn-seconday" title="Add Garbage Pickup Request">
       <i class="ti ti-plus"></i>
        </a>
        <%/if%>
       

      </div>
      
      <div class="w-100">
            <input type="text" name="reason" placeholder="Filter Search" class="form-control serarch-filter-input m-3 me-0" id="serarch-filter-input" fdprocessedid="bxkoib">
        </div>

      <!-- Main content -->
      <div class="card p-0 mt-4 w-100">
        <div class="">

          <div class="table-responsive text-nowrap">
                     <table id="school_listing" class="table  table-striped  display nowrap w-100">
                                          

                                             
                                          </table>
                     </div>
        </div>
        <!--/ Responsive Table -->
      </div>
      <!-- /.col -->


      <div class="content-backdrop fade"></div>
      <div class="modal fade" id="changeStatusPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                  </button>
               </div>
               <form action="<%base_url('citizen/citizen/updateGarbagePickupRequest')%>" method="POST" enctype="multipart/form-data" id="change_status" class="change_status custom-form">
               <div class="modal-body">
                    <input type="hidden" id="request_id" name="request_id" />
				            <div class="form-group">
                  		<label for="on click url">Status<span class="text-danger">*</span></label> <br>
                  	 	<select name="status" class="form-control select2 required-input" id="request_status">
		                	<option value="">Select Status</option>
		             	    </select>
                  	</div>
                    <div class="form-group image_upload">
                  		<label for="on click url">Image<span class="text-danger">*</span></label> <br>
                  	 	<input class="form-control" name="process_images[]" type="file" multiple id="imageInput" accept=".png,.jpg,.jpeg"/>
                  	</div>
                    <div id="preview" style="margin-top:10px; display:flex; flex-wrap:wrap; gap:10px;"></div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
               </form>
               </div>
            </div>
         </div>
  </div>
        <div class="modal fade" id="assignStaffPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Assign Staff</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                  </button>
               </div>
               <form action="<%base_url('citizen/citizen/assignStaffGarbagePickupRequest')%>" method="POST" enctype="multipart/form-data" id="assign_staff" class="assign_staff custom-form">
               <div class="modal-body">
                    <input type="hidden" id="assign_request_id" name="request_id" />
				            <div class="form-group">
                  		<label for="on click url">Staff<span class="text-danger">*</span></label> <br>
                  	 	<select name="staff_id" class="form-control select2 required-input" >
		                	<option value="">Select Staff</option>
                      <%foreach from=$staff_user item=staff key=key %>
                        <option value="<%$staff['id']%>"><%$staff['user_name']%></option>
                      <%/foreach%>
		             	    </select>
                  	</div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
               </form>
               </div>
            </div>
         </div>
      </div>
    </div>


    <script type="text/javascript">
    var base_url = <%$base_url|@json_encode%>;
   var column_details =  <%$data|json_encode%>;
   var page_length_arr = <%$page_length_arr|json_encode%>;
   var is_searching_enable = <%$is_searching_enable|json_encode%>;
   var is_top_searching_enable =  <%$is_top_searching_enable|json_encode%>;
   var is_paging_enable =  <%$is_paging_enable|json_encode%>;
   var is_serverSide =  <%$is_serverSide|json_encode%>;
   var no_data_message =  <%$no_data_message|json_encode%>;
   var is_ordering =  <%$is_ordering|json_encode%>;
   var sorting_column = <%$sorting_column%>;
   var api_name =  <%$api_name|json_encode%>;
   var base_url = <%$base_url|json_encode%>;
   var order_acceptance_enable = <%$order_acceptance_enable|json_encode%>;
   var left_fix_column = <%$left_fix_column|json_encode%>;
   var is_deleted = <%$is_deleted|json_encode%>;
    </script>

    <script src="<%$base_url%>public/js/citizen/garbage_pickup_request.js"></script>
