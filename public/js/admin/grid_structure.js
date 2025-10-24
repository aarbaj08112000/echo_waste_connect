$(document).ready(function(){
	 grid.init();
})

const grid = {
	init: function(){

	},
	setDefaultView: function(module_name){
		 var default_page_dispay = default_page_view_type[module_name];
		 if(default_page_dispay == "Grid"){
		 	$(".toggle-grid-btn .table").removeClass("active");
		 	$(".toggle-grid-btn .grid").addClass("active");
		 }else{
		 	$(".toggle-grid-btn .grid").removeClass("active");
		 	$(".toggle-grid-btn .table").addClass("active");
		 }
	},
	getStatusClass : function(status){
		switch (status) {
			case "Active":
			case "Approved":
				return "active";
				break;
			case "Reject":
			case "Inactive":
				return "inactive";
				break;
			case "Block":
				return "block";
				break;
			default:
				break;
		}
	},
	gridStructure: function(module_name = "",row_data = [],no_data_message){
		let that = this;
		grid_html = "";
		switch (module_name) {
		    case "User":
		    	grid_html = `<div class="container grid-block-container"><div class="row w-100">`;
		    	if(row_data.length > 0){
			        for (var i = 0; i < row_data.length; i++) {
			        	var row_details = row_data[i]._aData;
			        	var status = that.getStatusClass(row_details[7]);
						var button = updateEnable ? `<a class="la-calendar  btn view-btn" href="javascript:void(0)" type="button" data-id="2" title="Edit" data-bs-toggle="modal" data-bs-target="#updatePromo${row_details[0]}">Edit</a>` : "";
						var image_block = row_details[0] == "" || true ?
												`<div class="grid_view_warehouse_title_icon no-img">
										                           <div class="status-radius ${status}"></div>
										                           <span class="cust-text" >${row_details[1][0]}</span>
										                        </div>`
											 :
											`<div class="grid_view_warehouse_title_icon">
										                           <div class="status-radius ${status}"></div>
										                           <img src="public/img/user.jpeg" width="62" height="62" class="list-image ma_profile_image">
										                        </div>` ;
			        	let row_html = `<div class="col-3">
									        <div class="card mb-4">
									            <div class="grid_view_warehouse">
									               <div class="grid_view_warehouse_box h-auto">
									               		<div class="grid_view_warehouse_title mb-0">
										                    <div class="grid_view_warehouse_title_lt">
										                        ${image_block}
										                        <div class="grid_view_warehouse_title_cnt p-3 ">
											                           <h5 class="trim-characters"><a title="${row_details[1]}" '="" href="javascript:void(0)">${row_details[1]}</a></h5>
											                           <h6 class="trim-characters">${row_details[2]}</h6>
											                    </div>
										                    </div>
										                </div>
										            	<div class="grid-types">
										                     <div class="request_type"><strong>Group Name</strong>${row_details[4]}</div>
										                     <div class="other-actions-list-btn mt-0 mr-2">
										                        ${button}
										                        <div class="dropdown hide">
										                           <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
										                           <ul class="dropdown-menu mt-2 dropdown-menu-end">
										                              <li><a class="dropdown-item la-times-circle " data-id="2" href="javascript:void(0)" title="Deactivate">Deactivate</a></li>
										                              <li><a class="dropdown-item  delet-employee" data-id="2" href="javascript:void(0)" title="Delete">Delete</a></li>
										                              <li><a class="dropdown-item extend" href="http://localhost/extra_work/HRMS/employee-salary-structure.html?id=2" title="Salary Structure">Salary Structure</a></li>
										                              <li><a class="dropdown-item pdf-download" data-id="2" href="javascript:void(0)" title="Download salary slip">Download salary slip</a></li>
										                           </ul>
										                        </div>
										                     </div>
										                </div>
										                <div class="usage_type_box">
										                     <div class="label_text"><span>Added Date</span><label class="trim-characters" title="${row_details[5]}">${row_details[5]}</label></div>
															 <div class="label_text"><span>Added By</span><label class="trim-characters" title="${row_details[6]}">${row_details[6]}</label></div>
										                </div>
										            </div>
									          	</div>
									        </div>
									    </div>`;
			        	grid_html += row_html;
			        }
		        }else{
		        	grid_html += that.noDataFound(no_data_message);
		        }
		        grid_html += `</div></div>`;
		        break;
			case "Citizen":
		    	grid_html = `<div class="container grid-block-container"><div class="row w-100">`;
				
		    	if(row_data.length > 0){
			        for (var i = 0; i < row_data.length; i++) {
			        	var row_details = row_data[i]._aData;
			        	var status = that.getStatusClass(row_details[5]);
			        	let row_html = `<div class="col-3">
									        <div class="card mb-4">
									            <div class="grid_view_warehouse">
									               <div class="grid_view_warehouse_box h-auto">
									               		<div class="grid_view_warehouse_title mb-0">
										                    <div class="grid_view_warehouse_title_lt">
										                        <div class="grid_view_warehouse_title_icon">
										                           <div class="status-radius ${status}"></div>
										                           ${row_details[1]}
										                        </div>
										                        <div class="grid_view_warehouse_title_cnt p-3">
											                           <h5 class="trim-characters"><a title="${row_details[2]}" '="" href="javascript:void(0)">${row_details[2]}</a></h5>
											                           <h6 class="trim-characters">${row_details[3]}</h6>
											                    </div>
										                    </div>
										                </div>
										            	<div class="grid-types">
										                     <div class="request_type"><strong>Added Date</strong>${row_details[6]}</div>
										                     <div class="other-actions-list-btn mt-0 mr-2 ">
										                        <a class="la-calendar  btn view-btn" href="javascript:void(0)" type="button" data-id="2" title="Edit" data-bs-toggle="modal" data-bs-target="#acceptReject${row_details[0]}">Change Status</a>
										                     </div>
										                </div>
										                <div class="usage_type_box">
										                     <div class="label_text"><span>Updated Date</span><label class="trim-characters" title="${row_details[7]}">${row_details[7]}</label></div>
										                     <div class="label_text"><span>Updated By</span><label class="trim-characters" title="${row_details[8]}">${row_details[8]}</label></div>
										                </div>
										            </div>
									          	</div>
									        </div>
									    </div>`;
			        	grid_html += row_html;
			        }
		        }else{
		        	grid_html += that.noDataFound(no_data_message);
		        }
		        grid_html += `</div></div>`;
		        break;

		    default:
		        break;
		}

		return grid_html;
	},
	noDataFound: function(no_data_message){
			no_data_html = `<div class="col-12 text-center grid-no-message mt-5 pt-5">${no_data_message}</div>`;
		return no_data_html;
	}
}