@include('include.css-url')
<style>
    .slick-slide img {
        display: initial !important;
    }

    .field-icon {
        float: right;
        margin-top: -39px;
        position: relative;
        z-index: 2;
        margin-right: 10px;
        font-size: 27px;
    }

    .logo-left {
        display: none;
    }

    @media only screen and (max-width: 800px) {
        .bg-left {
            display: none;
        }

        .logo-left {
            display: block;
        }
    }
</style>
<section>
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-md-6">
                <div class="vh-100 bg-light bg-left">
                    <div class="logo">
                        <img src="{{ asset('assets/images/logo-banking.png') }}" alt="" class="img-fluid w-50">
                    </div>
                    <div class="slider">
                        <div class="card text-center bg-light">
                            <img src="{{ asset('assets/images/1.png') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Trust & Transparency</h5>
                                <p class="card-text">Our customer support team always has your back.
                                    Transparent prices and timely updates so that you are never
                                    in the dark!</p>
                            </div>
                        </div>
                        <div class="card text-center bg-light">
                            <img src="{{ asset('assets/images/2.png') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Making Legal Simple</h5>
                                <p class="card-text">Our customer support team always has your back.
                                    Transparent prices and timely updates so that you are never
                                    in the dark!</p>
                            </div>
                        </div>
                        <div class="card text-center bg-light">
                            <img src="{{ asset('assets/images/3.png') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Smart Dashboard</h5>
                                <p class="card-text">Everything you need in one place! Be it tracking your
                                    service, buying new ones, making payments or getting
                                    customer support, do it all through the smart dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="logo-left text-center">
                    <img src="{{ asset('assets/images/logo-banking.png') }}" alt="" class="img-fluid w-50">
                </div>
                <div class="text-center p-5">
                    <h3>Create an account</h3>
                    <p>Already have an account? <a href="{{ url('/') }}"> Login <i class="fa fa-arrow-right mx-2"></i></a>
                    </p>
                </div>
                <form class="login-form row" method="POST" action="{{route('client-register')}}">
                    @csrf
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email ID"
                            required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input id="password-field" type="password" class="form-control" name="password"
                            placeholder="Enter passowrd" required>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="col-md-12 mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Sign up <i
                                class="fa fa-arrow-right mx-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




@include('include.js-url')
