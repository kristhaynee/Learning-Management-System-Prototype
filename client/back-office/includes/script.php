    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

    <script defer src="../assets/js/navbar-sticky.js"></script>
    <script defer src="../assets/js/user-table.js"></script>    

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- User Table -->
    
    <script>
    $(document).ready(function() {
        // Hide both tables initially
        $('#nav-student').hide();
        $('#nav-teacher').hide();

        // Show the initial active tab content
        $('#nav-student').show();

        // Tab click event handler
        $('.nav-link').click(function() {
            // Hide both tables
            $('#nav-student').hide();
            $('#nav-teacher').hide();

            // Show the selected tab content
            $($(this).attr('href')).show();
        });
    });
</script>
    