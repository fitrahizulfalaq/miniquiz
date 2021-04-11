<!-- DataTables Data -->
<script>
  $(function () {
    $("#example1").DataTable({});
    
    $('#list').DataTable({
      "paging": true,
      "pagingType": "simple",
      "autoWidth": true,
      "searching": false,
      "info": true,
      "ordering": false,
      "lengthChange": false,
      "lengthMenu": [ [10, 20, 30], [10, 20, 30] ],
    });

    $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": false,
          "autoWidth": false,            
        });

    $('#list').DataTable({
      "paging": true,
      "pagingType": "simple_numbers",
      "autoWidth": true,
      "searching": true,
      "info": true,
      "ordering": false,
      "lengthChange": true,
      "lengthMenu": [ [10, 20, 30, 50, 100], [10, 20, 30, 50, 100] ],
    });

    var table = $('#example3').DataTable({
        "lengthMenu": [ [5, 10, 15, 20, 50, 100, -1], [5, 10, 15, 20, 50, 100, "All"] ],
        "autoWidth": true,
        "info": false,
        select: true
      });

    new $.fn.dataTable.Buttons(table, {
          buttons: [        
            {
                extend: 'colvis',
                text: '<i class="fas fa-eye"></i>',                
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i>',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csv',
                text: '<i class="fas fa-file-excel"></i>',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf"></i>',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'copy',
                text: '<i class="fas fa-copy"></i>',
                exportOptions: {
                    columns: ':visible'
                }
            },        
          ],            
      });

      table.buttons( 0, null ).containers().appendTo( '.tableTools-container' );                   
  });
</script>