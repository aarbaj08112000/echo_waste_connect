$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "shifts";
var pdf_title = "shifts";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#shifts').DataTable();
    },

};
