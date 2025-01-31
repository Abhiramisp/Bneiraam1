<div id="layoutSidenav_content">
    <main>
        <div class="container py-5">
            <h2 class="text-center">All Products</h2>
            <div class="row py-5 align-items-center justify-content-center">
                <div class="col-lg-10 mx-auto">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped stripe table-bordered order-column ">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($products)): ?>
                                            <?php foreach ($products as $product): ?>
                                                <tr>
                                                    <td><?php echo $product['id']; ?></td>
                                                    <td><?php echo $product['category']; ?></td>
                                                    <td><?php echo $product['brand']; ?></td>
                                                    <td><?php echo $product['model']; ?></td>
                                                    <td><?php echo $product['price']; ?></td>
                                                    <td><?php echo $product['stock']; ?></td>
                                                    <td>
                                                        <!-- Add action buttons like edit or delete -->
                                                        <a href="<?php echo base_url('index.php/Admin_add_Product/edit/' . $product['id']); ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <a href="<?php echo base_url('index.php/Admin_add_Product/delete/' . $product['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="7" class="text-center">No products found</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>