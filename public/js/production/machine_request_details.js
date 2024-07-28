$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "machine_request_details";
var pdf_title = "machine_request_details";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#machine_request_details').DataTable();
    }
};
