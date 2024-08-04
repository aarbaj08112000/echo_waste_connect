$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "operations";
var pdf_title = "operations";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#operations').DataTable();
    },

};
