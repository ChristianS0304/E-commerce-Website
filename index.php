<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Owl Carousel CDN --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Start Header --> 
    <header id="header">
        <div class="strip d-flex justify-content-between align-items-center px-4 py-1 bg-light">
            <p class="font-roboto font-size12 text-black-50 m-0"> Lorem ipsum dolor sit amet consectet.</p>
            <div class="font-roboto font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark text-decoration">Login</a>
                <a href="#" class="px-3 border-right text-dark text-decoration">Wishlist</a>
            </div>
        </div>

         <!-- Bootstrap Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Ecommerce Shop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 font-roboto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">On Sale</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">New</a></li>
                      <li><a class="dropdown-item" href="#">Coming Soon</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Reviews</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Blog</a>
                  </li>
                </ul>
                <form action="#" class="font-size14 font-roboto">
                    <a href="#" class="py-2 rounded-pill color-primary-bg text-decoration">
                        <span class="font-size16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                    </a>
                </form>
              </div>
            </div>
          </nav>
          <!-- Bootstrap Nav Bar -->

    </header>
    <!-- End Header -->

    <!-- Start Main Content -->
    <main id="main-site">
        <!-- Start Owl Carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/Banner1.png" alt="image of banner with smart phone">
                </div>
                
                <div class="item">
                    <img src="./assets/Banner2.png" alt="image of banner with smart phone">
                </div>
                
                <div class="item">
                    <img src="./assets/Banner1.png" alt="image of banner with smart phone">
                </div>
             </div>
        </section>
        <!-- End Owl Carousel -->

        <!-- Start Top Sale Carousel -->
        <section id="top-sale">
        <div class="container py-5">
            <h4 class="font-roboto font-size20">Top Sale</h4>    
            <hr>
            <!-- Owl Carousel -->
            <div class="owl-carousel owl-theme">
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/1.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/2.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/3.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiamoi Redmi Note 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/4.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiamoi Redmi Note 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/5.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiamoi Redmi Note 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-montserrat">
                        <a href="#"><img src="./assets/products/6.png" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiamoi Redmi Note 5</h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End Top Sale Carousel -->

        <!-- Start Special Price Carousel -->
        <section id="special-price">
                <div class="container pb-5">
                    <h4 class="font-roboto font-size20">Special Price</h4>
                    <hr>
                    <div id="filters" class="button-group text-end font-size16">
                        <button class="btn is-checked" data-filter="*">All Brands</button>
                        <button class="btn" data-filter=".Apple">Apple</button>
                        <button class="btn" data-filter=".Samsung">Samsung</button>
                        <button class="btn" data-filter=".Redmi">Redmi</button>
                    </div>

                    <div class="grid">
                        <div class="grid-item Apple border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/13.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>iPhone 13 Pro</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Samsung border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/1.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Samsung Galaxy 5</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Redmi border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/2.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 3</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Redmi border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/3.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 3</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Redmi border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/6.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 4</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Samsung border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/8.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Samsung Galaxy A10</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Apple border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/14.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>iPhone 3</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Samsung border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/12.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Samsung Gaslaxy 7</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Samsung border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/11.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Samsung Galaxy 6</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item Apple border">
                            <div class="item py-2" style="width: 200px;">
                                <div class="product font-montserrat">
                                    <a href="#"><img src="./assets/products/15.png" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>iPhone 5</h6>
                                        <div class="rating text-warning font-size12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$299</span>
                                        </div>
                                        <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Special Price Carousel -->
        
        <!-- Start Banner Ads -->
        <section id="banner_ads">
        </section>
        <!-- End Banner Ads -->

        <!-- Start New Phones -->
        <section id="new-phones">
            <div class="container">
                <h4 class="font-roboto font-size20">New Phones</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                    <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/1.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/2.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/3.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Xiamoi Redmi Note 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$299</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/4.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Xiamoi Redmi Note 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$299</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/5.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Xiamoi Redmi Note 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$299</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-montserrat">
                            <a href="#"><img src="./assets/products/6.png" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Xiamoi Redmi Note 5</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$299</span>
                                </div>
                                <button type="button" class="btn btn-warning font-size12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End New Phones Carousel -->

        <!-- Start Blog Carousel -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-roboto font-size20">Latest Blogs</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-montserrat mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size16">Upcoming Devices</h5>
                            <img class="card-img-top" alt="card image" src="./assets/blogs/blog1.jpg">
                            <p class="card-text font-size14 text-black-50 py-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi nulla repudiandae dolore expedita aliquam? Unde perferendis molestiae enim libero quae.</p>
                            <a href="#" class="color-second text-left">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-montserrat mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size16">What Phone Should I Buy?</h5>
                            <img class="card-img-top" alt="card image" src="./assets/blogs/blog2.jpg">
                            <p class="card-text font-size14 text-black-50 py-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi nulla repudiandae dolore expedita aliquam? Unde perferendis molestiae enim libero quae.</p>
                            <a href="#" class="color-second text-left">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-montserrat mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size16">New Phones</h5>
                            <img class="card-img-top" alt="card image" src="./assets/blogs/blog3.jpg">
                            <p class="card-text font-size14 text-black-50 py-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi nulla repudiandae dolore expedita aliquam? Unde perferendis molestiae enim libero quae.</p>
                            <a href="#" class="color-second text-left" style="max-width: 50%;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Carousel -->

    </main> 
    <!-- End Main Content -->
    
    <!-- Start Footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-roboto font-size20">Mobile Shop</h4>
                    <p class="font-size14 font-montserrat text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero magnam mollitia incidunt veritatis provident!</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-roboto font-size20">Newsletter</h4>
                    <form class="d-flex gap-1">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email: *">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-roboto font-size20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">About Us</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Delivery Info</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Returns</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-roboto font-size20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">My Account</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Order History</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Wishlist</a>
                        <a href="" class="font-roboto font-size14 text-white-50 pb-1 text-decoration">Newsletter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-white py-2 bg-dark text-center">
            <p class="font-montserrat font-size12">&copy; Copyright 2022 | Design By Christian Silva</p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- ISOT Plugin JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Custom JS -->
    <script src="./index.js"></script>
</body>
</html>