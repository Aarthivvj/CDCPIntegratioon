<?php
	$title="Some more details,you ask?";
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
	
<section>
	<div class="container-fluid px-0" id="services_sub_inner_landing_page_section_1">
		<img src="images/about_2_inner.jpg" class="img-fluid services_sub_inner_landing_page_section_1_image">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_sub_inner_landing_page_content_section_1" >
			<!--<div class="row mx-0">
				<!--<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
					<h4 class="services_sub_inner_landing_page_section_1_title">Digital Consulting</h4>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12" id="services_sub_inner_landing_page_section_1_left">
					<h4 class="services_sub_inner_landing_page_section_1_sub_title" style="color:#0256a7;">So What is exactly is it that we do?</h4>
					<p>Our Digital Consulting services include strategy & execution services for creation of a new digital Brand or Migration of an existing brand,to the Digital paradigm.</p>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 banner_button_section text-center px-0">
					<ul class="list-unstyled list-inline">
						<li class="list-inline-item"><a href="stories.php" class="btn mr-3" type="btn">Stories &ensp;></a></li>
					</ul>	
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					
				</div>
			</div>-->
		</div>
	</div>
</section>
<section>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12 innerpage_breadcrumb_section">
		<ul class="list-unstyled d-flex d-row ml-auto breadcrumb_list">
			<li><a id="breadcrumb_name" href="index.php">Home <span class=" pr-1"> / </span> </a></li>
			<li><a id="breadcrumb_name" href="about_us.php">About Us <span class=" pr-1"> / </span> </a></li>
			<li class="breadcrumb-active">Some more details,you ask?</li>
		</ul>
	</div>
</section>	
<section>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_sub_inner_landing_page_section_2">
		<p></p>
		<div class="row mx-0">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 pb-5" id="services_sub_inner_landing_page_section_2_left">
			<h4 class="services_sub_inner_landing_page_section_2_left_title">Some more details,you ask? Here you go...</h4>
						<p class="mb-0">Our Digital Consulting services include strategy & execution services for creation of a new digital Brand or Migration of an existing brand,to the Digital paradigm.</p>
						<p class="pt-0">The Digital Engagement are split into two major sub-categories that feature</p>
						<p>Our services fall into three major categories,namely:</p>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="4%" align="left" valign="top" class="diamond_symbol">&#9830;</td>
									<td width="96%" align="left" valign="middle" class="about_us_landing_page_section_2_left_table_text">Digital & content marketing services,with specialization in Proximity Marketing where we drive business Growth by using innovative growth hacks,B2B prospecting,Proximity Marketing with beacons and custom content development </td>
								</tr>
								<tr>
									<td align="left" valign="top" class="diamond_symbol">&#9830;</td>
									<td align="left" valign="middle" class="about_us_landing_page_section_2_left_table_text">Digital content based engagement, featuring shooting & customizing digital content / videos, Game-based learning, including micro-learning nuggets creation </td>
								</tr>						
							</table>	
							<p class="pt-4">Our Digital Transformation services are specifically built around transforming sales, marketing or other business functions in an organization by using Digital products or services,or a combination of both</p>
							<img src="images/about_2_inner_sub_image.jpg" class="img-fluid pt-3 pb-4">
							<p class="mb-0">Some examples of the same are - Accounts & HR Records (unstructured) Digitization, apart from Voice based solutions for overhauling the entire customer experience, featuring conversational AI around Alexa.</p>
							<p class="pt-0">And finally, our outsourced CMO services – featuring end to end outsourcing of sales and marketing functions to drive business growth via Digital and offline Channels.</p>
			
			
			</div>
			<?php include("about_us_sub_inner_landing_page_section_2_right.php")?>
		</div>
	</div>
</section>
<!--Footer-->
<?php include("footer.php")?>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar-section");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

		<!--<script>
						//fixed-menu
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-section");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  }
  else {
    navbar.classList.remove("sticky");
  }
}
					</script>-->
		