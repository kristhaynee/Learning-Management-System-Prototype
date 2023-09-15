<!-- new-user-form.php -->
<div id="popup" class="popup">
    <div class="popup-content w-50 p-5">
        <h2 class="">Add Teacher</h2>
        <p class="mb-4">Create a new account for Teacher</p>

        <form class="row g-3">
            <!-- Enter Email Input (Full Width) -->
            <div class="form-floating col-12">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <!-- First Name, Last Name, Suffix (3 Rows Side by Side) -->
            <div class="form-floating col-md-5">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating col-md-5">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating col-md-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="e.g. Jr.">
                <label for="floatingInput">Suffix</label>
            </div>

            <!-- Username and Password (2 Rows Side by Side) -->
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <!-- Buttons (Right Side) -->
            <div class="d-flex flex-row-reverse form-group text-right">
                <button type="submit" class="save-teach-btn mx-2">Save</button>
                <button type="button" class="btn btn-secondary mr-2" id="close-popup">Close</button>
            </div>
        </form>
    </div>
</div>
