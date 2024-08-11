$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "downtime_master";
var pdf_title = "downtime_master";

const page = {
    init: function() {
        this.dataTable();

    },
    dataTable: function() {
        table = $('#downtime_master').DataTable();
    },

};
