$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "grn_rejection";
var pdf_title = "grn_rejection";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#grn_rejection').DataTable();
    }
};
