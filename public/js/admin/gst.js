$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "gst";
var pdf_title = "gst";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#gst').DataTable();
    },

};
