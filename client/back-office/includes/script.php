    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

    <script defer src="../assets/js/navbar-sticky.js"></script>
    <script defer src="../assets/js/user-table.js"></script>    
    <script defer src="../assets/js/create-assessment.js"></script>    
    <script defer src="../assets/js/add-question.js"></script>    

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

    <!-- User Table -->


    <!-- Add User Popup -->

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the pop-up and the button
        const popup = document.getElementById('popup');
        const showPopupButton = document.getElementById('show-popup');
        const closePopupButton = document.getElementById('close-popup');

        // Function to show the pop-up
        function showPopup() {
            popup.classList.add('show'); // Add the 'show' class
        }

        // Function to close the pop-up
        function closePopup() {
            popup.classList.remove('show'); // Remove the 'show' class
        }

        // Event listeners
        showPopupButton.addEventListener('click', showPopup);
        closePopupButton.addEventListener('click', closePopup);

    });
    </script>

    <!-- Add User Popup -->

    <!-- Add Subject Popup -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the pop-up and the button
        const popup = document.getElementById('subject-popup');
        const showPopupButton = document.getElementById('subject-show-popup');
        const closePopupButton = document.getElementById('subject-close-popup');

        // Function to show the pop-up
        function showPopup() {
            popup.classList.add('show'); // Add the 'show' class
        }

        // Function to close the pop-up
        function closePopup() {
            popup.classList.remove('show'); // Remove the 'show' class
        }

        // Event listeners
        showPopupButton.addEventListener('click', showPopup);
        closePopupButton.addEventListener('click', closePopup);

    });
    </script>
    <!-- Add Suject Popup -->
    
    <!-- Create Assessment Popup -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the pop-up and the button
        const popup = document.getElementById('assessment-popup');
        const showPopupButton = document.getElementById('assessment-show-popup');
        const closePopupButton = document.getElementById('assessment-close-popup');

        // Function to show the pop-up
        function showPopup() {
            popup.classList.add('show'); // Add the 'show' class
        }

        // Function to close the pop-up
        function closePopup() {
            popup.classList.remove('show'); // Remove the 'show' class
        }

        // Event listeners
        showPopupButton.addEventListener('click', showPopup);
        closePopupButton.addEventListener('click', closePopup);

    });
    </script>
    <!-- Create Assessment Popup -->

    <!---------------------------------------- QUIZ MAKER PART ---------------------------------------->

    