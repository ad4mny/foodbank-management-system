<div class="container">

    <!-- Alerts -->
    <div id="alert" class="w-50 position-absolute m-5">
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

    <!-- Navigations -->
    <div class="row py-5">
        <div class="col-3">
            <div class="list-group bg-white shadow">
                <a href="<?php echo base_url(); ?>admin/foodbank" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == 'foodbank') echo 'active'; ?>">Manage Foodbank</a>
                <a href="<?php echo base_url(); ?>admin/analytic" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == 'analytic') echo 'active'; ?>">Manage Analytics</a>
                <a href="<?php echo base_url(); ?>logout" class="list-group-item list-group-item-action text-danger">Logout</a>
            </div>
        </div>