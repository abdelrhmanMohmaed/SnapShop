@extends('website.layouts.main')

@section('title', 'Register')

@section('content')
    <style>
        button i {
            color: #7fad39;
        }
    </style>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/website/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('website.home.index') }}">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container d-flex justify-content-center">
            <div class="w-75">
                <div class="checkout__form">
                    <h4>Register</h4>

                    <form>
                        <div class="text-center mb-3">
                            <p>Sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-linkedin"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-pinterest-p"></i>
                            </button>
                        </div>

                        <p class="text-center">or:</p>

                        <!-- Name input --> 
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text">
                            </div> 

                        <!-- Username input --> 
                            <div class="checkout__input">
                                <p>Username<span>*</span></p>
                                <input type="text">
                            </div> 

                        <!-- Email input --> 
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text">
                            </div> 

                        <!-- Password input --> 
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="text">
                            </div> 

                        <!-- Repeat Password input --> 
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div>
                            
                        <!-- Checkbox -->
                        <div class="row form-check mb-4">
                            <div class="col-md-1">
                                <div class="ms-3">
                                    <input class="form-check-input  " type="checkbox" value="" id="registerCheck"
                                        checked aria-describedby="registerCheckHelpText" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-check-label" for="registerCheck">
                                        I have read and agree to the terms
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="button" class="btn btn-block mb-4 site-btn">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
