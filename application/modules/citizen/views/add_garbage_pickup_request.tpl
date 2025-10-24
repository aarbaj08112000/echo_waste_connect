
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
          <span >Add</span>
        </div>
      </nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
         <a href="<%base_url('garbage_pickup_request')%>"  class="btn btn-seconday" title="Back To College/School Master Listing">
       <i class="ti ti-arrow-left"></i>
        </a>

       

      </div>
      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <%* <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> *%>
        
       <!-- <button type="button" class="btn btn-seconday" data-bs-toggle="modal" data-bs-target="#addPromo" title="Add process">
       <i class="ti ti-plus"></i>
        </button> -->
       

      </div>
     

      <!-- Main content -->
      <div class="card p-0 mt-4 w-100">
        <div class="p-3">

        <form class="container mt-4" id="create_form">
        <div class="row">
          <div class="col-md-4">
            <label for="name" class="form-label fs-6">Type of Waste<span class="text-danger ms-1">*</span></label>
            <select class=" select2"  name="type_of_waste">
                <option value="">Select Type of Waste</option>
                <option value="Household">Household</option>
                <option value="Plastic">Plastic</option>
                <option value="Electronic">Electronic</option>
                <option value="Medical">Medical</option>
                <option value="Construction">Construction</option>
                <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="name" class="form-label fs-6">Quantity / Volume<span class="text-danger ms-1">*</span></label>
            <select class=" select2"  name="qty_vol">
                <option value="">Select Quantity / Volume</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="url" class="form-label fs-6">Preferred Pickup Date<span class="text-danger ms-1">*</span></label>
            <input type="date" class="form-control" placeholder="Enter Pickup Date" name="pickup_date">
          </div>
          <div class="col-md-4 mt-4">
            <label for="url" class="form-label fs-6">Preferred Time Slot<span class="text-danger ms-1">*</span></label>
            <input type="time" class="form-control" placeholder="Enter Pickup Date" name="time_slot">
          </div>
          <div class="col-md-4 mt-4">
            <label for="image" class="form-label fs-6">Pickup Location<span class="text-danger ms-1">*</span></label>
            <input type="text" class="form-control" name="location">
          </div>
          <div class="col-md-4 mt-4">
            <label for="image" class="form-label fs-6">Pickup Location Image<span class="text-danger ms-1">*</span></label>
            <input type="file" class="form-control" name="image">
          </div>
          <div class="col-md-4 mt-4 ">
            <div class="autocomplete-box">
                <label for="url" class="form-label fs-6">Waste Description<span class="text-danger ms-1"></span></label>
                <textarea name="waste_description" class="form-control textarea"  maxlength="1000" placeholder="Enter Special Instructions" ></textarea>
                <div id="the-count" style="
                float: right;
                margin-top: 7px;
            ">
                <span id="current"></span>
                <span id="maximum">/ 1000</span>
                </div>
            </div>
          </div>
          <div class="col-md-4 mt-4 ">
            <div class="autocomplete-box">
                <label for="url" class="form-label fs-6">Special Instructions<span class="text-danger ms-1"></span></label>
                <textarea name="special_instruction" class="form-control textarea1"  maxlength="1000" placeholder="Enter Special Instructions"></textarea>
                <div id="the-count1" style="
                float: right;
                margin-top: 7px;
            ">
                <span id="current1"></span>
                <span id="maximum1">/ 1000</span>
                </div>
            </div>
          </div>
          
      
      
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
         
        </div>
        <!--/ Responsive Table -->
      </div>
      <!-- /.col -->
    

      <div class="content-backdrop fade"></div>
    </div>

    <style type="text/css">
      input.required-check:checked {
          border-color: #0d6efd !important;
          background-color: #fc0d0d !important;
      }
      .required-check{
          position: absolute;
          top: -13px;
          right: -7px;
          width: 22px;
          height: 22px;
      }
    </style>
    <script type="text/javascript">
    var base_url = <%base_url()|@json_encode%>;
    $('.textarea').keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#current'),
      maximum = $('#maximum'),
      theCount = $('#the-count');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 70) {
    current.css('color', '#666');
  }
  if (characterCount > 70 && characterCount < 90) {
    current.css('color', '#6d5555');
  }
  if (characterCount > 90 && characterCount < 100) {
    current.css('color', '#793535');
  }
  if (characterCount > 100 && characterCount < 120) {
    current.css('color', '#841c1c');
  }
  if (characterCount > 120 && characterCount < 139) {
    current.css('color', '#8f0001');
  }
  
  if (characterCount >= 140) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});
$('.textarea1').keyup(function() {
  var characterCount = $(this).val().length,
      current = $('#current1'),
      maximum = $('#current1'),
      theCount = $('#the-count1');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 70) {
    current.css('color', '#666');
  }
  if (characterCount > 70 && characterCount < 90) {
    current.css('color', '#6d5555');
  }
  if (characterCount > 90 && characterCount < 100) {
    current.css('color', '#793535');
  }
  if (characterCount > 100 && characterCount < 120) {
    current.css('color', '#841c1c');
  }
  if (characterCount > 120 && characterCount < 139) {
    current.css('color', '#8f0001');
  }
  
  if (characterCount >= 140) {
    maximum.css('color', '#8f0001');
    current.css('color', '#8f0001');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#666');
    theCount.css('font-weight','normal');
  }
  
      
});
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<%$base_url%>public/js/citizen/add_garbage_pickup_request.js"></script>
