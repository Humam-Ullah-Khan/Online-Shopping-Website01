<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('sing-up/style.css')}}">
    <title>Sign-Up Page</title>
</head>

<body>

    <div class="container-fluid p-0 overflow-hidden">
        <div class="container my-4">
            <div class="row p-1">
                <div class="col-md-6 text-center d-none d-md-block">
                    <img src="{{asset('sing-in/images/images.jpg')}}" alt="Rectangle" width="85%" height="95%">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-4">FASCO</h2>

                    <h6>Sign up to FASCO</h6>
                    <div class="d-flex mt-3">
                        <!-- /* From Uiverse.io by LightAndy1 */ -->
                        <button class="signup">
                            <img src="{{asset('sing-up/images/Google_icon.png')}}" alt="Google_icon">
                            Sign up with Google
                        </button>
                        <button class="signup mx-3">
                            <img src="{{asset('sing-up/images/Email_icon.png')}}" alt="Email_icon">
                            Sign up with Email
                        </button>
                    </div>
                    <div class="d-flex mt-4">
                        <!-- /* From Uiverse.io by liyaxu123 */ -->
                        <div class="form-control">
                            <input type="value" required="" placeholder="firstName">
                            <label>
                                <span style="transition-delay:0ms">F</span>
                                <span style="transition-delay:50ms">i</span>
                                <span style="transition-delay:100ms">r</span>
                                <span style="transition-delay:150ms">s</span>
                                <span style="transition-delay:200ms">t</span>
                                <span style="transition-delay:250ms">N</span>
                                <span style="transition-delay:300ms">a</span>
                                <span style="transition-delay:350ms">m</span>
                                <span style="transition-delay:550ms">e</span>
                            </label>
                        </div>
                        <div class="form-control">
                            <input type="value" required="" placeholder="lastName">
                            <label>
                                <span style="transition-delay:0ms">L</span>
                                <span style="transition-delay:50ms">a</span>
                                <span style="transition-delay:100ms">s</span>
                                <span style="transition-delay:100ms">t</span>
                                <span style="transition-delay:150ms">N</span>
                                <span style="transition-delay:200ms">a</span>
                                <span style="transition-delay:250ms">m</span>
                                <span style="transition-delay:350ms">e</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <!-- /* From Uiverse.io by liyaxu123 */ -->
                        <div class="form-control">
                            <input type="email" required="" placeholder="example@gmail.com">
                            <label>
                                <span style="transition-delay:0ms">E</span>
                                <span style="transition-delay:50ms">m</span>
                                <span style="transition-delay:100ms">a</span>
                                <span style="transition-delay:150ms">i</span>
                                <span style="transition-delay:350ms">l</span>
                            </label>
                        </div>
                        <div class="form-control">
                            <input type="number" required="" placeholder="phone-number">
                            <label>
                                <span style="transition-delay:0ms">P</span>
                                <span style="transition-delay:50ms">h</span>
                                <span style="transition-delay:100ms">o</span>
                                <span style="transition-delay:100ms">n</span>
                                <span style="transition-delay:150ms">e</span>
                                <span style="transition-delay:200ms">N</span>
                                <span style="transition-delay:250ms">u</span>
                                <span style="transition-delay:300ms">m</span>
                                <span style="transition-delay:400ms">b</span>
                                <span style="transition-delay:450ms">e</span>
                                <span style="transition-delay:550ms">r</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <!-- /* From Uiverse.io by liyaxu123 */ -->
                        <div class="form-control">
                            <input type="password" required="" placeholder="password">
                            <label>
                                <span style="transition-delay:0ms">p</span>
                                <span style="transition-delay:50ms">a</span>
                                <span style="transition-delay:100ms">a</span>
                                <span style="transition-delay:150ms">s</span>
                                <span style="transition-delay:200ms">s</span>
                                <span style="transition-delay:250ms">w</span>
                                <span style="transition-delay:300ms">o</span>
                                <span style="transition-delay:350ms">r</span>
                                <span style="transition-delay:450ms">d</span>
                            </label>
                        </div>
                        <div class="form-control">
                            <input type="password" required="" placeholder="confirm password">
                            <label>
                                <span style="transition-delay:0ms">C</span>
                                <span style="transition-delay:50ms">o</span>
                                <span style="transition-delay:100ms">n</span>
                                <span style="transition-delay:100ms">f</span>
                                <span style="transition-delay:150ms">i</span>
                                <span style="transition-delay:200ms">r</span>
                                <span style="transition-delay:250ms">m</span>
                                <span style="transition-delay:300ms">p</span>
                                <span style="transition-delay:400ms">a</span>
                                <span style="transition-delay:450ms">s</span>
                                <span style="transition-delay:500ms">s</span>
                                <span style="transition-delay:550ms">w</span>
                                <span style="transition-delay:600ms">o</span>
                                <span style="transition-delay:650ms">r</span>
                                <span style="transition-delay:850ms">d</span>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-dark w-100">Sign up</button>
                    <p>Already have an account? <span><a href="{{url('/sign-in')}}" class="text-decoration-none">Sign in</a></span></p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>