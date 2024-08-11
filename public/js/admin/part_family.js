$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "part_family";
var pdf_title = "part_family";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#part_family').DataTable();
    },

};
