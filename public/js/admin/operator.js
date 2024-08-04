$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "operator";
var pdf_title = "operator";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#operator').DataTable();
    },

};
