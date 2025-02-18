@extends('front.master')

@section('content')


		<!-- Trending Section -->
        <section class="trending-section" style="background-image: url('{{asset('theme/images/background/4.jpg')}}')">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="title">{{$title}}</div>
                    <h2>Our Customers' Top Picks</h2>
                </div>
                <div class="row clearfix">

                    @foreach ($Menu as $menu)
                    <!-- Menu Block Two -->
                    <div class="menu-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="menu-image">
                                    <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$menu->id}}"><img src="{{url('/')}}/uploads/manu/{{$menu->image}}" alt="" /></a>
                                </div>
                                <div class="price">KES{{$menu->price}}</div>
                                <h4><a href="{{url('/')}}/shopping-cart/add-to-cart/1">{{$menu->title}}</a></h4>
                                <div class="text">{{$menu->meta}}</div>
                                <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$menu->id}}" class="cart-btn theme-btn"><span class="fa fa-shopping-basket" aria-hidden="true"></span>  Add To Basket</a>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>


            </div>
        </section>
        <!-- End Trending Section -->





    {{-- @include('front.testimonials') --}}
    <section class="testimonial-section">
		<div class="auto-container">
        </div>
    </section>

    {{-- @include('front.blog') --}}

	<!-- Reservation Section -->
	<section class="reservation-section team-section" >
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Reservation</div>
							<h2>Book Your Slot</h2>
						</div>

						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="https://codexlayer.com/html/comida_punto/{{url('/')}}/menu">
								<div class="row clearfix">

									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" placeholder="Name" required="">
									</div>

									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Email" required="">
									</div>

									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="phone" placeholder="Phone" required="">
									</div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="seats" placeholder="Seats" required="">
                                    </div>
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="time" name="time" required="">
									</div>



									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="date" name="date" required="">
									</div>

									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="To Be Delivered *"></textarea>
									</div>

									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Book Now</span></button>
									</div>

								</div>
							</form>
						</div>

					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column" style="background-image: url('{{asset('theme/images/background/reserve-info.jpg')}}')">
						<!-- Sec Title -->
						<div class="sec-title light centered">
							<div class="title">Reservations</div>
							<h2>Book Your Slot</h2>
						</div>
						<ul class="table-list">
							<li>Mon - Fri<span>07:00AM - 9:00PM</span></li>
							{{-- <li>Sat<span>09:00AM - 7:00pm</span></li> --}}
							<li>Public Holidays<span>Closed</span></li>
							<li>Sat - Sun<span>09:00AM - 7:00pm</span></li>
						</ul>
						<div class="btn-box text-center">
							<a class="phone" href="tel:+254 072 301 4032">+254 072 301 4032</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Reservation Section -->

@include('front.instagram')
@endsection
