$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "machine_request";
var pdf_title = "machine_request";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#machine_request').DataTable();
    }
};
