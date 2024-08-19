var file_name = "Consignee";
var pdf_title = "Consignee";
var table = '';
var myModal = new bootstrap.Modal(document.getElementById('edit_modal'))
const datatable = {
    init:function(){
        let that = this;
        $('#consignee_name').select2();
        that.dataTable();
        $(document).on('click','.search-filter',function(e){
            let consignee_name = $("#consignee_name").val();
            table.column(1).search(consignee_name).draw();
        })
        $(document).on('click','.reset-filter',function(e){
           that.resetFilter();
        })
        $(document).on("click",".edit-part",function(){
            var data = $(this).attr("data-value");
          
            data = JSON.parse(atob(data)); 
            console.log(data)
           
            $("#uconsignee_name").val(data['consignee_name']);
            $("#uconsignee_ref").val(data.c_id);
            $("#uaddressRef").val(data.address_id);
            $("#ustate_num").val(data.state_no);
            $("#ustate").val(data.state);
            $("#ugst_no").val(data.gst_number);
            $("#uphone").val(data.phone_no);
            $("#upan").val(data.pan_no);
            $("#uaddress").val(data.address);
            $("#ulocation").val(data.location);
            $("#uPIN").val(data.pin_code);
            myModal.show();
        })
    },
    dataTable:function(){
      table =  new DataTable('#example1',{
        dom: 'Bfrtip',
        scrollX: false, 
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
                                values.splice(9, 1);
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
                            row.splice(9, 1);
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
    $("#update_form").validate({
        rules: {
            uconsignee_name: "required",
            ulocation: "required",
            uaddress: "required",
            ustate: "required",
            ustate_no: "required",
            upin_code: "required",
            ugst_number: "required",
            upan_no: "required",
            uphone_no: "required"
        },
        messages: {
            uconsignee_name: "Please enter the consignee name",
            ulocation: "Please enter the location",
            uaddress: "Please enter the address",
            ustate: "Please enter the state",
            ustate_no: "Please enter the state number",
            upin_code: "Please enter the PIN code",
            ugst_number: "Please enter the GST number",
            upan_no: "Please enter the PAN number",
            uphone_no: "Please enter the phone number"
        },
        submitHandler: function(form) {
            // Custom submit handler
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    // Handle the success response here
                    if(response != '' && response != null && typeof response != 'undefined'){
                        let res = JSON.parse(response);
                        if(res['sucess'] == 1){
                            toastr.success(res['msg'])
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                       
                    }
                    

                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    toastr.error('Unable to Update consignee..')
                }
            });
        }
    });

    $("#add_consnee").validate({
        rules: {
            cconsignee_name: "required",
            clocation: "required",
            caddress: "required",
            cstate: "required",
            cstate_no: "required",
            cpin_code: "required",
            gst_number: "required",
            cpan_no: "required",
            cphone_no: "required"
        },
        messages: {
            cconsignee_name: "Please enter the consignee name",
            clocation: "Please enter the location",
            caddress: "Please enter the address",
            cstate: "Please enter the state",
            cstate_no: "Please enter the state number",
            cpin_code: "Please enter the PIN code",
            gst_number: "Please enter the GST number",
            cpan_no: "Please enter the PAN number",
            cphone_no: "Please enter the phone number"
        },
        submitHandler: function(form) {
            // Custom submit handler
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    // Handle the success response here
                    if(response != '' && response != null && typeof response != 'undefined'){
                        let res = JSON.parse(response);
                        if(res['sucess'] == 1){
                            toastr.success(res['msg'])
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                       
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error('Form submission failed:', error);
                }
            });
        }
    });
}

$(document).ready(function () {
    datatable.init();    
    validationFunc();
})