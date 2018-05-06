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
					<div class="table-container">
						<table class="table table-hover">
						    <thead>
						        <tr>
						            <th>Offers</th>
						            <th>Price</th>
						            <th>Features</th>
						            <th>Web site</th>
						        </tr>
						    </thead>
						    <tbody>
                                                        @foreach ($offers as $key => $offer)
                                                        
                                                            <tr>
                                                                
                                                                <td><a href="{{url('/show-offer/'.$offer['offer_id'])}}">{{$offer["title"]}}</a><br>
                                                                    <small>{{$offer["subtitle"]}}</small>
                                                                </td>
                                                                <td>{{$offer["price"]}}<br>
                                                                    <small>{{$offer["price_sub_title"]}}</small></td>
                                                                <td>
                                                        @foreach ($offer["feature"] as $keyfeature => $offerfeature)
                                                        {{$offerfeature["title"]}}
                                                        @endforeach
                                                                </td>
                                                            </tr>
                                                        @endforeach
						    	
						    </tbody>
						</table>
						<a href="#" class="load-more"><i class="far fa-arrow-alt-circle-right"></i>Show all providers</a>
					</div>
				</div>
				<div class="col-md-7 align-self-end" id="Top-Providers-container">
					<div class="title">
						<h1>Top Providers</h1>
						<p>Most Popular Broadband Internet Plans</p>
					</div>
					<div class="table-container">
						<table class="table table-hover">
						    <thead>
						        <tr>
						            <th>Name</th>
						            <th>Connection Types</th>
						            <th>Priced From</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<tr>
						            <td><a href="#">Optus</a></td>
						            <td>NBN, Cable, ADSL2+, Mobile Broadband</td>
						            <td>$60</td>
						        </tr>
						        <tr>
						            <td><a href="#">Optus</a></td>
						            <td>NBN, Cable, ADSL2+, Mobile Broadband</td>
						            <td>$60</td>
						        </tr>
						        <tr>
						            <td><a href="#">Optus</a></td>
						            <td>NBN, Cable, ADSL2+, Mobile Broadband</td>
						            <td>$60</td>
						        </tr>
						        <tr>
						            <td><a href="#">Optus</a></td>
						            <td>NBN, Cable, ADSL2+, Mobile Broadband</td>
						            <td>$60</td>
						        </tr>
						    </tbody>
						</table>
						<a href="#" class="load-more"><i class="far fa-arrow-alt-circle-right"></i>Show all providers</a>
					</div>
				</div>
			</div>

			
<!--// End a section-->
 @stop