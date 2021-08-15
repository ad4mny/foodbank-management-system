<div class="container p-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-4">
            <div class="bg-white shadow-lg p-5">
                <form method="post" action="<?php echo base_url(); ?>login/verify">
                    <div class="form-group pb-2 text-center">
                        <h3 class="fw-bold">Login</h3>
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" name="username" placeholder="Your username" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="password" class="form-control" name="password" placeholder="Your password" required>
                    </div>
                    <div class="form-group pb-2">
                        <small>Forgot password? Reset here.</small>
                    </div>
                    <hr>
                    <div class="form-group pb-2 text-center">
                        <button type="submit" class="form-control btn btn-primary rounded-0" name="submit">Login</button>
                    </div>
                    <div class="form-group pb-2 text-center">
                        <a href="<?php echo base_url(); ?>register" class="form-control btn btn-success rounded-0">Register</a>
                    </div>
                    <div class="form-group pb-2 text-center">
                        <small><a href="<?php echo base_url(); ?>admin/login" class="text-muted">Management</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>