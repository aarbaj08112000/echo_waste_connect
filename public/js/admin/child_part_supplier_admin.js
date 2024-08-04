$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "child_part_supplier_admin";
var pdf_title = "child_part_supplier_admin";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#child_part_supplier_admin').DataTable();
    },

};
