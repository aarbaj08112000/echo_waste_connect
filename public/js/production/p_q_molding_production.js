$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "p_q_molding_production";
var pdf_title = "p_q_molding_production";

const page = {
    init: function() {
        this.dataTable();
    },
    dataTable: function() {
        table = $('#p_q_molding_production').DataTable();
    }
};
