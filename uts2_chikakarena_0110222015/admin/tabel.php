<?php
include_once "../database.php"
?>
<table id="datatablesSimple" border="1" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Picture</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 1;
                                    $product = mysqli_query($conn, "SELECT product.*, product_type.name AS category_name FROM product JOIN product_type ON product.product_type_id = product_type.id ORDER BY product_id ASC");
                                    if (mysqli_num_rows($product)) {
                                        while ($row = mysqli_fetch_array($product)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['category_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo 'Rp.' . number_format($row['sell_price']); ?>
                                                </td>
                                                <td>
                                                    <a href="../assets/images/produk/<?php echo $row['produk_image']; ?>"
                                                        target="_blank">
                                                        <img src="../assets/images/produk/<?php echo $row['produk_image']; ?>"
                                                            width="40px" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo $row['stock']; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning"
                                                        href="edit_produk.php?id=<?php echo $row['product_id']; ?>">Edit</a>
                                                    |
                                                    <a class="btn btn-danger"
                                                        href="dellete_produk.php?id=<?php echo $row['product_id']; ?>"
                                                        onclick="return confirm('You sure want to delete this product?')">Delete</a>
                                                </td>
                                            </tr>

                                        <?php }
                                    } ?>

                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="add_produk.php">Add Product</a>
