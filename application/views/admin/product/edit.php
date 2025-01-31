<div class="container mt-5">
    <?php if (!empty($message)): ?>
        <div class="alert alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif;
    ?>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header text-white text-center">
                    <h4 class="mb-0">Edit Product</h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($product['id'])): ?>
                        <?php echo form_open('Admin_add_Product/update/' . $product['id'], ['enctype' => 'multipart/form-data']); ?>
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="laptop" <?= $product['category'] == 'laptop' ? 'selected' : ''; ?>>Laptop</option>
                            <option value="mobile" <?= $product['category'] == 'mobile' ? 'selected' : ''; ?>>Mobile</option>
                            <option value="accessory" <?= $product['category'] == 'accessory' ? 'selected' : ''; ?>>Accessory</option>
                        </select>

                </div>
                <!-- General Fields -->
                <div class="form-group">
                    <label for="brand" class="font-weight-bold">Brand</label>
                    <input type="text" class="form-control" name="brand" value="<?php echo $product['brand']; ?>" placeholder="Enter Brand" required>
                </div>
                <div class="form-group">
                    <label for="model" class="font-weight-bold">Model</label>
                    <input type="text" class="form-control" name="model" value="<?php echo $product['model']; ?>" placeholder="Enter Model" required>
                </div>
                <div class="form-group">
                    <label for="price" class="font-weight-bold">Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $product['price']; ?>" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="special_price" class="font-weight-bold">Special Price</label>
                    <input type="number" class="form-control" name="special_price" value="<?php echo $product['special_price']; ?>" placeholder="Enter Special Price" required>
                </div>
                <div class="form-group">
                    <label for="stock" class="font-weight-bold">Stock</label>
                    <input type="number" class="form-control" name="stock" value="<?php echo $product['stock']; ?>" placeholder="Enter Stock">
                </div>

                <!-- Laptop-Specific Fields -->
                <div id="laptopFields" class="<?php echo $product['category'] == 'laptop' ? '' : 'd-none'; ?>">
                    <h5 class="mt-4">Laptop Specifications</h5>
                    <div class="form-group">
                        <label for="processor" class="font-weight-bold">Processor</label>
                        <input type="text" class="form-control" name="processor" value="<?php echo $product['processor']; ?>" placeholder="Enter Processor">
                    </div>
                    <div class="form-group">
                        <label for="screen_size" class="font-weight-bold">Screen Size</label>
                        <input type="text" class="form-control" name="screen_size" value="<?php echo $product['screen_size']; ?>" placeholder="Enter Screen Size">
                    </div>
                    <div class="form-group">
                        <label for="RAM" class="font-weight-bold">RAM</label>
                        <input type="text" class="form-control" name="RAM" value="<?php echo $product['RAM']; ?>" placeholder="Enter RAM">
                    </div>
                </div>

                <!-- Mobile-Specific Fields -->
                <div id="mobileFields" class="<?php echo $product['category'] == 'mobile' ? '' : 'd-none'; ?>">
                    <h5 class="mt-4">Mobile Specifications</h5>
                    <div class="form-group">
                        <label for="camera" class="font-weight-bold">Camera</label>
                        <input type="text" class="form-control" name="camera" value="<?php echo $product['camera']; ?>" placeholder="Enter Camera Details">
                    </div>
                    <div class="form-group">
                        <label for="connectivity" class="font-weight-bold">Connectivity</label>
                        <input type="text" class="form-control" name="connectivity" value="<?php echo $product['connectivity']; ?>" placeholder="Enter Connectivity Options">
                    </div>
                    <div class="form-group">
                        <label for="battery_life" class="font-weight-bold">Battery Life</label>
                        <input type="text" class="form-control" name="battery_life" value="<?php echo $product['battery_life']; ?>" placeholder="Enter Battery Life">
                    </div>
                </div>

                <!-- Accessory-Specific Fields -->
                <div id="accessoryFields" class="<?php echo $product['category'] == 'accessory' ? '' : 'd-none'; ?>">
                    <h5 class="mt-4">Accessory Specifications</h5>
                    <div class="form-group">
                        <label for="accessory_type" class="font-weight-bold">Accessory Type</label>
                        <input type="text" class="form-control" name="accessory_type" value="<?php echo $product['accessory_type']; ?>" placeholder="Enter Accessory Type">
                    </div>
                    <div class="form-group">
                        <label for="compatible_with" class="font-weight-bold">Compatible With</label>
                        <input type="text" class="form-control" name="compatible_with" value="<?php echo $product['compatible_with']; ?>" placeholder="Enter Compatibility">
                    </div>
                </div>

                <!-- Image Fields -->
                <div class="form-group">
                    <label for="images">Upload Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    <p class="mt-2">Current Images:</p>
                    <?php
                        $images = json_decode($product['images'], true);
                        if ($images && is_array($images)):
                            foreach ($images as $image):
                    ?>
                            <img src="<?php echo base_url('uploads/' . $image); ?>" alt="Product Image" class="img-thumbnail" style="max-width: 100px; margin-right: 10px;">
                    <?php
                            endforeach;
                        else:
                            echo "No images available or invalid JSON.";
                        endif;
                    ?>

                </div>

                <button type="submit" class="btn btn-primary btn-block mt-4">Update Product</button>
                <?php echo form_close(); ?>
                           <?php else: ?>
                <p>Product data is missing or invalid.</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>