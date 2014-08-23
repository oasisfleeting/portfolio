<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>A byte about Lyle Mcclanahan | Portfolio</title>
		<meta name="description" content="Fullscreen Layout with Page Transitions" />
		<meta name="keywords" content="professional web design, go lang, angular, api, webservices, modernizr, jquery, php, phalcon" />
		<meta name="author" content="Lyle Mcclanahan | Professional Developer" />
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" />
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/blocks.css" />
		
	</head>
	<body ng-app="lylesPortfolio">
		<div class="container-fluid">
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about"><span>Curriculum Vitae</span></h2>
					</div>
					<div class="bl-content">
						<h2>Resume of Lyle Mcclanahan</h2>
						<p>This responsive layout is based on an initial grid of four boxes. Once a box is clicked, it gets resized to fullscreen and the other boxes scale down and fade out. In the work section we experiment with another transition which is to show a panel by making it appear from the bottom while scaling the current one down. To see it in action, open the work section and click on one of the portfolio items and navigate through them.</p>
						<p>
							<a href="http://tympanus.net/Development/ResponsiveMultiLevelMenu/"><strong>&laquo; Previous Demo</strong></a> |
							<a href="http://tympanus.net/codrops/?p=14783"><strong>Back to the Codrops Article</strong></a>
						</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">                                                
						<h2 class="bl-icon bl-icon-works"><span>Ventures</span></h2>
					</div>
					<div class="bl-content">
						<h2>Ventures&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-3 fa-desktop"></i></h2>
						<p>Mung bean maize dandelion sea lettuce catsear bunya nuts ricebean tatsoi caulie horseradish pea.</p>
						<ul id="bl-work-items">
							<li data-panel="panel-1"><a href="#"><img src="images/1.jpg" /></a></li>
							<li data-panel="panel-2"><a href="#"><img src="images/2.jpg" /></a></li>
							<li data-panel="panel-3"><a href="#"><img src="images/3.jpg" /></a></li>
							<li data-panel="panel-4"><a href="#"><img src="images/4.jpg" /></a></li>
						</ul>
						<p>Illustrations by <a href="http://dribbble.com/isaac317/click">Isaac Montemayor</a></p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-blog"><span>Scribbling &amp; Scripting</span></h2>
					</div>					
					<div class="bl-content">
						<div ng-include="'panels/codepanel/partials/code.html'"></div>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-contact"><span>Contact</span></h2>
					</div>
					<div class="bl-content">
						<h2>Get in touch</h2>
						<p>Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>Fixie bespoke</h3>
							<p>Iphone artisan direct trade ethical Austin. Fixie bespoke banh mi ugh, deep v vinyl hashtag. Tumblr gentrify keffiyeh pop-up iphone twee biodiesel. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/2.jpg" />
							<h3>Chillwave mustache</h3>
							<p>Squid vinyl scenester literally pug, hashtag tofu try-hard typewriter polaroid craft beer mlkshk cardigan photo booth PBR. Chillwave 90's gentrify american apparel carles disrupt. Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/3.jpg" />
							<h3>Austin hella</h3>
							<p>Ethical cray wayfarers leggings vice, seitan banksy small batch ethnic master cleanse. Pug chillwave etsy, scenester meh occupy blue bottle tousled blog tonx pinterest selvage mixtape swag cosby sweater. Synth tousled direct trade, hella Austin craft beer ugh chambray.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/4.jpg" />
							<h3>Brooklyn dreamcatcher</h3>
							<p>Fashion axe 90's pug fap. Blog wayfarers brooklyn dreamcatcher, bicycle rights retro YOLO. Wes anderson lomo 90's food truck 3 wolf moon, twee jean shorts. Iphone small batch twee wolf yr before they sold out. Brooklyn echo park cred, portland pug selvage flannel seitan tousled mcsweeney's.</p>
						</div>
					</div>
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
			<div id="cleanpage">
				<span class="cleanpagelink"><i data-powerswitch="false" class="fa fa-power-off"></i></span>
			</div>
		</div><!-- /container -->
		
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.18/angular.min.js"></script>		
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
		<script type="text/javascript" src="js/ngportfolio.js"></script>
		<script type="text/javascript" src="js/blocks.js"></script>
	</body>
</html>