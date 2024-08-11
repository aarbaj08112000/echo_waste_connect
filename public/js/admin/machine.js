$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "machine";
var pdf_title = "machine";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#machine').DataTable();
    },

};
