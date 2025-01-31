<div class="container mt-5">
    <?php if (!empty($message)): ?>
        <div class="alert alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header text-white text-center">
                    <h4 class="mb-0">Add New Product</h4>
                </div>
                <div class="card-body">
                    <?php echo form_open('Admin_add_Product/add',['enctype' => 'multipart/form-data']); ?>

                    <!-- Category Selection -->
                    <div class="form-group">
                        <label for="category" class="font-weight-bold">Category</label>
                        <select class="form-control" name="category" id="category" required>
                            <option value="laptop">Laptop</option>
                            <option value="mobile">Mobile</option>
                            <option value="accessory">Accessory</option>
                        </select>
                    </div>

                    <!-- General Fields -->
                    <div class="form-group">
                        <label for="brand" class="font-weight-bold">Brand</label>
                        <input type="text" class="form-control" name="brand" placeholder="Enter Brand" required>
                    </div>
                    <div class="form-group">
                        <label for="model" class="font-weight-bold">Model</label>
                        <input type="text" class="form-control" name="model" placeholder="Enter Model" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="font-weight-bold">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter Price" required>
                    </div>
                    <div class="form-group">
                        <label for="special_price" class="font-weight-bold">Special Price</label>
                        <input type="number" class="form-control" name="special_price" placeholder="Enter Price" required>
                    </div>
                    <div class="form-group">
                        <label for="stock" class="font-weight-bold">Stock</label>
                        <input type="number" class="form-control" name="stock" placeholder="Enter Number Stock">
                    </div>


                    <!-- Laptop-Specific Fields -->
                    <div id="laptopFields" class="d-none">
                        <h5 class="mt-4">Laptop Specifications</h5>
                        <div class="form-group">
                            <label for="processor" class="font-weight-bold">Processor</label>
                            <input type="text" class="form-control" name="processor" placeholder="Enter Processor">
                        </div>
                        <div class="form-group">
                            <label for="screen_size" class="font-weight-bold">Screen Size</label>
                            <input type="text" class="form-control" name="screen_size" placeholder="Enter Screen Size">
                        </div>
                        <div class="form-group">
                            <label for="RAM" class="font-weight-bold">RAM</label>
                            <input type="text" class="form-control" name="RAM" placeholder="Enter RAM">
                        </div>
                    </div>

                    <!-- Mobile-Specific Fields -->
                    <div id="mobileFields" class="d-none">
                        <h5 class="mt-4">Mobile Specifications</h5>
                        <div class="form-group">
                            <label for="camera" class="font-weight-bold">Camera</label>
                            <input type="text" class="form-control" name="camera" placeholder="Enter Camera Details">
                        </div>
                        <div class="form-group">
                            <label for="connectivity" class="font-weight-bold">Connectivity</label>
                            <input type="text" class="form-control" name="connectivity" placeholder="Enter Connectivity Options">
                        </div>
                        <div class="form-group">
                            <label for="battery_life" class="font-weight-bold">Battery Life</label>
                            <input type="text" class="form-control" name="battery_life" placeholder="Enter Battery Life">
                        </div>
                    </div>

                    <!-- Accessory-Specific Fields -->
                    <div id="accessoryFields" class="d-none">
                        <h5 class="mt-4">Accessory Specifications</h5>
                        <div class="form-group">
                            <label for="accessory_type" class="font-weight-bold">Accessory Type</label>
                            <input type="text" class="form-control" name="accessory_type" placeholder="Enter Accessory Type">
                        </div>
                        <div class="form-group">
                            <label for="compatible_with" class="font-weight-bold">Compatible With</label>
                            <input type="text" class="form-control" name="compatible_with" placeholder="Enter Compatibility">
                        </div>
                    </div>
                    <!-- image Fields -->

                    <div class="form-group">
                        <label for="images">Upload Images</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-4">Add Product</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>