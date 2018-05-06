@extends('front.masterLayout')
<!--content-->
<!--// Begin a section-->


 @section('content')

			<!-- Banner Area -->
			<div id="banner-container" class="row">
				<div id="message-container" class="col-lg-5">
					<h3>Ready to Love Your Internet?</h3>
					<h1>Compare Broadband Plans</h1>
<!--					<div id="Search-container">
						<div class="input-group input-group-sm">
							<input type="text" class="form-control" id="search-box" placeholder="Search ..." autocomplete="off">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>-->
				</div>
			</div>			

			<!-- Popular Plans -->
			<div id="plans-container" class="row justify-content-md-between">
				<div class="col-sm-12" id="Popular-plan-container">
					<div class="title">
						<h1>Popular Broadband Plans</h1>
						<p>Most Popular Broadband Internet Plans</p>
					</div>
					
				</div>
			</div>
                        
			<div class="main-content">
				<div id="results">
					@foreach ($offers as $key => $offer)
					<div class="row plan-result">
						<div class="col-md-6">
							<div class="row justify-content-between plan-details">
								<div>
									<h1 class="name"><a href="{{url('/show-offer/'.$offer['offer_id'])}}">{{$offer["title"]}}</a></h1>
									<p>{{$offer["subtitle"]}}</p>
								</div>
								<div>
									<a class="btn btn-primary" href="{{$offer['offer_url']}}" role="button">Go to Site</a>
								</div>
								<div class="logo-container">
									<img src="Images/Providers_Logos/Icon (3).png">
								</div>
							</div>
						</div>

						@foreach ($offer["feature"] as $keyfeature => $offerfeature)
						<div class="col-md-4">
							<div class="row plan-icons">
								<div class="col-md-6 text-center">
									<p><i class="fas fa-tachometer-alt"></i></p>
									<b>{{$offerfeature["title"]}}</b>
								</div>
								<div class="col-md-6 text-center">
									<p><i class="fa fa-battery-full"></i></p>
									<b>{{$offerfeature["title"]}}</b>
								</div>
							</div>
						</div>
						@endforeach

						<div class="col-md-2">
							<div class="text-center">
								<h1><sup><small>$ </sup></small>{{$offer["price"]}}<sup><small> /mth</small></sup></h1>
								<p>{{$offer["price_sub_title"]}}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>                                       
			</div>			
<!--// End a section-->
@stop