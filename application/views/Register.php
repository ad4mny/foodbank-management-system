<div class="container p-5">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="bg-white shadow-lg p-5">
                <form method="post" action="<?php echo base_url(); ?>register/new">
                    <div class="form-group pb-2 text-center">
                        <h3 class="fw-bold">Create new account.</h3>
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" name="name" placeholder="Your full name" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" name="id" placeholder="Your matric or staff id" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" name="username" placeholder="Your username" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="password" class="form-control" name="password" placeholder="Your password" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="password" class="form-control" name="c_password" placeholder="Confirm password" required>
                    </div>
                    <hr>
                    <div class="form-group pb-2 text-center">
                        <button type="submit" class="form-control btn btn-success rounded-0" name="submit">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>