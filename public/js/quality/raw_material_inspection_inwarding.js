$(document).ready(function() {
  page.init();
});

var table = '';
var file_name = "raw_material_inspection_inwarding";
var pdf_title = "raw_material_inspection_inwarding";

const page = {
  init: function() {
    this.dataTable();
    this.initiateForm();
  },
  dataTable: function() {
    table = $('#raw_material_inspection_inwarding').DataTable();
  },
  initiateForm: function(){
    let that = this;

    $(".update_raw_material_inspection_master_new").submit(function(e){
      e.preventDefault();
      let flag = that.formValidate("update_raw_material_inspection_master_new");
      if(flag){
        return;
      }
      var formData = new FormData($('.update_raw_material_inspection_master_new')[0]);

      $.ajax({
        type: "POST",
        url: base_url+"update_raw_material_inspection_master_new",
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
    $(".add_raw_material_inspection_report").submit(function(e){
      e.preventDefault();
      let flag = that.formValidate("add_raw_material_inspection_report");
      if(flag){
        return;
      }
      var formData = new FormData($('.add_raw_material_inspection_report')[0]);

      $.ajax({
        type: "POST",
        url: base_url+"add_raw_material_inspection_report",
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
};
