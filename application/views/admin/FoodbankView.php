<div class="col">
    <div class="row mb-2 border-bottom">
        <div class="col">
            <h1 class="text-white">Foodbank Item List</h1>
        </div>
        <div class="col m-auto text-end">
            <a href="<?php echo base_url(); ?>admin/foodbank/add" class="btn btn-outline-light rounded-0">
                <span>Add Item</span>
            </a>
        </div>
    </div>
    <?php if (isset($foodbank) && is_array($foodbank)) {
        foreach ($foodbank as $row) { ?>
            <div class="row text-dark bg-white shadow mb-2 py-1 rounded-3">
                <div class="col-2 m-auto">
                    <?php
                    if ($row['item_image'] != null) {
                        echo '<img class="card-img-top" src="' . base_url() . 'assets/image/' . $row['item_image'] . '" alt="No Image">';
                    } else {
                        echo '<img class="card-img-top" src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="No Image">';
                    }
                    ?>
                </div>
                <div class="col m-auto">
                    <h5 class="mb-0 fw-bold"><?php echo $row['item_name']; ?></h5>
                    <div class="card-text">Foodbank <?php echo $row['item_location']; ?>. </div>
                    <div class="card-text text-muted fw-lighter"><small>Last Updated at <?php echo $row['datetime']; ?></small></div>
                </div>
                <div class="col-2 m-auto">
                    <div class="card-text pt-2"> <?php echo $row['item_quantity']; ?> unit(s) left.</div>
                </div>
                <div class="col-3 text-end m-auto">
                    <a href="<?php echo base_url(); ?>admin/foodbank/update/<?php echo $row['item_id']; ?>" class="btn btn-primary rounded-0">
                        <span>Update</span>
                    </a>
                    <a href="<?php echo base_url(); ?>admin/foodbank/delete/<?php echo $row['item_id']; ?>" class="btn btn-danger rounded-0">
                        <span>Delete</span>
                    </a>
                </div>
            </div>
    <?php }
    }
    ?>
</div>


</div>
</div>