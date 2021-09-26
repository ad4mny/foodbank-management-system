<div class="col">
    <div class="row mb-2 border-bottom">
        <div class="col">
            <h1 class="text-white">Add Item List</h1>
        </div>
    </div>
    <form method="post" action="<?php echo base_url(); ?>admin/foodbank/add/submit" enctype="multipart/form-data">
        <div class="row">

            <div class="col-6 ">
                <div class="form-group py-2">
                    <small class="text-white">Item Image</small>
                    <input type="file" class="form-control mt-1" name="image" required>
                </div>
                <div class="form-group pb-2">
                    <small class="text-white">Item Name</small>
                    <input type="text" class="form-control" name="name" placeholder="Item Name" required>
                </div>
                <div class="form-group pb-2">
                    <small class="text-white">Item Quantity</small>
                    <div class="input-group">
                        <input type="number" class="form-control" name="quantity" placeholder="Item Quantity" required>
                        <span class="input-group-text">Unit(s)</span>
                    </div>
                </div>
                <div class="form-group pb-2">
                    <small class="text-white">Item Location</small>
                    <input type="text" class="form-control" name="location" placeholder="Item Location" required>
                </div>
                <div class="form-group py-2 text-center">
                    <button type="submit" class="form-control btn btn-primary rounded-0" name="submit">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>