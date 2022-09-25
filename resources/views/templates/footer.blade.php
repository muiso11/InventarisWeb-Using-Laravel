<script src="js/script.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jquery/jquery.dataTables.min.js"></script>
<script src="js/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
    $(document).ready(function() {
        //inialize datatable
        $('#myTable').DataTable();

        //hide alert
        $(document).on('click', '.close', function() {
            $('.alert').hide();
        })
    });
</script>
</body>

</html>