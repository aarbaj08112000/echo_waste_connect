$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "mold_maintenance";
var pdf_title = "mold_maintenance";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#mold_maintenance').DataTable();
    }
};
