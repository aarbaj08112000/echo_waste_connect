$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "view_rejection_sales_invoice_by_id";
var pdf_title = "view_rejection_sales_invoice_by_id";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#view_rejection_sales_invoice_by_id').DataTable();
    }
};
