@extends('front.masterLayout')
<!--content-->
<!--// Begin a section-->
"id" => 2
    "logo" => "http://localhost/adsl/public/logo/logo_3_1523688069.jpg"
    "" => "www.www.www.cp"
    "" => 6
    "" => "name test 1"
    
 @section('content')

			
			<div class="main-content">

				<!-- BreadCrumbs -->
				<div id="BreadCrumbs-container">
					<p><a href="#">Home</a> <span class="seperator">/</span> <span>Providers</span></p>
				</div>

				<!-- Page Message -->
				<div class="title page-message">
					<h1>Broadband Providers</h1>
					<p><b>Confused by all the different broadband providers in the market? We can help.</b><br>
						Compare ADSL, ADSL2+, Cable, Naked DSL, Mobile/Wireless, Prepaid Mobile/Wireless broadband plans from the top broadband providers to find the right deals for you.
					</p>
				</div>

				<!-- Result Filter Dropdown Menu -->
<!--				<div class="filter">
					<div class="form-row">
					    <div class="form-group col-md-3">
					      <select id="inputState" class="form-control">
					        <option selected>Sort By</option>
					        <option>Alphabetical</option>
					        <option>Recent Added</option>
					      </select>
					    </div>
					  </div>
				</div>-->

				<div id="results">
                                    @foreach ($provider as $key => $pro_value)
						<div class="row result">
						<div class="col-md-10">
							<div class="row justify-content-between provider-details">
								<h1 class="name"><a href="http://{{$pro_value['site_url']}}">{{$pro_value['name']}}
                                                                    </a></h1>
								<div class="logo-container">
									<img src="{{$pro_value['logo']}}">
								</div>
							</div>
<!--							<div class="tags-container">
								<p>Browse <span>42</span> plans from <span>Optus</span>...
								<ul class="row tags">
									<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">All</a></li>
									<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Mobile Broadband</a></li>
									<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">ADSL</a></li>
									<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">ADSL+2</a></li>
									<li><a href="#" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Cabel</a></li>
								</ul>
							</div>-->
						</div>
						<div class="col-md-2">
							<div class="plans-number-container">
								<div class="Number">{{$pro_value['count_offers']}}</div>
								<div>Plans</div>
							</div>
						</div>
					</div>
                                    
                                @endforeach
					
				</div>

			</div>

@stop