<div class="col-11 col-md-8 col-lg-6 col-xl-5 mx-auto p-4 border bg-light mt-5">
    <h2>Sign Up</h2>
        <form action="/user/store" method="post" enctype="multipart/form-data" method="post">
            <div class="form-group mt-2">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group mt-2">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group mt-2">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="form-group mt-2">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group mt-2">
                <label for="birthdate">Date of Birth:</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group mt-2">
                <label for="profile_image">Profile Image:</label>
                <input type="file" class="form-control-file" id="profile_image" name="profile_image" accept="image/*" required>
            </div>
            <div class="form-group mt-2">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-2">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
        </form>
        </div>