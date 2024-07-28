$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "grades";
var pdf_title = "grades";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#grades').DataTable();
    }
};
