@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title" style="background-image: url('{{asset('theme/images/background/10.jpg')}}')">
    	<div class="auto-container">
			<h1>Food Basket</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li><a href="{{url('/')}}/menu">Menu</a></li>
				<li>Food Basket</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

<!-- Checkout Page -->
<div class="checkout-page">
    <div class="auto-container">

        <!--Default Links-->
        <ul class="default-links">
            <li>Returning customer? <a href="account.html" data-toggle="modal" data-target="#schedule-box">Click here to login</a></li>
        </ul>

        <!--Billing Details-->
        <div class="billing-details">
            <div class="shop-form">
                <form method="post" action="https://codexlayer.com/html/comida_punto/checkout.html">
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12">

                            <div class="sec-title"><h2>Billing Details</h2></div>
                            <div class="billing-inner">
                                <div class="row clearfix">

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">First name <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="First Name">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Last name <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="Last Name">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Company name </div>
                                        <input type="text" name="field-name" value="" placeholder="Company name">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address <sup>*</sup></div>
                                        <input type="email" name="field-name" value="" placeholder="Street Address">
                                        <input class="address-two" type="email" name="field-name" value="" placeholder="Apartment, Suit unit etc (optional)">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Town / City <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="Town /City">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">State / Country <sup>*</sup> </div>
                                        <select name="country">
                                            <option>Select an option</option>
                                            <option>Pakistan</option>
                                            <option>USA</option>
                                            <option>CANADA</option>
                                            <option>INDIA</option>
                                        </select>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Postcode / Zip <sup>*</sup></div>
                                        <input type="text" name="code" value="" placeholder="Postcode / Zip">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email Address <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="Email Address">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Phone <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="Select an option">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Creat an account?</label></div>
                                    </div>

                                    <div class="form-group sec-title col-md-12 col-xs-12"><h2>Ship to Different Address</h2></div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Order Notes</div>
                                        <textarea placeholder="Note about your order. e.g. special note for delivery"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="sec-title"><h2>Your Order</h2></div>
                            <div class="shop-order-box">
                                <ul class="order-list">
                                    <li>Prodcut<span>TOTAL</span></li>
                                    <li>Pizza<span>$65.00</span></li>
                                    <li>Subtotal<span class="dark">$65.00</span></li>
                                    <li>Shipping And Handling<span>Free Shipping</span></li>
                                    <li class="total">TOTAL<span class="dark">$65.00</span></li>
                                </ul>


                                <!--Place Order-->
                                <div class="place-order">
                                    <!--Payment Options-->
                                    <div class="payment-options">
                                        <ul>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                                    <label for="payment-2"><strong>Direct Bank Transfer</strong>
                                                        <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-1">
                                                    <label for="payment-1"><strong>Cheque Payment</strong>
                                                        <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-3">
                                                    <label for="payment-3"><strong>Paypal</strong><img src="images/resource/paypall.jpg" alt="" /> <a href="#" class="what-paypall">What is PayPal?</a></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <button type="button" class="theme-btn btn-style-three"><span class="txt">Place Order</span></button>

                                </div>
                                <!--End Place Order-->

                            </div>


                        </div>
                    </div>
                </form>

            </div>

        </div><!--End Billing Details-->
    </div>
</div>

@include('front.instagram')
@endsection
