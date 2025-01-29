@extends('layouts.master')
@section('mycontent')



<!-- Hero Section  -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>FASHION</h2>
        </div>
        <!-- Filter Sidebar -->
        <aside class="col-md-3 filter-section">
            <h5>Filters</h5>
            <h6>Size</h6>
            <div class="mb-3">
                <button class="btn btn-outline-secondary btn">S</button>
                <button class="btn btn-outline-secondary btn">M</button>
                <button class="btn btn-outline-secondary btn">L</button>
                <button class="btn btn-outline-secondary btn">XL</button>
            </div>

            <h6>Colors</h6>
            <div class="mb-3">
                <span class="badge rounded-circle bg-primary">&nbsp;</span>
                <span class="badge rounded-circle bg-secondary">&nbsp;</span>
                <span class="badge rounded-circle bg-success">&nbsp;</span>
                <span class="badge rounded-circle bg-danger">&nbsp;</span>
                <span class="badge rounded-circle bg-warning">&nbsp;</span>
            </div>

            <h6>Prices</h6>
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none text-dark">$0-$50</a></li>
                <li><a href="#" class="text-decoration-none text-dark">$50-$100</a></li>
                <li><a href="#" class="text-decoration-none text-dark">$100-$150</a></li>
            </ul>

            <h5>Brands</h5>
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none text-dark">Minimog</a></li>
                <li><a href="#" class="text-decoration-none text-dark">Vagabond</a></li>
                <li><a href="#" class="text-decoration-none text-dark">Abby</a></li>
                <li><a href="#" class="text-decoration-none text-dark">Learts</a></li>
                <li><a href="#" class="text-decoration-none text-dark">Brook</a></li>
                <li><a href="#" class="text-decoration-none text-dark">Retrolie</a></li>
            </ul>

            <h6>Tags</h6>
            <div class="d-flex flex-wrap gap-1">
                <span class="badge bg-secondary-subtle text-dark">Fashion</span>
                <span class="badge bg-secondary-subtle text-dark">Hats</span>
                <span class="badge bg-secondary-subtle text-dark">Denim</span>
                <span class="badge bg-secondary-subtle text-dark">Sendal</span>
                <span class="badge bg-secondary-subtle text-dark">Belts</span>
                <span class="badge bg-secondary-subtle text-dark">Bags</span>
                <span class="badge bg-secondary-subtle text-dark">Denim</span>
                <span class="badge bg-secondary-subtle text-dark">Minimog</span>
                <span class="badge bg-secondary-subtle text-dark">Beachwear</span>
                <span class="badge bg-secondary-subtle text-dark">Snackers</span>
            </div>
        </aside>

        <!-- Product Grid -->
        <section class="col-md-9 py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Product Card Example -->
                <!-- Product 1 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product1.png" alt="Product 1">
                        <div class="card-body">
                            <p class="product-name">Rounded Red Hat</p>
                            <small class="text-muted">$8.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product2.png" alt="Product 2">
                        <div class="card-body text-center">
                            <p class="product-name">Linen-blend Shirt</p>
                            <small class="text-muted">$17.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product3.png" alt="Product 3">
                        <div class="card-body text-center">
                            <p class="product-name">Long-sleeve Coat</p>
                            <small class="text-muted">$10.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product4.png" alt="Product 4">
                        <div class="card-body text-center">
                            <p class="product-name">Boxy Denim Hat</p>
                            <small class="text-muted">$31.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product5.png" alt="Product 5">
                        <div class="card-body text-center">
                            <p class="product-name">Linen Plain Top</p>
                            <small class="text-muted">$10.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col">
                    <div class="card product-card">
                        <img src="./images/product6.png" alt="Product 6">
                        <div class="card-body text-center">
                            <p class="product-name">Oversized T-shirt</p>
                            <small class="text-muted">$16.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col">
                    <div class="card product-card">
                        <img class="rounded-3" src="{{asset('shop-page/images/product7.png')}}" alt="Product 7">
                        <div class="card-body text-center">
                            <p class="product-name">Polarised Sunglasses</p>
                            <small class="text-muted">$80.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col">
                    <div class="card product-card">
                        <img class="rounded-3" src="{{asset('shop-page/images/product8.png')}}" alt="Product 8">
                        <div class="card-body text-center">
                            <p class="product-name">Rockstar Jacket</p>
                            <small class="text-muted">$27.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col">
                    <div class="card product-card">
                        <img class="rounded-3" src="{{asset('shop-page/images/product9.png')}}" alt="Product 9">
                        <div class="card-body text-center">
                            <p class="product-name">Dotted Black Dress</p>
                            <small class="text-muted">$108.00</small>
                            <a class="btn btn-dark ms-5" href="{{url('/product-detail-page')}}">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav class="mt-4">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </section>
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