@extends('layouts.master')

@section('mycontent')
        <!-- Hero Section  -->

        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>FASCO Demo Checkout</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid border-bottom border-top">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6 px-5">

                        <!-- Contact -->
                        <div class="contactSec">
                            <div class="d-flex align-items-center">
                                <h2 class="me-4">Contact</h2>
                                <p class="ms-auto ms-3">Have an Account? <span><a href="{{url('/sign-up')}}"> Create Account</a></span>
                                </p>
                            </div>
                            <input class="form-control border-dark rounded-0" type="email" placeholder="Email Address">
                        </div>

                        <!-- Delivery -->
                        <div class="deliverySec my-5">
                            <div class="d-flex align-items-center">
                                <h2 class="me-4">Delivery</h2>
                            </div>
                            <select class="form-select border-dark rounded-0" aria-label="Default select example">
                                <option selected disabled>Country / Region</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="d-flex my-3">
                                <input class="form-control border-dark rounded-0 me-2" type="text"
                                    placeholder="First Name">
                                <input class="form-control border-dark rounded-0 ms-2" type="text"
                                    placeholder="Last Name">
                            </div>
                            <input class="form-control border-dark rounded-0" type="text" placeholder="Address">
                            <div class="d-flex my-3">
                                <input class="form-control border-dark rounded-0 me-2" type="text" placeholder="City">
                                <input class="form-control border-dark rounded-0 ms-2" type="number"
                                    placeholder="Postal Code">
                            </div>
                            <div class="d-flex align-items-center">
                                <!-- <input type="checkbox" class="" id="forFuture"> -->
                                <input class="form-check-input me-2 mt-0 border-dark" type="checkbox" id="forFuture">
                                <label for="forFuture" class="text-muted">Save This For Future</label>
                            </div>
                        </div>

                        <!-- Payment Sec  -->
                        <div class="paymentSec">
                            <h2>Payment</h2>
                            <select class="form-select border-dark rounded-0" aria-label="Default select example">
                                <option selected disabled>Credit Card</option>
                                <option value="1">PayPal</option>
                                <option value="2">Pay</option>
                                <option value="3">VISA</option>
                            </select>
                            <input class="form-control border-dark rounded-0 mt-3" type="number"
                                placeholder="Card Number">
                            <div class="d-flex my-3">
                                <input class="form-control border-dark rounded-0 me-2" type="text"
                                    placeholder="Expiration Date ">
                                <input class="form-control border-dark rounded-0 ms-2" type="text"
                                    placeholder="Security Code">
                            </div>
                            <input class="form-control border-dark rounded-0 mt-3" type="number"
                                placeholder="Card Holder Name">
                            <div class="d-flex mt-3 align-items-center">
                                <!-- <input type="checkbox" class="" id="forFuture"> -->
                                <input class="form-check-input me-2 mt-0 border-dark" type="checkbox" id="forFuture">
                                <label for="forFuture" class="text-muted">Save This Info for future</label>
                            </div>
                            <!-- /* From Uiverse.io by Creatlydev */ -->
                            <button class="UiBtn">
                                Pay
                                <svg viewBox="0 0 576 512" class="svgIcon">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class=" mt-3">
                            <small>Copyright © 2024 FASCO . All Rights Reseved.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="./images/product6.png" alt="product6">
                            <h4 class="mx-4 mt-5">Mini dress with ruffled straps</h4>
                        </div>
                        <div class="d-flex">
                            <p class="text-danger">Red</p>
                            <p class="ms-auto">$100.0</p>
                        </div>
                        <input class="form-control" type="text" placeholder="Discount Code">
                        <button class="btn btn-dark mt-3">Apply</button>
                        <div class="d-flex mt-2">
                            <p>Subtotal</p>
                            <p class="ms-auto">$100.0</p>
                        </div>
                        <div class="d-flex">
                            <p>Shipping</p>
                            <p class="ms-auto">$40.0</p>
                        </div>
                        <div class="d-flex">
                            <p>Total</p>
                            <p class="ms-auto">$140.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Second Last -->
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
                    <img src="{{asset('checkout/images/Newsleter_Img2.png')}}" alt="Newsleter_Img2" width="100%">
                </div>
            </div>
        </div>

        <hr>

   @endsection
