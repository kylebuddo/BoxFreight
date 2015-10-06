<!DOCTYPE html>
<html>
	<head>
		<title>BoxFreight</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	</head>
	<body>
		<!-- this is the main holder for everything -->
		<div class="holder-of-all">
			<!-- this is the first main page - full screen y'all-->
			<section class="landing">
				<!-- navigation section - fixed to top -->
				<nav>
					<ul>
						<li><a href='#sales'>Sales &amp; Hire</a></li>
						<li><a href='#storage'>Storage</a></li>
						<li><a href='#transport'>Transport</a></li>
						<li><a href='#contact'>Contact Us</a></li>
					</ul>
				</nav>
				<!-- this is the small nav for anything below 800px width -->
				<div class='mini-nav'>
					<div class="threelines"></div>
					<div class='dropdown'>
						<ul>
							<li class='swipe-link'><a href="#sales">Sales &amp; Hire</a></li>
							<li class='swipe-link'><a href="#storage">Storage</a></li>
							<li class='swipe-link'><a href="#transport">Transport</a></li>
							<li class='swipe-link'><a href="#contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class='logo'>
					<img src='imgs/logo.svg' />
				</div>
			</section>
			<!-- sales and hire section -->
			<section class='sales' id='sales'>
				<div class='sales-container'>
					<div class="sales-holder">
						<div class='sales-text'>
							<h2>Sales <img src='imgs/icons/and.svg' /> Hire</h2>
							<p>At Boxfreight we can help you purchase or hire the right container for you!</p>
							<p>
							We have a variety of containers both new and used. We have both 20ft containers (6.1m long, 2.44m wide and 2.6m high external), which are perfect for safe and secure storage.<br /> We also have the larger 40ft containers (12.2m long, 2.44m wide and 2.6m high external), which can handle the most demanding transport and storage.</p>
							<p>Not only this but we can also arrange other types and sizes of containers, as well as any modifications!
							</p>
						</div>
						<div class='crate'><img src='imgs/crate.svg'/></div>
					</div>
				</div>
			</section>
			<!-- storage section here -->
			<section class='storage' id='storage'>
				<div class="storage-container">
					<div class='storage-text'>
						<h2>Storage</h2>
						<p>
							Containers are great for general storage. Whether it's some temporary storage; you are renovating; travelling or just need that little bit more space.</p><p>
							Here at Boxfreight you can store your belongings in a container (yours or ours) at our depot in Murwillumbah NSW, or even have a container delivered to your property!<br />
							Smaller units are also available to rent for storage, on-site at our depot.</p><p>
							Regular access to your self-storage container at our Murwillumbah depot is available during normal business hours on weekdays, making it convenient and practical.
						</p>
					</div>
				</div>
			</section>
			<!-- transport section here -->
			<section class='transport' id='transport'>
				<div class="holder">
					<div class="left">
						<div class='text-area'>
							<div class="text-holder">
							<h2>Transport</h2>
							<p>
								With our side-loader / swing-lift technology, this allows us to load, transport and unload, 1 or 2 x 20ft shipping containers, or 1 x 40ft shipping container by semi-trailer, to wherever you want along the East Coast of Australia. We are also able to load and unload other semi-trailers which can also transport containers.</p><p>
								Based near the border of Queensland and New South Wales at Murwillumbah, BoxFreight is easily able to move your containers anywhere in the Sunshine Coast / Brisbane / Gold Coast and other South East Queensland areas... as well as the Northern Rivers / Richmond / Tweed Valley regions in Northern NSW.</p><p>
								Whatever your needs BoxFreight can advise you on the best way to transport your box!</p>
							</p>
						</div>
						</div>
					</div>
					<div class='right'>
						<div class="map"></div>
					</div>
				</div>
			</section>
			<!-- CTA contact section -->
			<section class='contact' id='contact'>
				<div class="contact-holder">
					<div class="form-box">
						<h2>Contact Us</h2>
						<p>
							Drop us a call to discuss how we can help you!
						</p>
						<p class='phone-no'><img src='imgs/icons/phonegood.svg' />041 272 5733</p>
						<p>
							...or send us a message below
						</p>
						<!-- include form here -->
						
						<?php include('php/form.php'); ?>

					</div>
				</div>
			<secton>
		</div>
		<!-- javascript and jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    	<script src="js/functions.js"></script>
	</body>
</html>