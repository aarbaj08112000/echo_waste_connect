$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "process";
var pdf_title = "process";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#process').DataTable();
    },

};
