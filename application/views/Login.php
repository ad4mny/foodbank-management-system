<div class="container">
    <div class="row d-flex justify-content-center my-5 py-5">
        <div class="col-4">
            <div class=" rounded-3 bg-white shadow-lg p-5">
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
                        <button type="submit" class="form-control btn btn-primary" name="submit">Login</button>
                    </div>
                    <div class="form-group pb-2 text-center">
                        <a href="<?php echo base_url(); ?>register" class="form-control btn btn-success">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>