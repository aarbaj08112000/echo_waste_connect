$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "uom";
var pdf_title = "uom";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#uom').DataTable();
    },

};
