<?php 
    require_once 'core/init.php';
    include 'includes/head.php'; 
    include 'includes/navigation.php'; 
    include 'includes/headerfull.php';
    include 'includes/leftbar.php';
    
    //if featured = 1, then its a featured product
    $sql = "SELECT * FROM products WHERE featured = 1";
    // this calls a method of the $db object
    $featured = $db->query($sql);//there are multiple results from this query
    
    
?>

        <!--main content-->
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Featured Products</h2>
                <!--if the product is featured display here and carry the associated attributes-->
                <?php while($product = mysqli_fetch_assoc($featured)) : ?>
                    <div class="col-md-3 text-center">
                        <h4><?= $product['title']; ?></h4>
                        <h4>Levis Jeans</h4>
                        <img src="<?= $product['image']; ?>" alt="Levis Jeans" class="img-thumb" />
                        <p class="list-price text-danger">List Price <s><?= $product['list_price']; ?></s></p>
                        <p class="price">Our Price: $<?= $product['price']; ?></p>
                        <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)" >Details</button>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        

<?php
    include 'includes/rightbar.php';
    include 'includes/footer.php';


?>