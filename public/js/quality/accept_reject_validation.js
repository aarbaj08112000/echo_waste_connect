$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "accept_reject_validation";
var pdf_title = "accept_reject_validation";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#accept_reject_validation').DataTable();
    }
};
