<div class="container p-5">
    <div class="row">
        <div class="col">
            <h3>Available Items</h3>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 text-dark">
        <?php if (isset($foodbank) && is_array($foodbank)) {
            foreach ($foodbank as $row) { ?>
                <div class="col d-flex">
                    <div class="card h-100 rounded-0 border-0 shadow">
                        <?php
                        if ($row['item_image'] != null) {
                            echo '<img class="card-img-top" src="' . base_url() . 'assets/catalog/' . $row['item_image'] . '" alt="No Image">';
                        } else {
                            echo '<img class="card-img-top" src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="No Image">';
                        }
                        ?>
                        <div class="card-body">
                            <h5 class="mb-0 fw-bold"><?php echo $row['item_name']; ?></h5>
                            <div class="card-text">Foodbank <?php echo $row['item_location']; ?>. </div>
                            <div class="card-text pt-2"> <?php echo $row['item_quantity']; ?> unit(s) left.</div>
                            <div class="card-text text-muted fw-lighter"><small>Last Updated at <?php echo $row['datetime']; ?></small></div>
                        </div>
                        <?php if (!isset($_SESSION['bags'][$row['item_id']])) { ?>
                            <a href="<?php echo base_url(); ?>foodbank/take/<?php echo $row['item_id']; ?>" class="btn btn-primary rounded-0">
                                <span>Take</span>
                            </a>
                        <?php } else if ($row['item_quantity'] === 0) { ?>
                            <button class="btn btn-light" disabled>
                                <span>Not Available</span>
                            </button>
                        <?php } else { ?>
                            <button class="btn btn-secondary" disabled>
                                <span>Taken</span>
                            </button>
                        <?php } ?>
                    </div>
                </div>
        <?php }
        }
        ?>
    </div>
</div>