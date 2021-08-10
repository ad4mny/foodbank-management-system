<div class="text-center pt-3">
    <h1 class="text-white display-4 mb-0">Foodbank</h1>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0 ">
            <li class="nav-item ">
                <a href="<?php echo base_url(); ?>" class="nav-link <?php if ($this->uri->segment(1) == '') echo 'active border-bottom'; ?>">Home</a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo base_url(); ?>foodbank" class="nav-link <?php if ($this->uri->segment(1) == 'foodbank') echo 'active border-bottom'; ?>">Foodbank</a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo base_url(); ?>about" class="nav-link <?php if ($this->uri->segment(1) == 'about') echo 'active border-bottom'; ?>">About Us</a>
            </li>

            <?php if (isset($_SESSION['id'])) { ?>
                <li class="nav-item ">
                    <a href="<?php echo base_url(); ?>history" class="nav-link <?php if ($this->uri->segment(1) == 'location') echo 'active border-bottom'; ?>">History</a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url(); ?>logout" class="nav-link <?php if ($this->uri->segment(1) == 'login') echo 'active border-bottom'; ?>">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item ">
                    <a href="<?php echo base_url(); ?>login" class="nav-link <?php if ($this->uri->segment(1) == 'login') echo 'active border-bottom'; ?>">Login</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

<!-- Alerts -->
<div id="alert" class="w-75 position-absolute start-50 translate-middle mt-5" style="z-index: 1100; top: 10%;">
    <?php
    if ($this->session->tempdata('notice') != NULL) {
        echo '<div class="alert alert-success border-0 shadow alert-dismissible fade show" role="alert">';
        echo '<i class="fas fa-info-circle fa-fw"></i> ' . $this->session->tempdata('notice');
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
    }
    if ($this->session->tempdata('error') != NULL) {
        echo '<div class="alert alert-danger border-0 shadow alert-dismissible fade show" role="alert">';
        echo '<i class="fas fa-exclamation-circle fa-fw"></i> ' . $this->session->tempdata('error');
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
    }
    ?>
</div>