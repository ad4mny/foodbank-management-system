<div class="container p-5">
    <div class="row position-absolute top-50 start-50 translate-middle w-100">
        <div class="col text-center">
            <?php
            if (isset($_SESSION['id'])) {
                echo '<h1 class="text-capitalize text-white">Welcome, ' . $_SESSION["name"] . '.</h1>';
                echo '<p class="lead text-white">Take some meals or groceries to feed your tummy.</p>';
                echo '<a href="' . base_url() . 'foodbank" class="btn btn-outline-light rounded-0">View foodbank</a>';
            } else {
                echo '<h1 class="text-white">Welcome, Guest.</h1>';
                echo '<p class="lead"><a href="' . base_url() . 'login" class="btn btn-outline-light  rounded-0">Login here.</a></p>';
            }
            ?>
        </div>
    </div>
</div>