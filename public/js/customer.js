var file_name = "Customer";
var pdf_title = "Customers";
var table = '';
var myModal = new bootstrap.Modal(document.getElementById('edit_modal'))
const datatable = {
    init:function(){
        let that = this;
        $('#customer_name').select2();
        that.dataTable();
        $(document).on('click','.search-filter',function(e){
            let customer_name = $("#customer_name").val();
            table.column(1).search(customer_name).draw();
        })
        $(document).on('click','.reset-filter',function(e){
           that.resetFilter();
        })
        $(document).on("click",".edit-part",function(){
            var data = $(this).attr("data-value");
          
            data = JSON.parse(atob(data)); 
            console.log(data)
           
            $("#ucustomer_id").val(data['id']);
            $("#ucustomer_name").val(data.customer_name);
            $("#ucustomer_code").val(data.customer_code);
            $("#ucustomer_address").val(data.billing_address);
            $("#ucustomer_shifting_address").val(data.shifting_address);
            $("#ucustomer_state").val(data.state);
            $("#ucustomer_state_no").val(data.state_no);
            $("#upayment_terms").val(data.payment_terms);
            $("#uvendor_code").val(data.vendor_code);
            $("#upan_no").val(data.pan_no);
            $("#ubank_details").val(data.bank_details);
            $("#upos").val(data.pos);
            $("#uaddress1").val(data.address1);
            $("#ulocation").val(data.location);
            $("#upin").val(data.pin);
            $('#customer_id').val(data.id)
            myModal.show();
        })
    },
    dataTable:function(){
      table =  new DataTable('#example1',{
        dom: 'Bfrtip',
        scrollX: true, 
        buttons: [
                {     
                    extend: 'csv',
                        text: '<i class="ti ti-file-type-csv"></i>',
                        init: function(api, node, config) {
                        $(node).attr('title', 'Download CSV');
                        },
                        customize: function (csv) {
                            var lines = csv.split('\n');
                            var modifiedLines = lines.map(function(line) {
                                var values = line.split(',');
                                values.splice(13, 1);
                                return values.join(',');
                            });
                            return modifiedLines.join('\n');
                        },
                        filename : file_name
                    },
                
                    {
                    extend: 'pdf',
                    text: '<i class="ti ti-file-type-pdf"></i>',
                    init: function(api, node, config) {
                        $(node).attr('title', 'Download Pdf');
                        
                    },
                    filename: file_name,
                    
                    customize: function (doc) {
                        doc.pageMargins = [15, 15, 15, 15];
                        doc.content[0].text = pdf_title;
                        doc.content[0].color = theme_color;
                        // doc.content[1].table.widths = ['15%', '19%', '13%', '13%','15%', '15%', '10%'];
                        doc.content[1].table.body[0].forEach(function(cell) {
                            cell.fillColor = theme_color;
                        });
                        doc.content[1].table.body.forEach(function(row, rowIndex) {
                            row.forEach(function(cell, cellIndex) {
                                var alignmentClass = $('#example1 tbody tr:eq(' + rowIndex + ') td:eq(' + cellIndex + ')').attr('class');
                                var alignment = '';
                                if (alignmentClass && alignmentClass.includes('dt-left')) {
                                    alignment = 'left';
                                } else if (alignmentClass && alignmentClass.includes('dt-center')) {
                                    alignment = 'center';
                                } else if (alignmentClass && alignmentClass.includes('dt-right')) {
                                    alignment = 'right';
                                } else {
                                    alignment = 'left';
                                }
                                cell.alignment = alignment;
                            });
                            row.splice(14, 1);
                        });
                    }
                },
            ],
    });
    },
    resetFilter:function(){
        table.column(1).search('').draw();
    }

}

const validationFunc = () => {
    $('#addCustomerForm').validate({
        rules: {
           customerName: {
              required: true
           },
           customerCode: {
              required: true
           },
           customerLocation: {
              required: true
           },
           customerSaddress: {
              required: true
           },
           state: {
              required: true
           },
           state_no: {
              required: true
           },
           gst_no: {
              required: true
           },
           vendor_code: {
              required: true
           },
           pan_no: {
              required: true
           },
           paymentTerms: {
              required: true,
              number: true,
              min: 0
           },
           pos: {
              required: true
           },
           address1: {
              required: true
           },
           location: {
              required: true
           },
           pin: {
              required: true
           }
        },
        messages: {
           customerName: {
              required: "Please enter the customer name"
           },
           customerCode: {
              required: "Please enter the customer code"
           },
           customerLocation: {
              required: "Please enter the customer billing address"
           },
           customerSaddress: {
              required: "Please enter the customer shipping address"
           },
           state: {
              required: "Please enter the state"
           },
           state_no: {
              required: "Please enter the state number"
           },
           gst_no: {
              required: "Please enter the GST number"
           },
           vendor_code: {
              required: "Please enter the vendor code"
           },
           pan_no: {
              required: "Please enter the PAN number"
           },
           paymentTerms: {
              required: "Please enter the payment terms",
              number: "Please enter a valid number",
              min: "Value must be greater than or equal to 0"
           },
           pos: {
              required: "Please enter the pos"
           },
           address1: {
              required: "Please enter the address"
           },
           location: {
              required: "Please enter the location"
           },
           pin: {
              required: "Please enter the pin"
           }
        },
        submitHandler: function(form) {
           $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function(response) {
                 // handle success response
                 toastr.success('Customer Added succesfully.');
                 setTimeout(() => {
                    window.location.reload();
                 }, 1000);
              },
              error: function(xhr, status, error) {
                 // handle error response
                 toastr.error('An error occurred. Please try again!');
              }
           });
        }
     });

     $('#updateCustomerForm').validate({
        rules: {
           ucustomerName: {
              required: true
           },
           ucustomerCode: {
              required: true
           },
           ubillingaddress: {
              required: true
           },
           ushiftingAddress: {
              required: true
           },
           ustate: {
              required: true
           },
           state_no: {
              required: true
           },
           ugst_no: {
              required: true
           },
           upaymentTerms: {
              required: true
           },
           vendor_code: {
              required: true
           },
           pan_no: {
              required: true
           },
           bank_details: {
              required: true
           },
           pos: {
              required: true
           },
           address1: {
              required: true
           },
           location: {
              required: true
           },
           pin: {
              required: true
           }
        },
        messages: {
           ucustomerName: {
              required: "Please enter the customer name"
           },
           ucustomerCode: {
              required: "Please enter the customer code"
           },
           ubillingaddress: {
              required: "Please enter the customer billing address"
           },
           ushiftingAddress: {
              required: "Please enter the customer shipping address"
           },
           ustate: {
              required: "Please enter the state"
           },
           state_no: {
              required: "Please enter the state number"
           },
           ugst_no: {
              required: "Please enter the GST number"
           },
           upaymentTerms: {
              required: "Please enter the payment terms"
           },
           vendor_code: {
              required: "Please enter the vendor code"
           },
           pan_no: {
              required: "Please enter the PAN number"
           },
           bank_details: {
              required: "Please enter the bank details"
           },
           pos: {
              required: "Please enter the pos"
           },
           address1: {
              required: "Please enter the address"
           },
           location: {
              required: "Please enter the location"
           },
           pin: {
              required: "Please enter the pin"
           }
        },
        submitHandler: function(form) {
           $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function(response) {
                 // handle success response
                 toastr.success('Customer Updated succesfully.');
                 setTimeout(() => {
                    window.location.reload();
                 }, 1000);
              },
              error: function(xhr, status, error) {
                 // handle error response
                 toastr.error('An error occurred. Please try again!');
              }
           });
        }
     });
}

$(document).ready(function () {
    datatable.init();    
    validationFunc();
})