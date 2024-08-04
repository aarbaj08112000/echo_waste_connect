$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "transporter";
var pdf_title = "transporter";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#transporter').DataTable();
    },

};
