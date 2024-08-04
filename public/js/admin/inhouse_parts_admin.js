$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "inhouse_parts_admin";
var pdf_title = "inhouse_parts_admin";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#inhouse_parts_admin').DataTable();
    },

};
