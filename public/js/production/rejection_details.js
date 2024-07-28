$(document).ready(function() {
  alert("ok");
    page.init();
});

var table = '';
var file_name = "rejection_details";
var pdf_title = "rejection_details";

const page = {
    init: function() {

        this.dataTable();
    },
    dataTable: function() {
        table = $('#rejection_details').DataTable();
    }
};
