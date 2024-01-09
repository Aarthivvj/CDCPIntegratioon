<style>
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index:1050;
  background-color: rgba(255,255,255,0.9);
  height: 80px;
}
#banner_navbar {
    top: 5px;
}
.sticky .homepage_navbar {
   
    padding: 4px 4% 3%;
    z-index: 100;
}
.sticky .navbar-brand img
{
	width:80%;
}
.sticky .navbar
{
	background-color:red;
}
.sticky .hamburger {
    position: fixed;
    top: 20px;
    right: 50px;
    z-index: 999;
    display: block;
    width: 32px;
    height: 32px;
    margin-left: 15px;
    background: transparent;
    border: none;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #54c115;
}
</style>
<div class="container-fluid px-0 banner_content_section">
	<div id="navbar-section">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 ">
			<div class="overlay"></div>
			<nav class="navbar navbar-inverse fixed-top p-0" id="sidebar-wrapper" role="navigation">
				<ul class="nav sidebar-nav">
					<div class="sidebar-header">
						<div class="sidebar-brand">
							<a href="#"><!--<img src="images/mvg_logo_white.png" class="img-fluid">-->Menu</a>
						</div>
					</div>
				   <li><a href="services.php">Services</a></li>
				   <li><a href="solutions.php">Solutions</a></li>
				   <li><a href="products.php">Products</a></li>
				   <li><a href="stories.php">Stories</a></li>
				   <li><a href="about_us.php">About Us</a></li>
				  <li><a href="career.php">Career</a></li>
				  <li><a href="contact.php">Contact</a></li>
				  
				</ul>
			</nav>
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
</div>	