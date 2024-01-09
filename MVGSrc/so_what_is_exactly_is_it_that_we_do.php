<?php
	$title="So What is exactly is it that we do?";
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
		<img src="images/about_1_inner.jpg" class="img-fluid services_sub_inner_landing_page_section_1_image">
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
			<li class="breadcrumb-active">So What is exactly is it that we do?</li>
		</ul>
	</div>
</section>	
<section>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_sub_inner_landing_page_section_2">
		<p></p>
		<div class="row mx-0">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12" id="services_sub_inner_landing_page_section_2_left">
			<h4 class="services_sub_inner_landing_page_section_2_left_title">So What is exactly is it that we do?</h4>
			<p>We are a Technology Driven,sales,marketing & digital experience company that helps customers grow,optimize and differentiate their businesses by means of Digital Technologies.</p>
					<p>Our services fall into three major categories,namely:</p>
					<div class="row mx-0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="4%" align="left" valign="top" class="about_us_landing_page_section_1_left_table_number">1</td>
									<td width="90%" align="left" valign="middle" class="about_us_landing_page_section_1_left_table_text">Digital Marketing & Technology Consulting </td>
								</tr>	
							</table>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="4%" align="left" valign="top" class="about_us_landing_page_section_1_left_table_number">2</td>
									<td width="90%" align="left" valign="middle" class="about_us_landing_page_section_1_left_table_text">Digital Engagement,including proximity marketing,gamified learning & micro-learning </td>
								</tr>
							</table>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="4%" align="left" valign="top" class="about_us_landing_page_section_1_left_table_number">3</td>
									<td width="90%" align="left" valign="middle" class="about_us_landing_page_section_1_left_table_text">Digital Transformation featuring conversational AI & the internet of things </td>
								</tr>
							</table>
						</div>
					</div>
					<p class="pt-4">And finally,Outsourced CMO services where we work with a few select customers and take over their entire sales and marketing functions to drive business growth,allowing them to focus on their core strengths.</p>
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
		