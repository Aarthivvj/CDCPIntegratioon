<?php
	$title="Connect With Us";
	include("head.php");
?>

<body>
<div id="wrapper">
<!--Floating Social Icon-->
<?php include("floating_social_icons.php")?>
<!--Fullpage Contact Form-->
<?php include("fullpage_contact_form.php")?>
<!--Header Top-->
<?php include("header_top.php")?>

<section style="margin-top: 7%;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-12 innerpage_breadcrumb_section">
		<ul class="list-unstyled d-flex d-row ml-auto breadcrumb_list">
			<li><a id="breadcrumb_name" href="index.php">Home <span class=" pr-1"> / </span> </a></li>
			<li class="breadcrumb-active">Connect With Us</li>
		</ul>
	</div>
</section>	
<section>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_sub_inner_landing_page_section_2">
		<p></p>
		<div class="row mx-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_sub_inner_landing_page_section_2_left">
				<section>
					<div class="container-fluid px-0" id="about_us_landing_page_section_1">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="" >
							<div class="row mx-0">
								<div class="col-lg-12 col-md-8 col-sm-8 col-12" id="about_us_landing_page_section_1_left">
									<h2 class="about_us_landing_page_section_1_title pt-0">Connect With Us  </h2>
									<section id="section05">
										<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 " id="homepage_contact_us_section">
											<div class="row mx-0 my-0 px-0 py-0">
												<div class="col-lg-7 col-md-7 col-sm-12 col-12 m-auto" id="homepage_contact_us_section_left" style="background-color:#344050">
													<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0">
														<h5 class="contact_us_title">Locations</h5>
														<h4 class="contact_us_sub_title">CHENNAI</h4>
														<p class="contact_us_text">Sathyabama Institute Of Science And Technology,<br>
Sathyabama Technology Business Incubator,<br> 1St Floor, 
Col. Dr. Jeppiaar Research Park,<br>
Jeppiaar Nagar, Rajiv Gandhi Salai,<br>
Chennai, Tamilnadu, Pin -  600 119.<br>+91 9976394056</p>

														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
															<ul class="list-unstyled list-inline">
																<li class="list-inline-item"><a style="color:white;" href="https://goo.gl/maps/kRWiSEfCArTfFRzv9" class="btn mr-3" type="btn">Locate In Map &ensp;></a></li>
															</ul>	
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 d-none">
														
														<h4 class="contact_us_sub_title">BENGALURU</h4>
														<p class="contact_us_text">3rd Floor,#175 & #176, Dollars Colony, Phase 4,JP Nagar,Bannerghatta Main Road, Bengaluru, Karnataka-560076<br>+91 89398 15888</p>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
															<ul class="list-unstyled list-inline">
																<li class="list-inline-item"><a style="color:white;"  href="#" class="btn mr-3" type="btn">Locate In Map &ensp;></a></button></li>
															</ul>	
														</div>
													</div>
												</div>
												
												<div class="col-lg-5 col-md-4 col-sm-12 col-12" id="homepage_contact_us_section_right">
													<h5 class="connect_with_us_title">Connect With Us</h5>
													<?php include("contact_form.php")?>
												</div>
											</div>
										</div>
									</section>	

								</div>
								
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include("footer.php")?>
<script>
	window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar-section");
	var sticky = navbar.offsetTop;

	function myFunction() 
	{
		if (window.pageYOffset >= sticky) 
		{
			navbar.classList.add("sticky")
		}
		else 
		{
			navbar.classList.remove("sticky");
		}
	}
</script>
		