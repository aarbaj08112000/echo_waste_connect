
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
          <span >Details</span>
        </div>
    </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <%* <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> *%>
        <a href="garbage_pickup_request" class="btn btn-seconday" title="Add Garbage Pickup Request">
       <i class="ti ti-arrow-left"></i>
        </a>
       

      </div>
      
      <!-- Main content -->
      <section class="content">
         <div class="">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="tabTitle borde-bottom-box">
                           <h2 id="cc_sh_sys_static_field_3">
                              <span>Summary</span>
                           </h2> 
                           <div class="input-wrapper ">
                            <a href="https://www.google.com/maps/place/<%$location%>" target="blanck" title="Google Map"><i class="ti ti-map-2"></i></a> 
                           </div>                       
                        </div>
                     <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                               <div class="tgdp-rgt-tp-sect garbage_img_box">
                                <img src="<%$image%>" width="62" height="62" class="mt-0 garbage_img" >
                             </div>
                            </div>
                            <div class="col-11">
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Request Code</p>
                                 <p class="tgdp-rgt-tp-txt">
                                    <%$request_code%>
                                 </p>
                             </div>
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Type of Waste</p>
                                 <p class="tgdp-rgt-tp-txt">
                                     <%display_no_character($type_of_waste)%>
                                 </p>
                             </div>
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Quantity / Volume</p>
                                 <p class="tgdp-rgt-tp-txt">
                                    <%display_no_character($qty_vol)%>
                                 </p>
                             </div>
                             
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Pickup Date</p>
                                 <p class="tgdp-rgt-tp-txt">
                                    <%$pickup_date%>
                                 </p>
                             </div>
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Time Slot</p>
                                 <p class="tgdp-rgt-tp-txt">
                                    <%display_no_character($time_slot)%>
                                 </p>
                             </div>
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Pickup Location</p>
                                 <p class="tgdp-rgt-tp-txt">
                                 <%display_no_character($location)%>
                                 </p>
                             </div>
                             <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Waste Description</p>
                                 <p class="tgdp-rgt-tp-txt">
                                  <%display_no_character($waste_description)%>
                                 </p>
                             </div>
                                                          
                              <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Special Instructions</p>
                                 <p class="tgdp-rgt-tp-txt">
                                  <%display_no_character($special_instruction)%>
                                 </p>
                             </div>
                             
                              <div>
                           </div>
                           

                                             </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
               </div>
               <div class="col-12 mt-3">
                  <div class="card">
                     <div class="tabTitle borde-bottom-box">
                           <h2 id="cc_sh_sys_static_field_3">
                              <span>Status Log</span>
                           </h2> 
                                                  
                        </div>
                     <div class="card-header">
                        <ul id="progressbar">
                          <li class="<%if $status eq 'Pending'%>active_poup<%/if%> <%if $status eq 'UnderReview' || $status eq 'Assigned' ||  $status eq 'InProgress' || $status eq 'Completed'%>active<%/if%>">
                            <label class="added-user">
                                <%$status_log_data['UnderReview']['user_name']%>                       
                            </label>
                            <div class="circle-pending"> 
                                <img src="public/assets/images/recycling.png" width="40" height="40" style="    margin-top: -6px;"/>
                            </div>
                            <span class="ms-4">
                              &nbsp;Pending
                            </span>
                            <label class="added-date">
                                <%$status_log_data['UnderReview']['added_date']%>                       
                            </label>
                          
                          </li>
                          <li class="<%if $status eq 'UnderReview'%>active_poup<%/if%> <%if $status eq 'Assigned' ||  $status eq 'InProgress' || $status eq 'Completed'%>active<%/if%>">
                            <label class="added-user">
                                <%$status_log_data['Assigned']['user_name']%>                       
                            </label>
                            <div class="circle-review"> 
                                <img src="public/assets/images/pendingTask.png" width="40" height="40" style="    margin-top: -6px;"/>
                            </div>
                            <span class="ms-3">Under Review</span>
                            <label class="added-date">
                                <%$status_log_data['Assigned']['added_date']%>                       
                            </label>
                          </li>
                          <li class="<%if $status eq 'Assigned'%>active_poup<%/if%> <%if $status eq 'InProgress' || $status eq 'Completed'%>active<%/if%>">
                            <label class="added-user">
                                <%$status_log_data['InProgress']['user_name']%>                       
                            </label>
                            <div class="circle-assigned"> 
                                <img src="public/assets/images/acceptRequest.png" width="40" height="40" style="    margin-top: -6px;"/>
                            </div>
                            <span class="ms-4">Assigned</span>
                            <label class="added-date">
                                <%$status_log_data['InProgress']['added_date']%>                       
                            </label>
                          </li>
                          
                          <li class="<%if $status eq 'InProgress'%>active_poup<%/if%> <%if $status eq 'Completed'%>active<%/if%>">
                            <label class="added-user">
                                <%$status_log_data['Completed']['user_name']%>                       
                            </label> 
                            <div class="circle-progress"> 
                                <img src="public/assets/images/recycling-truck.png" width="50" height="50" style="    margin-top: -6px;"/>
                            </div>
                            <span class="ms-4">In Progress</span>
                            <label class="added-date">
                                <%$status_log_data['Completed']['added_date']%>                       
                            </label>
                          </li>
                          <li class="<%if $status eq 'Completed'%>active_poup<%/if%>">
                          <div class="circle-completed"> 
                               <img src="public/assets/images/check.png" width="40" height="40" style="    margin-top: -6px;"/>
                            </div>
                            <span class="ms-4">Completed</span>
                          </li>
                          
                        </ul>

                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </section>
      <!-- /.col -->


      <div class="content-backdrop fade"></div>
    </div>

  <style>
  
.added-user {
      font-style: normal !important;
    display: block;
    margin-top: 3px;
    font-size: 15px;
    
    font-family: 'GilroySemibold', sans-serif !important;
  position: absolute;
  left: 50%;
  color: var(--bs-opposite-color) !important;
}
.added-date {
  font-style: normal !important;
    display: block;
    margin-top: 3px;
    font-size: 15px;
    color: #604f4f !important;
    font-family: 'GilroySemibold', sans-serif !important;
      position: absolute;
    left: 44%;
    top: 46px;
}
/* Progress bar container */
#progressbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  list-style: none;
  width: 100%;
  max-width: 99%;
  position: relative;
  counter-reset: step; /* initialize counter */
  margin-left: 60px;
  margin-top: 15px;
}

/* Each step */
#progressbar li {
  text-align: left;
  position: relative;
  flex: 1;
  color: #999;
  font-size: 14px;
}

/* Step circle number */
#progressbar li div {
  position: relative;
  width: 70px;
  height: 70px;
  line-height: 70px;
  border-radius: 50%;
  background: #e6eefd; /* inactive step color */
  color: #206dff;
  text-align: center;
  margin: 0 auto 10px 20px;
      border: 1px solid #e6e6ec;
          z-index: 1;
}

/* Only active step has ripple */
#progressbar li span{
  font-size: 16px !important;
    color: #000 !important;
    max-width: 95%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
        font-weight: 500;
}
#progressbar li.active div {
  background: #e6eefd;
  color: #fff;
  
}
/* Pending - waiting action */
.circle-pending {
    background: #fbf6e5 !important;  /* light yellow */
    color: #ddb50a;  
   
}

/* Under Review - being checked */
.circle-review {
    background: #e8f0ff !important;  /* light blue */
    color: #206dff;                   /* blue */
}

/* Assigned - task allocated */
.circle-assigned {
    background: #e6f6ed !important;  /* light green */
    color: #2e7d32;                   /* green */
}

/* In Progress - actively being worked on */
.circle-progress {
    background: #f0f4ff !important;  /* soft periwinkle */
    color: #4f46e5;                   /* indigo / vibrant purple */
}

/* Completed - finished task */
.circle-completed {
    background: #e6f9f0 !important;  /* minty green */
    color: #059669;                   /* emerald / dark green */
}

/* Optional Rejected / Cancelled */
.circle-rejected {
    background: #ffe6e6 !important;  /* light red */
    color: #dc2626;                   /* red */
}


#progressbar li.active_poup div {
  background: #206dff;
  color: #fff;
  animation: popCircle 1.8s ease-in-out infinite;
}

@keyframes popCircle {
  0% {
    transform: scale(1);
  }
  30% {
    transform: scale(1.3);  /* pop larger */
  }
  50% {
    transform: scale(1.1);  /* settle smaller */
  }
  70% {
    transform: scale(1.2);  /* small bounce */
  }
  100% {
    transform: scale(1);    /* back to normal */
  }
}



#progressbar li div .ti{
      text-shadow: 0px 3px 20px #0000001A;
    font-size: 40px;
    line-height: 70px;
}

/* Connecting line */
#progressbar li::after {
  content: "";
    position: absolute;
    width: 80%;
    height: 4px;
    background-color: #ccc;
    top: 34px;
    left: -74.2%;
    z-index: 0;
}

/* Remove line before first step */
#progressbar li:first-child::after {
  content: none;
}

/* Active step */
#progressbar li.active {
  color: #4caf50;
}

#progressbar li.active::before {
  border-color: #4caf50;
  background-color: #4caf50;
  color: white;
}

#progressbar li.active + li::after {
  content: "";
  position: absolute;
  width: 80%;
  height: 4px;
  top: 34px;
  left: -74.2%;
  border-radius: 2px;
  background: linear-gradient(
    90deg,
    #4caf50,
    #81c784,
    #a5d6a7,
    #81c784,
    #4caf50
  );
  background-size: 200% 100%;
  animation: sineWave 4s ease-in-out infinite;
}

@keyframes sineWave {
  0%, 100% {
    background-position: 0% 0;
  }
  50% {
    background-position: 100% 0;
  }
}


  .garbage_img_box{
    position: relative;
        width: 116px;
  }
  .garbage_img_box::after{
        content: "";
    background: rgba(0, 0, 0, 0.25);
    height: 5px;
    width: 62px;
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    border-radius: 50%;
    filter: blue(3px);
    bottom: -12px;
    -webkit-filter: blur(3px);
  }
  .garbage_img{
      width: 116px !important;
      height: 116px !important;
      border-radius: 50%;
      box-shadow: 0 3px 3px rgba(0, 0, 0, 0.18);
  }
  .borde-bottom-box{
    border-bottom: 1px dashed #cfd1d4 !important;
    display: flex !important;
    justify-content: space-between;
  }
  .input-wrapper{
    width: 70px;
    padding: 3px;
    font-size: 37px;
}
  </style>
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
