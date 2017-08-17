 
@extends('layout')
@section('css')
		<link rel="stylesheet" href="{{ asset('css/RSlider/responsiveslides.css') }}">
		<link rel="stylesheet" href="{{ asset('css/RSlider/slider4.css') }}">
@endsection
@section('script')
	<!-- Scripts-->
    
    <script src="js/RSlider/responsiveslides.min.js"></script>
	<script>
	    // You can also use "$(window).load(function() {"
		$(function () {
			$("#slider4").responsiveSlides({
			   auto: false,
		 
			   pager: false,
			 
			   nav: true,
			  
			   speed: 500,
			   
			   namespace: "callbacks",
		 
			   before: function () {
				  $('.events').append();
				},

			   after: function () {
				  $('.events').append();
				}
		    });
		});
	</script>	
@endsection
@section('content')
	
		<style>
		.h2-my {
			color:  #4bc9e8;
			display: inline;
			font-size: 28px;
		}
		.h3-my {
			color: #4d4d4d;
			display: inline;
			font-size: 20px;
		}
		.h4-my {
			color:  #4bc9e8;
			display: inline;

		}	
		</style>
		<style type="text/css" media="screen">

				img { border:none; }
	
				.div-demo { margin:0 auto; position:relative; }
		
				img.demo { float:right; }
	
				.demo { position:relative; }
	
				.loupe { background-color:#555; background:rgba(0, 0, 0, 0.25); border:5px solid rgba(0, 0, 0, 0); cursor:url(blank.png), url(blank.cur), none; }
	
		</style>
		
		<div class="mdl-grid">
		
			<div  class="mdl-cell">
				
			</div>
			<div  class="mdl-cell">
				<div>
					<span class="h3-my"> Холодильник Beko CFN 1600</span>
					
				</div>
				<br>
				
				<div class="callbacks_container">
							 <ul class="rslides" id="slider4">
								<li><img src="images/RSlider/images/1.jpg" alt="">
								<li><img src="images/RSlider/images/2.jpg" alt="">
								<li><img src="images/RSlider/images/3.jpg" alt="">
							</ul> 
							<script type="text/javascript" src="js/Loupe/jquery.loupe.js"></script>
							<script type="text/javascript">$('.demo').loupe();</script>

				</div>
				
				<div class="mdl-grid">
					<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
								<div class="mdl-tabs__tab-bar">
									  <a href="#starks-panel" class="mdl-tabs__tab is-active">Описание</a>
									  <a href="#lannisters-panel" class="mdl-tabs__tab">Характеристики</a>
									  <a href="#targaryens-panel" class="mdl-tabs__tab">Отзывы</a>
								</div>
								
								<div class="mdl-tabs__panel is-active" id="starks-panel">
									Описание Холодильник Beko CN 160120 dfbashgetsjudj arseystytwsut etwuyeuweujte sf dsrteyu etyu uetu dfbashgetsjud dfbashgetsjudj arseystytwsut etwuyeuweujte sf dsrteyu etyj arseystytwsut etwuyeuweujte sf dsrteyu etyetyuetyuytu
								</div>
								<div class="mdl-tabs__panel" id="lannisters-panel">
									<table class="mdl-data-table mdl-js-data-table">
										<thead>
										  <tr>
											<th class="mdl-data-table__cell--non-numeric">Name</th>
											<th class="mdl-data-table__cell--non-numeric">Nickname</th>
											<th>Age</th>
											<th class="mdl-data-table__cell--non-numeric">Living?</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td class="mdl-data-table__cell--non-numeric">John Lennon</td>
											<td class="mdl-data-table__cell--non-numeric">The smart one</td>
											<td>40</td>
											<td class="mdl-data-table__cell--non-numeric">No</td>
										  </tr>
										  <tr>
											<td class="mdl-data-table__cell--non-numeric">Paul McCartney</td>
											<td class="mdl-data-table__cell--non-numeric">The cute one</td>
											<td>73</td>
											<td class="mdl-data-table__cell--non-numeric">Yes</td>
										  </tr>
										  <tr>
											<td class="mdl-data-table__cell--non-numeric">George Harrison</td>
											<td class="mdl-data-table__cell--non-numeric">The shy one</td>
											<td>58</td>
											<td class="mdl-data-table__cell--non-numeric">No</td>
										  </tr>
										  <tr>
											<td class="mdl-data-table__cell--non-numeric">Ringo Starr</td>
											<td class="mdl-data-table__cell--non-numeric">The funny one</td>
											<td>74</td>
											<td class="mdl-data-table__cell--non-numeric">Yes</td>
										  </tr>
										</tbody>
									</table>
								</div>
								<div class="mdl-tabs__panel" id="targaryens-panel">
									Холодильник Beko CN 160120 dfbashgetsjudj arseystytwsut  etwuyeuweujte sf dsrteyu etyu uetu dfbashgetsjud dfbashgetsjudj arseystytwsut  etwuyeuweujte sf dsrteyu etyj arseystytwsut  etwuyeuweujte sf dsrteyu etyetyuetyuytu
							
								</div>
							
					</div>
				</div>
			</div>
			<div  class="mdl-cell">
				<span class="h2-my">12500 </span><span class="h4-my">грн.</span>
				<br>
				<br>
				<div>
						<div id="tt4" class="icon material-icons">share</div>
						
							Share your content via social media
						
						<br>
						<div id="tt4" class="icon material-icons">search</div>
						
							Share your content via social mediadfbxsht fdtjjd
					
						<br>
						<div id="tt4" class="icon material-icons">cloud_upload</div>
						
							Share your content fvia social media
				</div>
			</div>
			
			<div class="div-demo">
				<img class="demo" src="images/RSlider/images/1.jpg" width="300px" />
			</div>
			
			
	


	
@endsection				
