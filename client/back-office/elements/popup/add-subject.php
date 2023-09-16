<!-- new-user-form.php -->
<div id="subject-popup" class="popup">
    <div class="popup-content w-50 p-5">
        <h2 class="">Add Subject</h2>
        <p class="mb-4">Create a new Subject Category</p>

        <form class="row g-3">
            <!-- Enter Email Input (Full Width) -->
            <div class="form-floating col-12">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">Subject Name</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>

            <!-- Buttons (Right Side) -->
            <div class="d-flex flex-row-reverse form-group text-right">
                <button type="submit" class="save-teach-btn mx-2">Save</button>
                <button type="button" class="btn btn-secondary mr-2" id="subject-close-popup">Close</button>
            </div>
        </form>
    </div>
</div>
