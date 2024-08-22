$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "view_rejection_sales_invoice_by_id";
var pdf_title = "view_rejection_sales_invoice_by_id";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
    	$('.edit_part').on('submit', function(event) {
		       event.preventDefault(); // Prevent the form from submitting via the browser
		       var form = $(this);
		       var formData = form.serialize();
		   
		       $.ajax({
		           type: 'POST',
		           url: form.attr('action'),
		           data: formData,
		           success: function(response) {
		               // Handle success
		               let res = JSON.parse(response);
	                   if (res.success == 1) {
	                       toastr.success(res.messages)
	                       setTimeout(() => {
			                   window.location.reload();
			               }, 1000);
	                   } else {
	                       toastr.error(res.messages);
	                       
	                   }
		               
		           },
		           error: function(xhr, status, error) {
		               // Handle error
		               toastr.success('unable to delete part.')
		           }
		       });
	    });
	    $('.delete_part').on('submit', function(event) {
		       event.preventDefault(); // Prevent the form from submitting via the browser
		       var form = $(this);
		       var formData = form.serialize();
		   
		       $.ajax({
		           type: 'POST',
		           url: form.attr('action'),
		           data: formData,
		           success: function(response) {
		               // Handle success
		               let res = JSON.parse(response);
	                   if (res.success == 1) {
	                       toastr.success(res.message)
	                       setTimeout(() => {
			                   window.location.reload();
			               }, 1000);
	                   } else {
	                       toastr.error(res.message);
	                       
	                   }
		               
		           },
		           error: function(xhr, status, error) {
		               // Handle error
		               toastr.success('unable to delete part.')
		           }
		       });
	    });
	    $('.update_accept_parts_rejection_sales_invoice').on('submit', function(event) {
		       event.preventDefault(); // Prevent the form from submitting via the browser
		       var form = $(this);
		       var formData = form.serialize();
		   
		       $.ajax({
		           type: 'POST',
		           url: form.attr('action'),
		           data: formData,
		           success: function(response) {
		               // Handle success
		               let res = JSON.parse(response);
	                   if (res.success == 1) {
	                       toastr.success(res.messages)
	                       setTimeout(() => {
			                   window.location.reload();
			               }, 1000);
	                   } else {
	                       toastr.error(res.messages);
	                       
	                   }
		               
		           },
		           error: function(xhr, status, error) {
		               // Handle error
		               toastr.success('unable to delete part.')
		           }
		       });
	    });
	    $('.update_rejection_sales_invoice').on('submit', function(event) {
		       event.preventDefault(); // Prevent the form from submitting via the browser
		       var form = $(this);
		       var formData = form.serialize();
		   
		       $.ajax({
		           type: 'POST',
		           url: form.attr('action'),
		           data: formData,
		           success: function(response) {
		               // Handle success
		               let res = JSON.parse(response);
	                   if (res.success == 1) {
	                       toastr.success(res.messages)
	                       setTimeout(() => {
			                   window.location.reload();
			               }, 1000);
	                   } else {
	                       toastr.error(res.messages);
	                       
	                   }
		               
		           },
		           error: function(xhr, status, error) {
		               // Handle error
		               toastr.success('unable to delete part.')
		           }
		       });
	    });
	    $('.add_parts_rejection_sales_invoice').on('submit', function(event) {
		       event.preventDefault(); // Prevent the form from submitting via the browser
		       var form = $(this);
		       var formData = form.serialize();
		   
		       $.ajax({
		           type: 'POST',
		           url: form.attr('action'),
		           data: formData,
		           success: function(response) {
		               // Handle success
		               let res = JSON.parse(response);
	                   if (res.success == 1) {
	                       toastr.success(res.messages)
	                       setTimeout(() => {
			                   window.location.reload();
			               }, 1000);
	                   } else {
	                       toastr.error(res.messages);
	                       
	                   }
		               
		           },
		           error: function(xhr, status, error) {
		               // Handle error
		               toastr.success('unable to delete part.')
		           }
		       });
	    });
	}
}
