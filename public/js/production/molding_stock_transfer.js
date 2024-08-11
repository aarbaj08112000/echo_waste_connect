$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "molding_stock_transfer";
var pdf_title = "molding_stock_transfer";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#molding_stock_transfer').DataTable();
    }
};
