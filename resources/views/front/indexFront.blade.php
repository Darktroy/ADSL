@extends('front.masterLayout')
<!--content-->
<!--// Begin a section-->


 @section('content')

			<!-- Banner Area -->
			<div id="banner-container" class="row">
				<div id="message-container" class="col-lg-5">
					<h3>Ready to Love Your Internet?</h3>
					<h1>Compare Broadband Plans</h1>
					<!--div id="Search-container">
						<div class="input-group input-group-sm">
							<input type="text" class="form-control" id="search-box" placeholder="Search ..." autocomplete="off">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div-->
				</div>
			</div>			

			<!-- Broadband Providers -->
			<!--div id="Providers-container" class="row">
				<p class="row">Broadband Providers</p>
				<ul class="row" id="providers-slider">
					@foreach ($provider as $key => $provider_data)
					<li><a href="http://{{$provider_data['site_url']}}"><img src="{{$provider_data['logo']}}"></a></li>
					@endforeach
				</ul>
			</div-->

			<!-- Popular Plans -->
			<div id="plans-container" class="row justify-content-md-between">
				<div class="col-md-7" id="Popular-plan-container">
					<div class="title">
						<h1>Popular Broadband Plans</h1>
						<p>Most Popular Broadband Internet Plans</p>
					</div>
					<div class="table-container">
						<table class="table table-hover">
						    <thead>
						        <tr>
						            <th>Plan</th>
						            <th>Data</th>
						            <th>Price</th>
						        </tr>
						    </thead>
						    <tbody>
						    	@foreach ($offers as $key => $offer)
						    	<?php if($key < 4) { ?>
						    	<tr>
						            <td><a href="{{url('/show-offer/'.$offer['offer_id'])}}">{{$offer['title']}}</a></td>
						            <td>{{$offer['price_sub_title']}}</td>
						            <td>{{$offer['price']}} $</td>
						        </tr>
						        <?php }?>
						        @endforeach
						    </tbody>
						</table>
						<a href="#" class="load-more"><i class="far fa-arrow-alt-circle-right"></i>Show all Plans</a>
					</div>
				</div>
				<div class="col-md-4 align-self-end" id="Top-Providers-container">
					<div class="title">
						<h1>Top Providers</h1>
						<p>Most Popular Broadband Internet Plans</p>
					</div>
					<div class="table-container">
						<table class="table table-hover">
						    <thead>
						        <tr>
						        	<th>Logo</th>
						            <th>Name</th>
						            <!-- <th>Connection Types</th>
						            <th>Priced From</th> -->
						        </tr>
						    </thead>
						    <tbody>
						    	@foreach ($provider as $key => $provider_data)
						    	<?php if($key < 4) { ?>
						    	<tr>
						    		<td><img class="provider-icon" src="{{$provider_data['logo']}}"></td>
						            <td><a href="http://{{$provider_data['site_url']}}">{{$provider_data['name']}}</a></td>
						            <!-- <td>{{$provider_data['site_url']}}</td>
						            <td>$60</td> -->
						        </tr>
						        <?php }?>
						        @endforeach
						    </tbody>
						</table>
						<a href="{{url('All-Providers')}}" class="load-more"><i class="far fa-arrow-alt-circle-right"></i>Show all providers</a>
					</div>
				</div>
			</div>
            
            <div id="articles-container" class="row justify-content-md-between">
                    
				<div class="col-md-4 article-body">
			            @if(isset($articles[1]))
			                <h3>{{$articles[1]['title']}}</h3>
					<p><?php echo($articles[1]['article']) ?></p>
			            @endif
				</div>
			        <div class="col-md-4 article-body">
			            @if(isset($articles[2]))
			            	<h3>{{$articles[2]['title']}}</h3>
					<p><?php echo($articles[2]['article']) ?></p>
			            @endif
				</div>
			        <div class="col-md-4 article-body">
			            @if(isset($articles[3]))
			            	<h3>{{$articles[3]['title']}}</h3>
					<p><?php echo($articles[3]['article']) ?></p>
			            @endif
				</div>
			</div> 
<!--// End a section-->
@stop