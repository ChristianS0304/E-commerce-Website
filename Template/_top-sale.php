<!-- Start Top Sale Carousel -->

<?php

    $product_shuffle = $product->getData();

?>

<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-roboto font-size20">Top Sale</h4>    
        <hr>
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) { ?>
            <div class="item py-2">

                <div class="product font-montserrat">
                    <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown"?></h6>
                        <div class="rating text-warning font-size12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? "N/A"?></span>
                        </div>
                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <?php } //closing for each function ?>
        </div>
    </div>
</section>
<!-- End Top Sale Carousel -->