<?php
	$title="Digital Consulting";
	include("head.php");
?>
<style>
.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: blue;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<body>
<div id="wrapper">
<?php include("header_top.php")?>



<div id="navbar-section">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 ">
<div class="overlay"></div>
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top p-0" id="sidebar-wrapper" role="navigation">
		<ul class="nav sidebar-nav">
			<div class="sidebar-header">
				<div class="sidebar-brand">
					<a href="#"><!--<img src="images/mvg_logo_white.png" class="img-fluid">-->Menu</a>
				</div>
			</div>
		   <li><a href="services.php">Services</a></li>
		   <li><a href="solutions.php">Solutions</a></li>
		   <li><a href="stories.php">Stories</a></li>
		   <li><a href="about_us.php">About Us</a></li>
		 
		  <li><a href="career.php">Career</a></li>
		</ul>
	</nav>
    <!-- /#sidebar-wrapper -->
		<div id="page-content-wrapper" onscroll="myFunction()">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
           <div class="" id="banner_navbar">
				<a class="navbar-brand" href="index.php"><img class="img-fluid" src="images/mvg_logo.png"></a>
			</div>
        </div>
	</div>	
</div>		

<section>
	<div class="container-fluid px-0" id="services_landing_page_section_1">
		<img src="images/home_banner_consulting.png" class="img-fluid services_landing_page_section_1_image">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="services_landing_page_content_section_1" >
		<div class="row mx-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
				<h4 class="services_landing_page_section_1_title" style="color:white">Digital Consulting</h4>
			</div>
			<!--<div class="col-lg-6 col-md-6 col-sm-6 col-12 " id="services_landing_page_section_1_left">
			
				<h4 class="services_landing_page_section_1_sub_title"><span class="vertical-line"></span>Digital Consulting</h4>
				<p>Using <span>Digital</span> technologies to grow sales, increase user engagement and transform customer experience</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				
			</div>-->
		</div>
	</div>
	</div>
</section>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12 innerpage_breadcrumb_section">
		<ul class="list-unstyled d-flex d-row ml-auto breadcrumb_list">
			<li><a id="breadcrumb_name" href="index.php">Home <span class=" pr-1"> / </span> </a></li>
			<li><a id="breadcrumb_name" href="services.php">Services <span class=" pr-1"> / </span> </a></li>
			<li class="breadcrumb-active">Digital Consulting</li>
		</ul>
	</div>
<section>
	<div class="container-fluid px-0" id="services_landing_page_section_2">
		<img src="images/inner_banner_consulting.jpg" class="img-fluid services_landing_page_section_2_image">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0" id="services_landing_page_content_section_2" >
		<div class="row mx-0">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12" id="services_landing_page_section_2_right">
				<h4 class="services_landing_page_section_1_sub_title" style="color:#54c115;">Digital Consulting</h4>
				<p>Brand and technology based consulting services to drive growth and make existing IT investments,future-proof</p>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
					<ul class="list-unstyled list-inline">
						<li class="list-inline-item"><a href="#" class="btn mr-3" type="btn">Explore &ensp;></a></li>
					</ul>	
				</div>
			</div>
		</div>
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
		