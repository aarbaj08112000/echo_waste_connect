$( document ).ready(function() {
    page.init();
});
var table = '';
var file_name = "item_par_list";
var pdf_title = "Item part List";
const page = {
    init: function(){
        this.formValidation();
        this.initiatePlugin();

    },
    formValidation: function(){
        let that = this;
        $("#addsupplier").validate({
            rules: {
                supplierName: {
                    required: true
                },
                supplierEmail: {
                    required: true,
                    email:true
                },
                supplierNumber: {
                    required: true
                },
                with_in_state: {
                    required: true
                },
                supplierlocation: {
                    required: true
                },
                state: {
                    required: true
                },
                supplierMnumber: {
                    required: true,
                    minlength:10,
                    maxlength:10
                },
                gst_no: {
                    required: true,
                },
                pan_card: {
                    required: true
                },
                paymentTerms: {
                    required: true
                },
                // nda_document: {
                //     required: true
                // },
                
            },
            messages: {
                supplierName: "Please enter Supplier Name",
                supplierEmail:  {
	                required:  "Please enter Supplier Email",
	                email: "Please enter valid email.",
	            },
                supplierNumber: "Please enter Supplier Number",
                with_in_state: "Please enter With In State",
                supplierlocation: "Please enter Supplier Location",
                state: "Please enter State",
                supplierMnumber: {
                    required: "Please enter Supplier Mobile Number",
                    minlength: "Please enter valid Supplier Mobile Number",
                    maxlength:"Please enter valid Supplier Mobile Number"
                },
                gst_no: {
                    required: "Please enter GST Number",
                },
                pan_card: "Please enter Supplier Pan",
                paymentTerms: "Please enter Payment Terms",
                // nda_document: "Please upload Upload NDA Document"
            },
            errorPlacement: function(error, element)
            {
              if(element.prop('tagName') == 'SELECT'){
                    $(element).parents(".form-group").find(".select2-container").after(error)
                }else{
                    error.insertAfter(element); 
                }
            },
            submitHandler: function(form) {
              var formdata = new FormData(form);
              $.ajax({
                url: base_url+"addSupplier",
                data:formdata,
                processData:false,
                contentType:false,
                cache:false,
                type:"post",
                success: function(result){
                  var data = JSON.parse(result);
                  if (data.success == 1) {
                     toastr.success(data.message);
                      setTimeout(function () {
                        window.location.href = base_url+"approved_supplier";
                    }, 2000);
                  }else{
                    toastr.error(data.message);
                  }

                }
              });
            }
        }); 
    },
    initiatePlugin: function(){
    	$(".select2").select2();
    }
}

