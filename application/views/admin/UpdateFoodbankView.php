<div class="col">
    <div class="row mb-2 border-bottom">
        <div class="col">
            <h1>Update Item List</h1>
        </div>
    </div>
    <?php if (isset($item) && is_array($item)) {
        foreach ($item as $row) { ?>
            <form method="post" action="<?php echo base_url(); ?>admin/foodbank/update/submit">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group py-2">
                            <small>Item Image</small>
                            <input type="file" class="form-control mt-1" name="image" value="<?php echo $row['item_image']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Item Name</small>
                            <input type="text" class="form-control" name="name" placeholder="Item Name" value="<?php echo $row['item_name']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Item Quantity</small>
                            <div class="input-group">
                                <input type="number" class="form-control" name="quantity" placeholder="Item Quantity" value="<?php echo $row['item_quantity']; ?>" required>
                                <span class="input-group-text">Unit(s)</span>
                            </div>
                        </div>
                        <div class="form-group pb-2">
                            <small>Item Location</small>
                            <input type="text" class="form-control" name="location" placeholder="Item Location" value="<?php echo $row['item_location']; ?>" required>
                        </div>
                        <div class="form-group py-2 text-center">
                            <input type="hidden" name="id" value="<?php echo $row['item_id']; ?>" required>
                            <button type="submit" class="form-control btn btn-primary rounded-0" name="submit">Update Item</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <small>Picture Here</small>
                            <?php
                            if ($row['item_image'] !== null) {
                                echo '<img src="' . base_url() . 'assets/image/' . $row['item_image'] . '" alt="No Image" class="img-fluid" />';
                            } else {
                                echo '<img src="https://dummyimage.com/640x360/f0f0f0/aaa" alt="No Image" class="img-fluid" />';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </form>

    <?php }
    } ?>
</div>