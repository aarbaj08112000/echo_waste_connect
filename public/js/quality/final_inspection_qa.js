$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "final_inspection_qa";
var pdf_title = "final_inspection_qa";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#final_inspection_qa').DataTable();
    }
};
