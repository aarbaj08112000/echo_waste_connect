$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "child_parts";
var pdf_title = "child_parts";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#child_parts').DataTable();
    },

};
