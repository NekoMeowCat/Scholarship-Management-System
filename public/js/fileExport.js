$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        search: {
            caseInsensitive: true // Set to true for case-insensitive search
        }
    });
});
