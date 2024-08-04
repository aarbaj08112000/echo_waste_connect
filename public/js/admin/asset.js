$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "asset";
var pdf_title = "asset";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#asset').DataTable();
    },

};
