<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('checkout/style.css')}}">
    <link rel="stylesheet" href="{{asset('shop-page/style.css')}}">
    <link rel="stylesheet" href="{{asset('product-detail/style.css')}}">
    <link rel="stylesheet" href="{{asset('shopping-cart/style.css')}}">
    <title>Home Page</title>
</head>

<body>

    <div class="container-fluid p-0 overflow-hidden">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <h2>FASCOM</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shop')}}">Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shop')}}">Deal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/error')}}">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/error')}}">Packages</a>
                        </li>
                    </ul>
                    <form class="d-flex align-items-center" role="button">
                        <!-- /* From Uiverse.io sign in */ -->
                        <div tabindex="0" class="signInButton">
                            <a href="{{url('/sign-in')}}" class="signInButtonText text-decoration-none">Sign
                                In</a>
                        </div>
                        <!-- /* From Uiverse.io sign up */  -->
                        <a class="btn-1" href="{{url('/sign-up')}}">
                            <div class="original">Signup</div>
                            <div class="letters">
                                <span>S</span>
                                <span>I</span>
                                <span>G</span>
                                <span>N</span>
                                <span>U</span>
                                <span>P</span>
                            </div>
                        </a>

                    </form>
                </div>
            </div>
        </nav>

        @yield('mycontent')

        <footer class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <h3>FASCO</h3>
                </div>

                <div class="col-md-6">
                    <ul class="navbar-nav d-flex flex-row ">
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">Support Center</a>
                        </li>
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">Invoicing</a></li>
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">Contract</a></li>
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">FAQs</a></li>
                        <li class="nav-item mx-1"><a href="#" class="text-decoration-none text-dark">Blog</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
