@extends('layouts.master')
		
	
@section('content')
	<div class="colorlib-loader"></div>

	<div id="page">
		@include('layouts.header')

		 <div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
								<li><a data-toggle="tab" href="#hotel_Apartments"><i class="flaticon-resort"></i> Hotel Apartments</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
								<li><a data-toggle="tab" href="#car_ariport"><i class="flaticon-car"></i> Car ariport</a></li>
								{{-- <li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li> --}}
							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form action="{{url('/search-flight')}}" method="post" class="colorlib-form">
								@csrf
								<div class="row">
								<div class="col-md-3">
									<div class="form-group">
									<label for="date">Where:</label>
									<div class="form-field">
									<input type="text" id="location" class="form-control" placeholder="Search Location">
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<div class="form-group">
									<label for="date">Check-in:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<div class="form-group">
									<label for="date">Check-out:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="guests">Guest</label>
									<div class="form-field">
									<i class="icon icon-arrow-down3"></i>
									<select name="people" id="people" class="form-control">
										<option value="#">1</option>
										<option value="#">2</option>
										<option value="#">3</option>
										<option value="#">4</option>
										<option value="#">5+</option>
									</select>
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
								</div>
							</div>
							</form>
						</div>
						<div id="hotel" class="tab-pane fade">
							<form action="{{url('/search-hotel')}}"  method="post" class="colorlib-form">
								@csrf
								<div class="row">
								<div class="col-md-2">
									<div class="booknow">
										<h2>Book Now</h2>
										<span>Best Price Online</span>
									</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Check-in:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Check-out:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<div class="form-group">
									<label for="guests">Guest</label>
									<div class="form-field">
									<i class="icon icon-arrow-down3"></i>
									<select name="people" id="people" class="form-control">
										<option value="#">1</option>
										<option value="#">2</option>
										<option value="#">3</option>
										<option value="#">4</option>
										<option value="#">5+</option>
									</select>
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
								</div>
							</div>
							</form>
						</div>
						<div id="hotel_Apartments" class="tab-pane fade">
							<form action="{{url('/search-hotel-apartments')}}"  method="post" class="colorlib-form">
								@csrf
								<div class="row">
									<div class="col-md-2">
										<div class="booknow">
											<h2>Book Now </h2>
											
											<span>Hotel Apartments</span>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Where:</label>
											<div class="form-field">
												<input type="text" id="location" class="form-control" placeholder="Search Location">
											</div>
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Check-in:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="date" class="form-control date" placeholder="Check-in date">
											</div>
										</div>
									</div>
									<div class="col-md-2">
									<div class="form-group">
										<label for="date">Check-out:</label>
										<div class="form-field">
											<i class="icon icon-calendar2"></i>
											<input type="text" id="date" class="form-control date" placeholder="Check-out date">
										</div>
									</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="guests">Guest</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select name="people" id="people" class="form-control">
													<option value="#">1</option>
													<option value="#">2</option>
													<option value="#">3</option>
													<option value="#">4</option>
													<option value="#">5+</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
									<input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
									</div>
								</div>
							</form>
						</div>
						<div id="car" class="tab-pane fade">
							<form method="post" class="colorlib-form">
								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									<label for="date">Where:</label>
									<div class="form-field">
									<input type="text" id="location" class="form-control" placeholder="Search Location">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Start Date:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Return Date:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
								</div>
							</div>
							</form>
						</div>
						<div id="car_ariport" class="tab-pane fade">
							<form method="post" class="colorlib-form">
								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									<label for="date">Where:</label>
									<div class="form-field">
									<input type="text" id="location" class="form-control" placeholder="Search Location">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Start Date:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Return Date:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
								</div>
							</div>
							</form>
						</div>
						<div id="cruises" class="tab-pane fade">
							<form method="post" class="colorlib-form">
								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									<label for="date">Where:</label>
									<div class="form-field">
									<input type="text" id="location" class="form-control" placeholder="Search Location">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="date">Start Date:</label>
									<div class="form-field">
									<i class="icon icon-calendar2"></i>
									<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label for="guests">Categories</label>
									<div class="form-field">
									<i class="icon icon-arrow-down3"></i>
									<select name="category" id="category" class="form-control">
										<option value="#">Suite</option>
										<option value="#">Super Deluxe</option>
										<option value="#">Balcony</option>
										<option value="#">Economy</option>
										<option value="#">Luxury</option>
									</select>
									</div>
								</div>
								</div>
								<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
								</div>
							</div>
							</form>
						</div>
					</div>
					</div>
				</div>
		</div>
		<br>



		{{--<div id="colorlib-hotel">
			<div class="container">
				<!-- <div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recommended Hotels</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url({{asset('images/hotel-1.jpg')}});">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url({{asset('images/hotel-2.jpg')}});">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url({{asset('images/hotel-3.jpg')}});">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url({{asset('images/hotel-4.jpg')}});">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
@endsection	
		

		


	



