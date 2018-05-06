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

			<!-- Broadband Providers -->
			<div id="Providers-container" class="row">
				<p class="row">Broadband Providers</p>
				<ul class="row" id="providers-slider">
                                        @foreach ($provider as $pkey => $pvalue)
                                
					<li><img src="{{$pvalue['logo']}}"></li>
                                
                                        @endforeach   
<!--					<li><a href="#"><img src="Images/Providers_Logos/Icon (2).png"></a></li>
					<li><a href="#"><img src="Images/Providers_Logos/Icon (3).png"></a></li>
					<li><a href="#"><img src="Images/Providers_Logos/Icon (4).png"></a></li>
					<li><a href="#"><img src="Images/Providers_Logos/Icon (5).png"></a></li>
					<li><a href="#"><img src="Images/Providers_Logos/Icon (6).png"></a></li>
					<li><a href="#"><img src="Images/Providers_Logos/Icon (7).png"></a></li>-->
				</ul>
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

				<!-- Page Message -->
				

				<!-- Result Filter Dropdown Menu -->
				<!--<div class="row filter" id="search-filters">-->

<!--					<div class="col-md-4">
						<label>Search by Provider</label>
						<ul class="row tags">
							<li><a href="#" class="btn btn-secondary btn-sm active" role="button" aria-disabled="true">All</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Vodafone</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Etisalat</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Orange</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">TE Data</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<label>Bundle Options</label>
						<ul class="row tags">
							<li><a href="#" class="btn btn-secondary btn-sm active" role="button" aria-disabled="true">All</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Mobile Broadband</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">ADSL</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">ADSL+2</a></li>
							<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Cabel</a></li>
						</ul>
					</div>-->

<!--					<div class="col-md-4">
						<label>Data & Spend</label>
						<div class="slidecontainer">
							<b>Unlimited Data <span id="dataValue"></span></b>
						  	<input type="range" min="1" max="100" value="0" class="slider" id="dataRange">
						</div>

						<div class="slidecontainer">
							<b>Value <span id="priceValue"></span></b>
						  	<input type="range" min="1" max="100" value="0" class="slider" id="priceRange">
						</div>
					</div>-->
				<!--</div>-->

<!--				<div class="row justify-content-end" id="sort-container">
					<div class="form-row col-md-3">
					    <div class="form-group col-md-12">
					      <select id="inputState" class="form-control">
					        <option selected>Sort By</option>
					        <option>Alphabetical</option>
					        <option>Recent Added</option>
					      </select>
					    </div>
					</div>
				</div>-->

				<div id="results">
                                    @foreach ($offers as $key => $offer)
                                        <div class="row plan-result">
                                                <div class="col-md-6">
                                                    <div class="row justify-content-between plan-details">
                                                        <div>
                                                            <h1 class="name"><a href="{{url('/show-offer/'.$offer['offer_id'])}}">{{$offer["title"]}}</a></h1>
                                                            <p>{{$offer["subtitle"]}}</p>
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
								
							</div>
                                                        </div>
                                                        @endforeach
								<div>
                                                                    
									<a class="btn btn-primary" href="{{$offer['offer_url']}}" role="button">Go to Site</a>
								</div>
								<div class="logo-container">
									<!--<img src="Images/Providers_Logos/Icon (3).png">-->
								</div>
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