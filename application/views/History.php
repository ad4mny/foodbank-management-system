<div class="container p-5">
    <div class="row">
        <div class="col">
            <h3 class="text-white">History</h3>
        </div>
    </div>
    <?php if (isset($history) && is_array($history)) {
        foreach ($history as $row) { ?>
            <div class="row bg-white my-2 py-2 shadow">
                <div class="col-2">
                    <?php
                    if ($row['item_image'] != null) {
                        echo '<img class="card-img-top" src="' . base_url() . 'assets/catalog/' . $row['item_image'] . '" alt="No Image">';
                    } else {
                        echo '<img class="card-img-top" src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="No Image">';
                    }
                    ?>
                </div>
                <div class="col">
                    <h5 class="mb-0"><?php echo $row['item_name']; ?></h5>
                    <div class="card-text text-muted fw-light">Foodbank location at <?php echo $row['item_location']; ?>. </div>
                </div>
            </div>
    <?php }
    }
    ?>
</div>