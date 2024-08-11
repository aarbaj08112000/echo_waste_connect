$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "client";
var pdf_title = "client";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#client').DataTable();
    },

};
