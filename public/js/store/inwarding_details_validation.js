$( document ).ready(function() {
  page.init();
});
var table = '';
var file_name = "inwarding_details_validation";
var pdf_title = "inwarding_invoice";
const page = {
  init: function(){
    this.initiateForm();
    this.dataTable();
  },
  dataTable: function() {
      table = $('#inwarding_details_tbl').DataTable();

  },
  initiateForm: function(){
    let that = this;

    $(".inwarding_details_validation").submit(function(e){
      e.preventDefault();
      let flag = that.formValidate("inwarding_details_validation");
      if(flag){
        return;
      }
      var formData = new FormData($('.inwarding_details_validation')[0]);

      $.ajax({
        type: "POST",
        url: base_url+"add_rejection_flow",
        // url: "add_rejection_flow",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          var responseObject = JSON.parse(response);
          var msg = responseObject.messages;
          var success = responseObject.success;
          if (success == 1) {
            toastr.success(msg);
            $(this).parents(".modal").modal("hide")
            setTimeout(function(){
              window.location.reload();
            },1000);

          } else {
            toastr.error(msg);
          }
        },
        error: function (error) {
          console.error("Error:", error);
        },
      });
    });

  },
  formValidate: function(form_class = ''){
    let flag = false;
    $(".custom-form."+form_class+" input.required-input").each(function( index ) {
      var value = $(this).val();
      if(value == ''){
        flag = true;
        var label = $(this).parents(".form-group").find("label").contents().filter(function() {
          return this.nodeType === 3; // Filter out non-text nodes (nodeType 3 is Text node)
        }).text().trim();
        var exit_ele = $(this).parents(".form-group").find("label.error");
        if(exit_ele.length == 0){
          var start ="Please enter ";
          if($(this).prop("localName") == "select"){
            var start ="Please select ";
          }
          label = ((label.toLowerCase()).replace("enter", "")).replace("select", "");
          var validation_message = start+(label.toLowerCase()).replace(/[^\w\s*]/gi, '');
          var label_html = "<label class='error'>"+validation_message+"</label>";
          $(this).parents(".form-group").append(label_html)
        }

      }
    });
    return flag;
  }
}
