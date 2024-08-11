$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "operations_data";
var pdf_title = "operations_data";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#operations_data').DataTable();
    },

};
