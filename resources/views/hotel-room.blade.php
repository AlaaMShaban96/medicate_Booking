@extends('layouts.master')
		

@section('head')
<style>
.col-md-6 {
    width: 50%;
    margin-top: 1%;
}
</style>
@endsection
@section('content')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('images/cover-img-4.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class=" x col-md-12 col-md-offset-0 heading2 animate-box">
										
										<a href="#" class="btn btn-primary">Book Now!</a>
										<h2>Hotel Edison</h2>
									</div>
									<div class="row">

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													@foreach ($location->hotelApartment->photos as $photo)
														<div class="col-md-6 col-sm-6">
															<div class="room-img" style="background-image: url({{asset("$photo->img_path")}});"></div>
														</div>	
													@endforeach
													
													 <div class="col-md-6 col-sm-6">
														<div class="desc">
													{{--		<h2>Family Room</h2>
															<p class="price"><span>$45</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															--}}
														</div>
													</div> 
												</div>
											</div>
										</div>

										{{-- <div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url({{asset('images/room-2.jpg')}});"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Luxury Room</h2>
															<p class="price"><span>$75</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url({{asset('images/room-3.jpg')}});"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Double Room</h2>
															<p class="price"><span>$40</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url({{asset('images/room-4.jpg')}});"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Suite Room</h2>
															<p class="price"><span>$25</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url({{asset('images/room-6.jpg')}});"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Classic Double Room</h2>
															<p class="price"><span>$48</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your hotel</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
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
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
							{{-- <div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Price Range</h3>
										<form method="post" class="colorlib-form-2">
						              	<div class="row">
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price from:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">1</option>
						                        <option value="#">200</option>
						                        <option value="#">300</option>
						                        <option value="#">400</option>
						                        <option value="#">1000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price to:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">2000</option>
						                        <option value="#">4000</option>
						                        <option value="#">6000</option>
						                        <option value="#">8000</option>
						                        <option value="#">10000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </form>
					            </div>
								</div>
							</div> --}}
							{{-- <div class="side animate-box">
								<div class="row">	<div class="col-md-6 col-sm-6">
									<div class="room-img" style="background-image: url({{asset("$photo->img_path")}});"></div>
								</div>	
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										      </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										</form>
									</div>
								</div>
							</div> --}}
							{{-- <div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Categories</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Apartment</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hotel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hostel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Inn</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Villa</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div> --}}
							{{-- <div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Location</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Greece</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Italy</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Spain</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Germany</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Japan</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div> --}}
							{{-- <div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Facilities</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Airport Transfer</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Resto Bar</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Restaurant</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Swimming Pool</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Japan</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>

	
		{{-- <input type="hidden" class="class" value="x"> --}}
@endsection	
@section('script')
	
	<script src="{{asset('js/page/index.js')}}"></script>
	<script>
		$(function() {
		
		var index=	"x"
		console.log(index);
			var target = $('.'+index);
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		});
	</script>
@endsection
				

