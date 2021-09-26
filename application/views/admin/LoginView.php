<div class="container p-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-4 bg-white p-4 ">
            <form method="post" action="<?php echo base_url(); ?>login/verify">
                <div class="form-group pb-2 text-center">
                    <h3 class="text-dark fw-bold">Admin Login</h3>
                </div>
                <div class="form-group pb-2">
                    <input type="text" class="form-control" name="username" placeholder="Your username" required>
                </div>
                <div class="form-group pb-2">
                    <input type="password" class="form-control" name="password" placeholder="Your password" required>
                </div>
                <hr>
                <div class="form-group pb-2 text-center">
                    <button type="submit" class="form-control btn btn-primary rounded-0" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>