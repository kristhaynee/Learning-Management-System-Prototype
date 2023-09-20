    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



    <script defer src="../assets/js/navbar-sticky.js"></script>
    <script defer src="../assets/js/user-table.js"></script>    
    <script defer src="../assets/js/create-assessment.js"></script>    
    <script defer src="../assets/js/add-question.js"></script>    
    <script defer src="../assets/js/user-generate.js"></script>    

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    

    <!-- Export Buttons -->
    <script>
    $(document).ready(function() {
        $('#example2').DataTable( {
            dom: 'Bfrtlip',
            buttons: [
            {
                extend: 'excel',
                text: '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48"><path fill="#169154" d="M29,6H15.744C14.781,6,14,6.781,14,7.744v7.259h15V6z"></path><path fill="#18482a" d="M14,33.054v7.202C14,41.219,14.781,42,15.743,42H29v-8.946H14z"></path><path fill="#0c8045" d="M14 15.003H29V24.005000000000003H14z"></path><path fill="#17472a" d="M14 24.005H29V33.055H14z"></path><g><path fill="#29c27f" d="M42.256,6H29v9.003h15V7.744C44,6.781,43.219,6,42.256,6z"></path><path fill="#27663f" d="M29,33.054V42h13.257C43.219,42,44,41.219,44,40.257v-7.202H29z"></path><path fill="#19ac65" d="M29 15.003H44V24.005000000000003H29z"></path><path fill="#129652" d="M29 24.005H44V33.055H29z"></path></g><path fill="#0c7238" d="M22.319,34H5.681C4.753,34,4,33.247,4,32.319V15.681C4,14.753,4.753,14,5.681,14h16.638 C23.247,14,24,14.753,24,15.681v16.638C24,33.247,23.247,34,22.319,34z"></path><path fill="#fff" d="M9.807 19L12.193 19 14.129 22.754 16.175 19 18.404 19 15.333 24 18.474 29 16.123 29 14.013 25.07 11.912 29 9.526 29 12.719 23.982z"></path></svg> Excel',
                titleAttr: 'Export to Excel'
            },
            {
                extend: 'pdf',
                text: '<svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path><path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path><polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon><path style="fill:#F15642;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path><g><path style="fill:#FFFFFF;" d="M101.744,303.152c0-4.224,3.328-8.832,8.688-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.688-3.184-8.688-8.816V303.152z M118.624,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H118.624z"></path><path style="fill:#FFFFFF;" d="M196.656,384c-4.224,0-8.832-2.304-8.832-7.92v-72.672c0-4.592,4.608-7.936,8.832-7.936h29.296 c58.464,0,57.184,88.528,1.152,88.528H196.656z M204.72,311.088V368.4h21.232c34.544,0,36.08-57.312,0-57.312H204.72z"></path><path style="fill:#FFFFFF;" d="M303.872,312.112v20.336h32.624c4.608,0,9.216,4.608,9.216,9.072c0,4.224-4.608,7.68-9.216,7.68 h-32.624v26.864c0,4.48-3.184,7.92-7.664,7.92c-5.632,0-9.072-3.44-9.072-7.92v-72.672c0-4.592,3.456-7.936,9.072-7.936h44.912 c5.632,0,8.96,3.344,8.96,7.936c0,4.096-3.328,8.704-8.96,8.704h-37.248V312.112z"></path></g><path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path></g></svg> PDF',
                titleAttr: 'Export to PDF'
            },
            {
                extend: 'print',
                text: '<svg height="25" width="25" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M192 234.666667h640v64H192z" fill="#424242"></path><path d="M85.333333 533.333333h853.333334v-149.333333c0-46.933333-38.4-85.333333-85.333334-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v149.333333z" fill="#616161"></path><path d="M170.666667 768h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333v-170.666667H85.333333v170.666667c0 46.933333 38.4 85.333333 85.333334 85.333333z" fill="#424242"></path><path d="M853.333333 384m-21.333333 0a21.333333 21.333333 0 1 0 42.666667 0 21.333333 21.333333 0 1 0-42.666667 0Z" fill="#00E676"></path><path d="M234.666667 85.333333h554.666666v213.333334H234.666667z" fill="#90CAF9"></path><path d="M800 661.333333h-576c-17.066667 0-32-14.933333-32-32s14.933333-32 32-32h576c17.066667 0 32 14.933333 32 32s-14.933333 32-32 32z" fill="#242424"></path><path d="M234.666667 661.333333h554.666666v234.666667H234.666667z" fill="#90CAF9"></path><path d="M234.666667 618.666667h554.666666v42.666666H234.666667z" fill="#42A5F5"></path><path d="M341.333333 704h362.666667v42.666667H341.333333zM341.333333 789.333333h277.333334v42.666667H341.333333z" fill="#1976D2"></path></g></svg> Print',
                titleAttr: 'Print Table',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                },
                title: 'Teachers Account Report',
                customize: function (win) {

                    var container = document.createElement('div');

                    var  customLayout= `
                            <div class="page" size="A4">

                        <!-- USER REPORT -->
                                <div class="user-report">
                                    <div class="des">
                                        <p class="issue"> Issued: <span id="current-date"> </span></p>
                                    </div>
                                </div>

                        <!-- GENERATED BY -->
                                <?php
                                    if(isset($_SESSION['auth_user']['user_id'])) {
                                        $user_id = $_SESSION['auth_user']['user_id'];
                                        $users = "SELECT * FROM users WHERE user_id='$user_id'";
                                        $user_run = mysqli_query($con, $users);

                                        if(mysqli_num_rows($user_run) > 0) {
                                            $user = mysqli_fetch_assoc($user_run);
                                ?>
                                <div class="generated-by">
                                    <div class="title">
                                        Generated By
                                    </div>
                                    <div class="gen-sec">
                                        <div class="name">
                                        <?php echo $user['fname'] . ' ' . $user['lname']; ?>
                                        </div>
                                        <div class="userCode">
                                        User ID: <?php echo $user['userCode']; ?>
                                        </div>
                                        <p><?php echo $user['email']; ?></p>
                                    </div>

                                    <div class="gen-sec">
                                        <div class="sub-title"> Account Information </div>
                                        <div class="user-info">
                                        <p>Role: 
                                        <?php 
                                        if($user['role_as'] == 0){echo "Admin";} 
                                        if($user['role_as'] == 1){echo "Teacher";}
                                        ?>
                                        </p>
                                        <p>Username: <?php echo $user['username']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                    `;
                    container.innerHTML = customLayout;

                    var tableHTML = '<table>' + $('#report-table').html() + '</table>';
                    container.innerHTML += tableHTML;
                    $(win.document.body).append(container);

                    var customCSS = `
                        <style>
                            /* Google Font */
                            @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');

                            body {
                                margin: 0;
                                padding: 0;
                                font-size: 16px;
                                font-weight: 300;
                                width: 100%;
                                background: rgb(204, 204, 204);
                                font-family: 'Roboto Condensed', sans-serif;
                            }

                            h2, h4, p {
                                margin: 0;
                            }

                            .page {
                                background: #fff;
                                display: block;
                                margin: 3rem auto 3rem auto;
                                position: relative;
                                box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.1);
                            }

                            .page[size="A4"] {
                                width: 21cm;
                                height: 29.7cm;
                                overflow: hidden;
                            }

                            /* TOP SECTION */
                            .top-section {
                                color: #fff;
                                padding: 30px;
                                height: 100px;
                                background-color: #FF9635;
                            }

                            .top-section h2 {
                                font-size: 42px;
                                margin-bottom: 10px;
                                font-weight: 600;
                            }

                            .top-section .address,
                            .top-section .contact {
                                width: 50%;
                                height: 100%;
                                float: left;
                            }

                            .top-section .address-content{
                                max-width: 275px;
                            }

                            .contact .contact-content {
                                max-width: 220px;
                                float: right;
                                margin-top: 32px;
                            }

                            .contact-content .email,
                            .contact-content .number {
                                display: block;
                            }

                            .contact-content .email span,
                            .contact-content .number span {
                                float: right;
                                margin-left: 30px;
                            }

                            /* USER REPORT */
                            .user-report{
                                padding: 20px;
                                font-size: 20px;
                                margin: 15px;
                            }

                            .user-report .title {
                                font-weight: 400;
                                font-size: 20px;
                                float: left;
                            }

                            .user-report .code {
                                font-weight: 700;
                                text-align: right;
                            }

                            .user-report .issue {
                                text-align: right;
                                font-size: 15px;
                            }

                            /* Generated By */
                            .generated-by{
                                padding: 20px;
                                /* margin-top: 40px; */
                                margin-left: 15px;
                            }

                            .generated-by .title{
                                font-weight: 400;
                                font-size: 20px;
                                margin-bottom: 7px;
                            }

                            .generated-by .gen-sec{
                                width: 50%;
                                float: left;
                                font-size: 18px;
                                margin-bottom: 25px;
                            }

                            .generated-by .sub-title,
                            .generated-by .name {
                                font-weight: 400;
                                font-size: 18px;
                                margin-bottom: 5px;
                            }

                            .generated-by .user-info {
                                max-width: 300px;
                            }

                            /* REPORT TABLE */
                            .table {
                                padding: 0 30px;
                            }

                            .table table{
                                width: 100%;
                            }
                            .table table, th, td {
                                padding: 5px;
                                text-align: center;
                                border: 1px solid #616161;
                                border-collapse: collapse;
                            }

                            .table tr th {
                                font-size: 18px;
                                font-weight: 400;
                            }

                            .table table tr:first-child {
                                color: #fff;
                                background-color: #FF9635;
                            }

                            .table tr th:nth-child(2),
                            .table tr th:nth-child(2) {
                                text-align: left;
                                width: 230px;
                            }
                            
                            /* Prevent page breaks before and after specific elements */
                            .no-page-break {
                                page-break-before: avoid;
                                page-break-after: avoid;
                            }
                        </style>
                    `;
                    $(win.document.head).append(customCSS);

                    // Get the current date
                    var currentDate = new Date();
                    var formattedDate = currentDate.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
                    $(win.document.body).find('.issue span').text(formattedDate);

                }
            }
        ]
        } );
    } );
    </script>

    <script>
    $(document).ready(function() {
        $('#example1').DataTable( {
            dom: 'Bfrtlip',
            buttons: [
            {
                extend: 'excel',
                text: '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48"><path fill="#169154" d="M29,6H15.744C14.781,6,14,6.781,14,7.744v7.259h15V6z"></path><path fill="#18482a" d="M14,33.054v7.202C14,41.219,14.781,42,15.743,42H29v-8.946H14z"></path><path fill="#0c8045" d="M14 15.003H29V24.005000000000003H14z"></path><path fill="#17472a" d="M14 24.005H29V33.055H14z"></path><g><path fill="#29c27f" d="M42.256,6H29v9.003h15V7.744C44,6.781,43.219,6,42.256,6z"></path><path fill="#27663f" d="M29,33.054V42h13.257C43.219,42,44,41.219,44,40.257v-7.202H29z"></path><path fill="#19ac65" d="M29 15.003H44V24.005000000000003H29z"></path><path fill="#129652" d="M29 24.005H44V33.055H29z"></path></g><path fill="#0c7238" d="M22.319,34H5.681C4.753,34,4,33.247,4,32.319V15.681C4,14.753,4.753,14,5.681,14h16.638 C23.247,14,24,14.753,24,15.681v16.638C24,33.247,23.247,34,22.319,34z"></path><path fill="#fff" d="M9.807 19L12.193 19 14.129 22.754 16.175 19 18.404 19 15.333 24 18.474 29 16.123 29 14.013 25.07 11.912 29 9.526 29 12.719 23.982z"></path></svg> Excel',
                titleAttr: 'Export to Excel'
            },
            {
                extend: 'pdf',
                text: '<svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path><path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path><polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon><path style="fill:#F15642;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path><g><path style="fill:#FFFFFF;" d="M101.744,303.152c0-4.224,3.328-8.832,8.688-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.688-3.184-8.688-8.816V303.152z M118.624,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H118.624z"></path><path style="fill:#FFFFFF;" d="M196.656,384c-4.224,0-8.832-2.304-8.832-7.92v-72.672c0-4.592,4.608-7.936,8.832-7.936h29.296 c58.464,0,57.184,88.528,1.152,88.528H196.656z M204.72,311.088V368.4h21.232c34.544,0,36.08-57.312,0-57.312H204.72z"></path><path style="fill:#FFFFFF;" d="M303.872,312.112v20.336h32.624c4.608,0,9.216,4.608,9.216,9.072c0,4.224-4.608,7.68-9.216,7.68 h-32.624v26.864c0,4.48-3.184,7.92-7.664,7.92c-5.632,0-9.072-3.44-9.072-7.92v-72.672c0-4.592,3.456-7.936,9.072-7.936h44.912 c5.632,0,8.96,3.344,8.96,7.936c0,4.096-3.328,8.704-8.96,8.704h-37.248V312.112z"></path></g><path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path></g></svg> PDF',
                titleAttr: 'Export to PDF'
            },
            {
                extend: 'print',
                text: '<svg height="25" width="25" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M192 234.666667h640v64H192z" fill="#424242"></path><path d="M85.333333 533.333333h853.333334v-149.333333c0-46.933333-38.4-85.333333-85.333334-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v149.333333z" fill="#616161"></path><path d="M170.666667 768h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333v-170.666667H85.333333v170.666667c0 46.933333 38.4 85.333333 85.333334 85.333333z" fill="#424242"></path><path d="M853.333333 384m-21.333333 0a21.333333 21.333333 0 1 0 42.666667 0 21.333333 21.333333 0 1 0-42.666667 0Z" fill="#00E676"></path><path d="M234.666667 85.333333h554.666666v213.333334H234.666667z" fill="#90CAF9"></path><path d="M800 661.333333h-576c-17.066667 0-32-14.933333-32-32s14.933333-32 32-32h576c17.066667 0 32 14.933333 32 32s-14.933333 32-32 32z" fill="#242424"></path><path d="M234.666667 661.333333h554.666666v234.666667H234.666667z" fill="#90CAF9"></path><path d="M234.666667 618.666667h554.666666v42.666666H234.666667z" fill="#42A5F5"></path><path d="M341.333333 704h362.666667v42.666667H341.333333zM341.333333 789.333333h277.333334v42.666667H341.333333z" fill="#1976D2"></path></g></svg> Print',
                titleAttr: 'Print Table',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                },
                title: 'Student Accounts Report',
                customize: function (win) {

                    var container = document.createElement('div');

                    var  customLayout= `
                            <div class="page" size="A4">

                        <!-- USER REPORT -->
                                <div class="user-report">
                                    <div class="des">
                                        <p class="issue"> Issued: <span id="current-date"> </span></p>
                                    </div>
                                </div>

                        <!-- GENERATED BY -->
                                <?php
                                    if(isset($_SESSION['auth_user']['user_id'])) {
                                        $user_id = $_SESSION['auth_user']['user_id'];
                                        $users = "SELECT * FROM users WHERE user_id='$user_id'";
                                        $user_run = mysqli_query($con, $users);

                                        if(mysqli_num_rows($user_run) > 0) {
                                            $user = mysqli_fetch_assoc($user_run);
                                ?>
                                <div class="generated-by">
                                    <div class="title">
                                        Generated By
                                    </div>
                                    <div class="gen-sec">
                                        <div class="name">
                                        <?php echo $user['fname'] . ' ' . $user['lname']; ?>
                                        </div>
                                        <div class="userCode">
                                        User ID: <?php echo $user['userCode']; ?>
                                        </div>
                                        <p><?php echo $user['email']; ?></p>
                                    </div>

                                    <div class="gen-sec">
                                        <div class="sub-title"> Account Information </div>
                                        <div class="user-info">
                                        <p>Role: 
                                        <?php 
                                        if($user['role_as'] == 0){echo "Admin";} 
                                        if($user['role_as'] == 1){echo "Teacher";}
                                        ?>
                                        </p>
                                        <p>Username: <?php echo $user['username']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                    `;
                    container.innerHTML = customLayout;

                    var tableHTML = '<table>' + $('#report-table').html() + '</table>';
                    container.innerHTML += tableHTML;
                    $(win.document.body).append(container);

                    var customCSS = `
                        <style>
                            /* Google Font */
                            @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');

                            body {
                                margin: 0;
                                padding: 0;
                                font-size: 16px;
                                font-weight: 300;
                                width: 100%;
                                background: rgb(204, 204, 204);
                                font-family: 'Roboto Condensed', sans-serif;
                            }

                            h2, h4, p {
                                margin: 0;
                            }

                            .page {
                                background: #fff;
                                display: block;
                                margin: 3rem auto 3rem auto;
                                position: relative;
                                box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.1);
                            }

                            .page[size="A4"] {
                                width: 21cm;
                                height: 29.7cm;
                                overflow: hidden;
                            }

                            /* TOP SECTION */
                            .top-section {
                                color: #fff;
                                padding: 30px;
                                height: 100px;
                                background-color: #FF9635;
                            }

                            .top-section h2 {
                                font-size: 42px;
                                margin-bottom: 10px;
                                font-weight: 600;
                            }

                            .top-section .address,
                            .top-section .contact {
                                width: 50%;
                                height: 100%;
                                float: left;
                            }

                            .top-section .address-content{
                                max-width: 275px;
                            }

                            .contact .contact-content {
                                max-width: 220px;
                                float: right;
                                margin-top: 32px;
                            }

                            .contact-content .email,
                            .contact-content .number {
                                display: block;
                            }

                            .contact-content .email span,
                            .contact-content .number span {
                                float: right;
                                margin-left: 30px;
                            }

                            /* USER REPORT */
                            .user-report{
                                padding: 20px;
                                font-size: 20px;
                                margin: 15px;
                            }

                            .user-report .title {
                                font-weight: 400;
                                font-size: 20px;
                                float: left;
                            }

                            .user-report .code {
                                font-weight: 700;
                                text-align: right;
                            }

                            .user-report .issue {
                                text-align: right;
                                font-size: 15px;
                            }

                            /* Generated By */
                            .generated-by{
                                padding: 20px;
                                /* margin-top: 40px; */
                                margin-left: 15px;
                            }

                            .generated-by .title{
                                font-weight: 400;
                                font-size: 20px;
                                margin-bottom: 7px;
                            }

                            .generated-by .gen-sec{
                                width: 50%;
                                float: left;
                                font-size: 18px;
                                margin-bottom: 25px;
                            }

                            .generated-by .sub-title,
                            .generated-by .name {
                                font-weight: 400;
                                font-size: 18px;
                                margin-bottom: 5px;
                            }

                            .generated-by .user-info {
                                max-width: 300px;
                            }

                            /* REPORT TABLE */
                            .table {
                                padding: 0 30px;
                            }

                            .table table{
                                width: 100%;
                            }
                            .table table, th, td {
                                padding: 5px;
                                text-align: center;
                                border: 1px solid #616161;
                                border-collapse: collapse;
                            }

                            .table tr th {
                                font-size: 18px;
                                font-weight: 400;
                            }

                            .table table tr:first-child {
                                color: #fff;
                                background-color: #FF9635;
                            }

                            .table tr th:nth-child(2),
                            .table tr th:nth-child(2) {
                                text-align: left;
                                width: 230px;
                            }
                            
                            /* Prevent page breaks before and after specific elements */
                            .no-page-break {
                                page-break-before: avoid;
                                page-break-after: avoid;
                            }
                        </style>
                    `;
                    $(win.document.head).append(customCSS);

                    // Get the current date
                    var currentDate = new Date();
                    var formattedDate = currentDate.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
                    $(win.document.body).find('.issue span').text(formattedDate);

                }
            }
            ]
        } );
    } );
    </script>

    <!-- User Table -->
    <script>
        $(document).ready(function() {
            // Hide both tables initially
            $('#nav-student').hide();
            $('#nav-teacher').hide();

            // Check if there's a 'tab' query parameter in the URL
            const urlParams = new URLSearchParams(window.location.search);
            const tabParam = urlParams.get('tab');

            // Show the corresponding tab based on the query parameter
            if (tabParam === 'teacher') {
                $('#nav-teacher').show();
                $('.nav-link[href="#nav-teacher"]').tab('show'); // Activate the teacher's tab
            } else {
                $('#nav-student').show();
                $('.nav-link[href="#nav-student"]').tab('show'); // Activate the student's tab
            }

            // Tab click event handler
            $('.nav-link').click(function() {
                // Hide both tables
                $('#nav-student').hide();
                $('#nav-teacher').hide();

                // Show the selected tab content
                $($(this).attr('href')).show();

                // Update the URL with the selected tab
                const tabId = $(this).attr('href').substring(1);
                const newUrl = `${window.location.pathname}?tab=${tabId}`;
                window.history.replaceState({}, '', newUrl);
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


    <!-- Add Teacher / Generate Password -->
    <script>
    function generateTemporaryPassword(event) {
        event.preventDefault(); // Prevent the form from submitting
        const passwordInput = document.getElementById("floatingPassword");
        const temporaryPassword = generateRandomPassword();
        passwordInput.value = temporaryPassword;
    }

    function generateRandomPassword() {
        // Implement your password generation logic here
        // This is just a simple example, replace it with your preferred method
        const length = 10;
        const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let password = "";

        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            password += charset.charAt(randomIndex);
        }

        return password;
    }
    </script>
    <!-- Add Teacher / Generate Password -->