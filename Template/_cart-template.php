<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-roboto font-size20">Shopping Cart</h5>
    </div>

    <!-- Start Shopping Cart Items-->
    <div class="row">
        <div class="col-9">
            <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                    <img src="./assets/products/1.png" style="width:120px;" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h5 class="font-roboto font-size20 mb-0">Samsung Galaxy S5</h5>
                    <small>by Samsung</small>

                    <!-- Product Rating -->
                    <div class="d-flex">
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-robot font-size14 text-decoration">1,201 Ratings</a>
                    </div>
                    <!-- Product Rating -->

                    <!-- Product Quantity -->
                    <div class="qty d-flex pt-2">
                        <div class="d-flex font-roboto w-25">
                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                            <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                        </div>
                        <button type="submit" class="btn font-roboto text-danger px-3 border-end">Delete</button>
                        <button type="submit" class="btn font-roboto text-danger px-3">Save for Later</button>
                    </div>
                    <!-- Product Quantity -->
                </div>

                <div class="col-sm-2 text-right">
                    <div class="font-size20 font-roboto">
                        $<span class="product-price">152</span>
                    </div>
                </div>
            </div>
            <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                    <img src="./assets/products/1.png" style="width: 120px;" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h5 class="font-roboto font-size20 mb-0">Samsung Galaxy S5</h5>
                    <small>by Samsung</small>

                    <!-- Product Rating -->
                    <div class="d-flex">
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-robot font-size14 text-decoration">1,201 Ratings</a>
                    </div>
                    <!-- Product Rating -->

                    <!-- Product Quantity -->
                    <div class="qty d-flex pt-2">
                        <div class="d-flex font-roboto w-25">
                            <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                            <input type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                            <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                        </div>
                        <button type="submit" class="btn font-roboto text-danger px-3 border-end">Delete</button>
                        <button type="submit" class="btn font-roboto text-danger px-3">Save for Later</button>
                    </div>
                    <!-- Product Quantity -->
                </div>

                <div class="col-sm-2 text-right">
                    <div class="font-size20 font-roboto">
                        $<span class="product-price">152</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub-total Section -->
        <div class="col-3">
            <div class="sub-total border text-center mx-2">
                <h6 class="font-montserrat text-success font-size12 py-3"><i class="fas fa-check"></i>&nbsp;Your order is eligible for FREE Delivery</h6>        
                <div class="border-top py-4">
                    <h5 class="font-roboto font-size16">Subtotal (2 items):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span></h5>
                    <button type="submit" class="btn btn-warning mt-2">Proceed to Buy</button>
                </div>
            </div>
        </div>
        <!-- Sub-total Section -->
        
    </div>
    <!-- End Shopping Cart Items-->
</section>