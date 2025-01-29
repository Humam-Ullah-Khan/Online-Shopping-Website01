@extends('layouts.master')
@section('mycontent')

<!-- Hero Section  -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Shopping Cart</h2>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quatity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">
                            <img src="{{asset('shoping-cart/image/product6.png')}}" alt="product6" width="120px">
                            <div class="mt-2">
                                <h4 class="fs-6">Mini dress with ruffled straps</h4>
                                <p>Color : Red</p>
                                <a href="#">Remove</a>
                            </div>
                        </td>

                        <td>
                            $14.90
                        </td>

                        <td>
                            <input type="number" value="1" class="form-control w-75">
                        </td>

                        <td>
                            $14.90
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-8">

        </div>
        <div class="col-md-4 text-center">
            <input type="checkbox" id="Check">
            <label class="mx-3" for="Check">For <b>$10.00</b> please wrap the product</label>
            <hr>
            <div class="d-flex justify-content-between">
                <b>Subtotal</b>
                <b>$100.00</b>
            </div>
            <a href="{{url('/checkout-page')}}" class="btn btn-dark my-1 w-100">Checkout</a>
            <a href="{{url('/shopping-cart')}}" class="text-dark">View Cart</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-md-3 mt-5">
            <img src="{{asset('shoping-cart/image/NewSleter_Img1.png')}}" alt="NewSleter_Img1" width="100%">
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
            <img src="{{asset('shoping-cart/image/NewSleter_Img2.png')}}" alt="Newsleter_Img2" width="100%">
        </div>
    </div>
</div>

@endsection