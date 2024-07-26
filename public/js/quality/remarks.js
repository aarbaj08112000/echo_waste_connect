$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "remarks";
var pdf_title = "remarks";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#remarks').DataTable();
    }
};
