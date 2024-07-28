$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "machine_request_completed";
var pdf_title = "machine_request_completed";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#machine_request_completed').DataTable();
    }
};
