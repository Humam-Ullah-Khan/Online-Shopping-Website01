@extends('layouts.master')
@section('mycontent')

<!-- Hero Section  -->

<div class="container my-5">
    <div class="row">
        <!-- Product Image Gallery -->
        <div class="col-md-6">
            <img src="./images/product6.png" alt="Denim Jacket" class="img-fluid mb-3">
            <div class="d-flex flex-wrap">
                <img src="./images/product3.png" class="thumbnail-img" alt="Thumbnail 1">
                <img src="./images/product4.png" class="thumbnail-img" alt="Thumbnail 2">
                <img src="./images/product5.png" class="thumbnail-img" alt="Thumbnail 3">
                <img src="{{asset('product-detail/images/product8.png')}}" class="thumbnail-img" alt="Thumbnail 4">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2>Oversize T shirt</h2>
            <p><span class="text-warning fs-5">&starf; &starf; &starf; &starf; &starf;</span> (3 reviews)</p>
            <h4>$39.00 <del>$59.00</del> <span class="text-danger">SAVE 37%</span></h4>
            <p><small>24 people are viewing this right now</small></p>
            <div class="alert alert-danger">
                Hurry up! Sale ends in: <span class="sale-timer">00 : 05 : 59 : 47</span>
            </div>
            <p><strong>Only 9 item(s) left in stock!</strong></p>

            <!-- Size Selection -->
            <div class="mb-3">
                <strong>Size:</strong>
                <button class="btn btn-outline-secondary btn-size">M</button>
                <button class="btn btn-outline-secondary btn-size">L</button>
                <button class="btn btn-outline-secondary btn-size">XL</button>
                <button class="btn btn-outline-secondary btn-size">XXL</button>
            </div>

            <!-- Color Selection -->
            <div class="mb-3">
                <strong>Color:</strong>
                <button class="btn btn-outline-dark btn-color" style="background-color: #000;"></button>
                <button class="btn btn-outline-primary btn-color" style="background-color: #3498db;"></button>
                <button class="btn btn-outline-danger btn-color" style="background-color: #f39c12;"></button>
            </div>

            <!-- Quantity -->
            <div class="mb-3">
                <strong>Quantity:</strong>
                <div class="input-group quantity-control">
                    <button class="btn btn-outline-secondary">-</button>
                    <input type="text" value="1" class="form-control">
                    <button class="btn btn-outline-secondary">+</button>
                </div>
            </div>

            <!-- Add to Cart Button -->
            <button class="btn btn-outline-dark w-100 mb-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add to Cart</button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <p>Buy <b>$122.35</b> more and get <b>Free Shipping</b></p>
                    <div class="row">
                        <div class="col">
                            <img src="./images/product6.png" alt="Product" width="100%">
                        </div>
                        <div class="col">
                            <h4 class="fs-6">Oversize T shirt</h4>
                            <p class="text-muted">Color : Red</p>
                            <p class="fw-bold">$14.80</p>
                            <div class="input-group Cartquantity-control">
                                <button class="btn btn-outline-secondary">-</button>
                                <input type="text" value="1" class="form-control">
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="d-flex mt-5">
                            <input type="checkbox" id="Check">
                            <label class="mx-3" for="Check">For <b>$10.00</b> please wrap the product</label>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <b>Subtotal</b>
                            <b>$100.00</b>
                        </div>
                        <a href="{{url('/checkout-page')}}" class="btn btn-dark">Checkout</a>
                        <a href="{{url('/shopping-cart')}}" class="text-center text-dark">View Cart</a>
                    </div>
                </div>
            </div>

            <button class="btn btn-dark my-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Get
                Discount</button>
            <!-- CheckOut Model -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <form class="discountForm">

                                <span class="DiscountHeading">TAKE 10% OFF.</span>
                                <p class="DiscountSubheading">Here is your discount! The promo code will be sent
                                    to your email.</p>
                                <div class="inputContainer">
                                    <input placeholder="Enter your email" type="email" name="email" id="email-address">
                                    <button type="submit" class="submitButton">Get it!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Additional Options -->
            <div class="d-flex justify-content-between my-3">
                <a href="#" class="text-dark text-decoration-none"><b>&rlarr;</b> Compare</a>
                <a href="#" class="text-dark text-decoration-none"><b>&quest;</b> Ask a question</a>
                <a href="#" class="text-dark text-decoration-none"><b class="fs-5">&#10579;</b> Share</a>
            </div>

            <!-- Shipping Info -->
            <p><strong>Estimated Delivery:</strong> Jul 30 - Aug 03</p>
            <p><strong>Free Shipping & Returns:</strong> On all orders over $75</p>

            <!-- Secure Checkout -->
            <div class="secure-checkout mt-3">
                <img src="{{ asset('product-detail/images/checkOut Payment.png')}}" alt="secure-checkout" width="200px">
                <span class="ms-4"> Guarantee safe & secure checkout</span>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-5">
    <div class="row mt-5 pt-5">
        <div class="col-md-6 bg-secondary-subtle">
            <img src="./images/peacky_blinders.png" alt="peacky_blinders" width="100%">
        </div>

        <div class="col-md-6 bg-dark-subtle">
            <div class="text p-5">
                <p>Women Collection</p>
                <h1>Peaky Blinders</h1>
                <a href="#" class="text-decoration-none text-dark border-bottom border-dark border-2">DESCRIPTION</a>
                <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque
                    duis ultrices
                    sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Scelerisque duis.</p>

                <p>Size: <span class="bg-dark text-light rounded px-3">M</span></p>
                <h3>$100.00</h3>
                <button class="btn btn-dark px-4">Buy Now</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <img src="./images/features_logos.png" alt="features_logos" width="100%">
</div>


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="text-center">
                <h4>Follow Us On Instagram</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque <br>
                    duis ultrices sollicitudin
                    aliquam sem. Scelerisque duis ultrices sollicitudin </p>
            </div>
        </div>
        <div class="col-md-12 mt-5 p-0">
            <img src="./images/Follow_instagram.png" alt="Follow_instagram" width="100%">
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-md-3 mt-5">
            <img src="./images/NewSleter_Img1.png" alt="NewSleter_Img1" width="100%">
        </div>

        <div class="col-md-6 pt-5">
            <div class="card mt-5 border-0 shadow text-center">
                <div class="card-body">
                    <h4 class="card-title">Subscribe To Our Newsletter</h4>
                    <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Scelerisque
                        duis ultrices sollicitudin aliquam sem.</p>
                    <p class="card-text"><small class="text-body-secondary">michael@ymail.com</small></p>
                    <a href="{{url('/sign-in')}}" class="btn btn-dark px-3">Subscribe Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <img src="./images/Newsleter_Img2.png" alt="Newsleter_Img2" width="100%">
        </div>
    </div>
</div>

@endsection