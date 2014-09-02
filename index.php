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
                <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon" />
                <link rel="apple-touch-icon" href="icons/apple-touch-icon.png" />
                <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png" />
                <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png" />
                <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png" />
                <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png" />
                <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png" />
                <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png" />
                <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png" />		
		<!--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" />-->
                <link rel="stylesheet" type="text/css" href="css/normalize.css" />
                
                
<link rel="stylesheet" type="text/css" href="css/form.css" />                 

<!--                               
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
                
		<link rel="stylesheet" type="text/css" href="css/blocks.css" />
		
                <script type="text/javascript" src="js/modernizr.custom.js"></script>
	</head>
	<body ng-app="lylesPortfolio">
		<div class="container-fluid">
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about"><span>Curriculum Vitae</span></h2>
					</div>
					<div class="bl-content">
						<h2 class="panelheading">Resume of Lyle Mcclanahan</h2>
						<p>This responsive layout is based on an initial grid of four boxes. Once a box is clicked, it gets resized to fullscreen and the other boxes scale down and fade out. In the ventures section we experiment with another transition which is to show a panel by making it appear from the bottom while scaling the current one down. To see it in action, open the ventures section and click on one of the portfolio items and navigate through them.</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">                                                
						<h2 class="bl-icon bl-icon-works"><span>Ventures</span></h2>
					</div>
					<div class="bl-content">
						<h2 class="panelheading">Ventures&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-3 fa-desktop"></i></h2>
						<p>Not so current ventures I've taken in the adventure to become a better web developer. New stuff to come...</p>
						<ul id="bl-work-items">
                                                    <?php
							    //path to directory to scan
							    $directory = getcwd() . "/images/thumbs/";
							    $url_path = "images/large/";
							    //get all image files with a .jpg extension.
							    $images = glob($directory . "*.png");
                                                            //sort by natural order number
                                                            natcasesort($images);
							    $i = 1;
							    //print each file name
							    foreach($images as $image){
								$image = explode("/",$image);
								$image = array_pop($image);
								$img = $url_path . $image;
								
							      ?>
							      
								<li data-panel="panel-<?php echo $i; ?>">
									<a href="#">
										<img src="<?php echo $img; ?>" width="150" height="133" />
                                                                                
									</a>
								</li>
								
							      <?							      
								$i++;
							    }
                                                    ?>
                                                </ul>						
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
					<div class="bl-content nooverflow" id="cform">
						<h2 class="panelheading">Get in touch&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-3 fa-envelope"></i></h2>
                                                <p>
                                                    Use your keyboard to navigate the form. Press enter when finished filling out each form field. At the end you will be able to review what your entries. 
                                                </p>
                                                
                                                        
                                                        <form id="myform" class="fs-form fs-form-full" autocomplete="off">
                                                                <ol class="fs-fields">
                                                                        <li>
                                                                                <label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
                                                                                <i class="fs-anim-upper required fa fa-asterisk"></i>
                                                                                <input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Lyle Mcclanahan" required/>                                                                                
                                                                        </li>
                                                                        <li>
                                                                                <label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?</label>
                                                                                <i class="fs-anim-upper required fa fa-asterisk"></i>
                                                                                <input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="lyle@lylemcclanahan.com" required/>
                                                                                
                                                                        </li>
                                                                        <li data-input-trigger>
                                                                                <label class="fs-field-label fs-anim-upper" data-info="This will help us know what kind of service you need">How can we make your life more simple?</label>
                                                                                <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                                                                                        <span>
                                                                                            <input id="q3e" name="q3" type="radio" value="custom"/>
                                                                                            <i class="fa fa-github-alt fa-4x"></i>
                                                                                            <label for="q3f" class="radio-custom">Customized</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3g" name="q3" type="radio" value="hosting"/>
                                                                                            <i class="fa fa-sitemap fa-4x"></i>
                                                                                            <label for="q3g" class="radio-hosting">Web Hosting</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3h" name="q3" type="radio" value="maintenance"/>
                                                                                            <i class="fa fa-wrench fa-4x"></i>
                                                                                            <label for="q3f" class="radio-maintenance">Maintenance</label>
                                                                                        </span>                                                                                                                                                                                                                                                                          
                                                                                        <span>
                                                                                            <input id="q3b" name="q3" type="radio" value="conversion"/>
                                                                                            <i class="fa fa-shopping-cart fa-4x"></i>
                                                                                            <label for="q3b" class="radio-conversion">E-Commerce</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3c" name="q3" type="radio" value="social"/>
                                                                                            <i class="fa fa-facebook-square fa-4x"></i>
                                                                                            <label for="q3c" class="radio-social">Social Media</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3f" name="q3" type="radio" value="owncloud"/>
                                                                                            <i class="fa fa-soundcloud fa-4x"></i>
                                                                                            <label for="q3f" class="radio-owncloud">Eneterprise File Sharing</label>
                                                                                        </span>                                                                                        
                                                                                        <span>
                                                                                            <input id="q3a" name="q3" type="radio" value="mobile"/>
                                                                                            <i class="fa fa-mobile fa-4x"></i>
                                                                                            <label for="q3a" class="radio-mobile">Mobile Apps</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3d" name="q3" type="radio" value="social"/>
                                                                                            <i class="fa fa-wordpress fa-4x"></i>
                                                                                            <label for="q3d" class="radio-blog">Blogging</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3e" name="q3" type="radio" value="mobile"/>
                                                                                            <i class="fa fa-joomla fa-4x"></i>
                                                                                            <label for="q3e" class="radio-cms">Content Management</label>
                                                                                        </span>
                                                                                        <span>
                                                                                            <input id="q3i" name="q3" type="radio" value="other"/>
                                                                                            <i class="fa fa-empire fa-4x"></i>
                                                                                            <label for="q3i" class="radio-other">Other</label>
                                                                                        </span> 
                                                                                </div>
                                                                                
                                                                        </li>
                                                                        <li data-input-trigger>
                                                                                <label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your website.</label>
                                                                                <select class="cs-select cs-skin-boxes fs-anim-lower">
                                                                                        <option value="" disabled selected>Pick a color</option>
                                                                                        <option value="#588c75" data-class="color-588c75">#588c75</option>
                                                                                        <option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
                                                                                        <option value="#f3e395" data-class="color-f3e395">#f3e395</option>
                                                                                        <option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
                                                                                        <option value="#da645a" data-class="color-da645a">#da645a</option>
                                                                                        <option value="#79a38f" data-class="color-79a38f">#79a38f</option>
                                                                                        <option value="#c1d099" data-class="color-c1d099">#c1d099</option>
                                                                                        <option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
                                                                                        <option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
                                                                                        <option value="#e1837b" data-class="color-e1837b">#e1837b</option>
                                                                                        <option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
                                                                                        <option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
                                                                                        <option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
                                                                                        <option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
                                                                                        <option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
                                                                                        <option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
                                                                                        <option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
                                                                                        <option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
                                                                                        <option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
                                                                                        <option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
                                                                                </select>                                                                                
                                                                        </li>
                                                                        <li>
                                                                                <label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your new website</label>
                                                                                <textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
                                                                        </li>
                                                                        <li>
                                                                                <label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>                                                                                
                                                                                <input class="fs-mark fs-anim-lower" id="q5" name="q5" type="text" placeholder="1000" step="100" min="100"/>
                                                                                <i class="dollars fs-anim-lower fa fa-usd"></i>
                                                                        </li>
                                                                </ol>
                                                                <button class="fs-submit" type="submit">Send answers</button>
                                                        </form>                                               
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for ventures -->
				<div class="bl-panel-items" id="bl-panel-work-items">
                                    <?php
                                    for($p=1; $p<$i; $p++){
                                    ?>
					<div data-panel="panel-<?php echo $p; ?>">
						<div>
                                                        <h2 class="panelheading">Panel Heading</h2>
							<img src="<?php echo 'images/large/'.$p.'.png'; ?>" />
							<h3>Fixie bespoke</h3>
							<p>Iphone artisan direct trade ethical Austin. Fixie bespoke banh mi ugh, deep v vinyl hashtag. Tumblr gentrify keffiyeh pop-up iphone twee biodiesel. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
						</div>
					</div>                                    
                                    <?php
                                    }
                                    ?>
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
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/angular.min.js"></script>				
		<script type="text/javascript" src="js/ngportfolio.js"></script>
		<script type="text/javascript" src="js/blocks.js"></script>
		
                
                <script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/selectFx.js"></script>
		<script type="text/javascript" src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
                
	</body>
</html>