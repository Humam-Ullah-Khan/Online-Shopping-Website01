<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('sing-in/style.css')}}">
    <title>Sign-In Page</title>
</head>

<body>

    <div class="container-fluid p-0 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center d-none d-md-block">
                    <img class="mt-3" src="{{asset('sing-in/images/images.jpg')}}" alt="Rectangle" width="100%">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-4">FASCO</h2>

                    <h6>Sign in to FASCO</h6>
                    <div class="d-flex mt-5">
                        <!-- /* From Uiverse.io by LightAndy1 */ -->
                        <button class="signin">
                            <img src="{{asset('sing-in/images/Google_icon.png')}}" alt="Google_icon">
                            Sign in with Google
                        </button>
                        <button class="signin mx-3">
                            <img src="{{asset('sing-in/images/Email_icon.png')}}" alt="Google_icon">
                            Sign in with Email
                        </button>
                    </div>
                    <div class="text-center my-4">
                        <b class="text-muted fs-5"> - OR - </b>
                    </div>
                    <div class="">
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
                            <input type="password" required="" placeholder="Password">
                            <label>
                                <span style="transition-delay:0ms">P</span>
                                <span style="transition-delay:50ms">a</span>
                                <span style="transition-delay:100ms">s</span>
                                <span style="transition-delay:100ms">s</span>
                                <span style="transition-delay:150ms">w</span>
                                <span style="transition-delay:200ms">o</span>
                                <span style="transition-delay:250ms">r</span>
                                <span style="transition-delay:350ms">d</span>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-dark w-100">Sign in</button>
                    <a href="{{url('/sign-up')}}" class="btn btn-outline-primary my-2 w-100">Register Now</a>
                    <a href="{{url('/error')}}" class="text-decoration-none">Forget Password?</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>