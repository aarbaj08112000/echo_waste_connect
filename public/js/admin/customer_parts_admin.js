$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "customer_parts_admin";
var pdf_title = "customer_parts_admin";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#customer_parts_admin').DataTable();
    },

};
