<?php
	$title="Career";
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
<!--<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 " id="career_apply_us_section">
				<div class="row mx-0 my-0 px-0 py-0">
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 m-auto" id="career_apply_us_section_left" style="background-color:#262e3a;">
						<h4>If you are passionate, young and looking for a career with an exciting start up that is competing on a global stage, this is the company for you…</h4>
						
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12 m-auto" id="career_apply_us_section_middle" style="background-color:#344050">
						<h4 class="career_apply_us_section_left_title">Drop us your CV and we will get back to you within one business day.</h4>
						<!--<h4>Internship</h4>
						<ul class="list-unstyled">
							<li>Content Writing</li>
							<li>Development</li>
							<li>UI</li>
							<li>UX</li>
							<li>Graphic Design</li>
							<li>Photography</li>
						</ul>
					</div>
					
					<div class="col-lg-5 col-md-5 col-sm-12 col-12" id="homepage_contact_us_section_right">
				<form method="post" name="form" action="career_form.php">
				<ul class="list-unstyled">
					<li  ><span class="mr-2">I am a</span>
						<select class="text_field" style="width:32%" name="experience_catagory" required>
							<option value="fresher">Fresher</option>
							<option selected value="experienced">Experienced</option>
						</select>
					 <!--<div class="autocomplete" style="width:80%"><input id="myInput" style="width:60%" class="text_field" autocomplete="off" type="text" name="designation" placeholder="Chief Executive Officer (CEO)" required>-->
						<!--<select class="text_field" style="width:40%" name="positionlist" form="">
							<option value="">CEO</option>
							<option value="">CXO</option>
							<option value="">CFO</option>
						</select></div>
					<br><br></li>
					
					<li><span class="mr-2">looking at a career in  </span>
						<select class="text_field" style="width:42%" name="job_catagory" required>
							<option  selected value="Content Writing">Content Writing</option>
							<option value="Development">Development</option>
							<option  value="UI">UI</option>
							<option  value="UX">UX</option>
							<option value="Graphic Design">Graphic Design</option>
							<option value="Photography">Photography</option>
						</select>
					<br><br></li>
					<li ><span style="line-height:2.1;" class="mr-2">and don’t mind working long hours with very little<br> pay, as long as the work is  </span>
						<select class="text_field" style="width:42%" name="rewards_catagory" required>
							<option  selected value="Rewarding">Rewarding</option>
							<option value="Exciting">Exciting</option>
							<option  value="Sexy">Sexy</option>
							<option  value="Mind-Numbingly Repetitive">Mind-Numbingly Repetitive</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">and I’m constantly </span>
						<select class="text_field" style="width:42%" name="learning_catagory" required>
							<option  selected value="Content Writing">Learning</option>
							<option value="Development">Having Fun</option>
							<option  value="UI">Taking Life Easy</option>
							<option  value="UX">Working the Bare Minimum</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">So, here is my</span><input required class="text_field" type="text" name="employee_name" placeholder="Name" style="color:#0056a6;width:26%"><span class="ml-4"><input required class="text_field" type="text" name="phone_no" placeholder="Contact Number" style="color:#0056a6;width:36%"></span><span class="ml-2" style="line-height:2.1"><br>call me and get to know for yourself. </span>  <br><br></li>
					<!--<li><br><br></li>
					<li><span class="mr-2">and my </span>
					<input id="form_email" required class="text_field" type="text" name="resume" placeholder="CV" style="color:#0056a6;width:40%"><span class="ml-2" style="line-height:2.1">call me and get to know for yourself. </span>  
					<br><br></li>
				</ul>	
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
					<input type="submit" class="btn" name="submit" value="APPLY NOW" style="color:black">
						<!--<ul class="list-unstyled list-inline">
							<li class="list-inline-item"><button class="btn mr-3" type="submit" name="submit" value="SUBMIT"><a>Contact Me &ensp;></a></button></li>
						</ul>
					</div>
						</form>
			</div>
						
					</div>
				</div>-->
				<!--<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 " id="career_apply_us_section">
				<div class="row mx-0 my-0 px-0 py-0">
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 m-auto" id="career_apply_us_section_left" style="background-color:#262e3a;">
						<h4>If you are passionate, young and looking for a career with an exciting start up that is competing on a global stage, this is the company for you…</h4>
						
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12 m-auto" id="career_apply_us_section_middle" style="background-color:#344050">
						<h4 class="career_apply_us_section_left_title">Drop us your CV and we will get back to you within one business day.</h4>
						<!--<h4>Internship</h4>
						<ul class="list-unstyled">
							<li>Content Writing</li>
							<li>Development</li>
							<li>UI</li>
							<li>UX</li>
							<li>Graphic Design</li>
							<li>Photography</li>
						</ul>
					</div>
					
					<div class="col-lg-5 col-md-5 col-sm-12 col-12" id="homepage_contact_us_section_right">
				<form method="post" name="form" action="career_form.php">
				<ul class="list-unstyled">
					<li  ><span class="mr-2">I am a</span>
						<select class="text_field" style="width:32%" name="experience_catagory" required>
							<option value="fresher">Fresher</option>
							<option selected value="experienced">Experienced</option>
						</select>
					 <!--<div class="autocomplete" style="width:80%"><input id="myInput" style="width:60%" class="text_field" autocomplete="off" type="text" name="designation" placeholder="Chief Executive Officer (CEO)" required>-->
						<!--<select class="text_field" style="width:40%" name="positionlist" form="">
							<option value="">CEO</option>
							<option value="">CXO</option>
							<option value="">CFO</option>
						</select></div>
					<br><br></li>
					
					<li><span class="mr-2">looking at a career in  </span>
						<select class="text_field" style="width:42%" name="job_catagory" required>
							<option  selected value="Content Writing">Content Writing</option>
							<option value="Development">Development</option>
							<option  value="UI">UI</option>
							<option  value="UX">UX</option>
							<option value="Graphic Design">Graphic Design</option>
							<option value="Photography">Photography</option>
						</select>
					<br><br></li>
					<li ><span style="line-height:2.1;" class="mr-2">and don’t mind working long hours with very little<br> pay, as long as the work is  </span>
						<select class="text_field" style="width:42%" name="rewards_catagory" required>
							<option  selected value="Rewarding">Rewarding</option>
							<option value="Exciting">Exciting</option>
							<option  value="Sexy">Sexy</option>
							<option  value="Mind-Numbingly Repetitive">Mind-Numbingly Repetitive</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">and I’m constantly </span>
						<select class="text_field" style="width:42%" name="learning_catagory" required>
							<option  selected value="Content Writing">Learning</option>
							<option value="Development">Having Fun</option>
							<option  value="UI">Taking Life Easy</option>
							<option  value="UX">Working the Bare Minimum</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">So, here is my</span><input required class="text_field" type="text" name="employee_name" placeholder="Name" style="color:#0056a6;width:26%"><span class="ml-4"><input required class="text_field" type="text" name="phone_no" placeholder="Contact Number" style="color:#0056a6;width:36%"></span><span class="ml-2" style="line-height:2.1"><br>call me and get to know for yourself. </span>  <br><br></li>
					<!--<li><br><br></li>
					<li><span class="mr-2">and my </span>
					<input id="form_email" required class="text_field" type="text" name="resume" placeholder="CV" style="color:#0056a6;width:40%"><span class="ml-2" style="line-height:2.1">call me and get to know for yourself. </span>  
					<br><br></li>
				</ul>	
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
					<input type="submit" class="btn" name="submit" value="APPLY NOW" style="color:black">
						<!--<ul class="list-unstyled list-inline">
							<li class="list-inline-item"><button class="btn mr-3" type="submit" name="submit" value="SUBMIT"><a>Contact Me &ensp;></a></button></li>
						</ul>
					</div>
						</form>
			</div>
						
					</div>
				</div>-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 " id="career_apply_us_section">
				<div class="row mx-0 my-0 px-0 py-0">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 m-auto" id="career_apply_us_section_left" style="background-color:#262e3a;">
						<h4>If you are passionate, young and looking for a career with an exciting start up that is competing on a global stage, this is the company for you…</h4>
						<h4 class="career_apply_us_section_left_title">Drop us your CV and we will get back to you within one business day.</h4>
					</div>
					<!--<div class="col-lg-3 col-md-3 col-sm-12 col-12 m-auto" id="career_apply_us_section_middle" style="background-color:#344050">
						<h4 class="career_apply_us_section_left_title">Drop us your CV and we will get back to you within one business day.</h4>
						<h4>Internship</h4>
						<ul class="list-unstyled">
							<li>Content Writing</li>
							<li>Development</li>
							<li>UI</li>
							<li>UX</li>
							<li>Graphic Design</li>
							<li>Photography</li>
						</ul>
					</div>-->
					
					<div class="col-lg-5 col-md-5 col-sm-12 col-12" id="homepage_contact_us_section_right">
				<form method="post" name="form" action="career_form.php">
				<ul class="list-unstyled">
					<li  ><span class="mr-2">I am a</span>
						<select class="text_field" style="width:32%" name="experience_catagory" required>
							<option value="fresher">Fresher</option>
							<option selected value="experienced">Experienced</option>
						</select>
					 <!--<div class="autocomplete" style="width:80%"><input id="myInput" style="width:60%" class="text_field" autocomplete="off" type="text" name="designation" placeholder="Chief Executive Officer (CEO)" required>-->
						<!--<select class="text_field" style="width:40%" name="positionlist" form="">
							<option value="">CEO</option>
							<option value="">CXO</option>
							<option value="">CFO</option>
						</select></div>-->
					<br><br></li>
					
					<li><span class="mr-2">looking at a career in  </span>
						<select class="text_field" style="width:42%" name="job_catagory" required>
							<option  selected value="Content Writing">Content Writing</option>
							<option value="Development">Development</option>
							<option  value="UI">UI</option>
							<option  value="UX">UX</option>
							<option value="Graphic Design">Graphic Design</option>
							<option value="Photography">Photography</option>
						</select>
					<br><br></li>
					<li ><span  style="line-height:2.4;" class="mr-2">and don’t mind working long hours with very little pay, as long as the work is  </span>
					<select class="text_field" style="width:42%" name="rewards_catagory" required>
							<option  selected value="Rewarding">Rewarding</option>
							<option value="Exciting">Exciting</option>
							<option  value="Sexy">Sexy</option>
							<option  value="Mind-Numbingly Repetitive">Mind-Numbingly Repetitive</option>
						</select>
					<br><br></li>
					
					<li><span class="mr-2">and I’m constantly </span>
						<select class="text_field" style="width:42%" name="learning_catagory" required>
							<option   value="Content Writing">Learning</option>
							<option value="Development">Having Fun</option>
							<option selected value="UI">Taking Life Easy</option>
							<option  value="UX">Working the Bare Minimum</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">So, here is my</span><input required class="text_field" type="text" name="employee_name" placeholder="Name" style="color:#0056a6;width:26%"><span class="ml-4"><input required class="text_field" type="text" name="phone_no" placeholder="Contact Number" style="color:#0056a6;width:36%"></span> <br><br></li>
					<li><span class=""><input required class="text_field" type="text" name="email" placeholder="Email ID" style="color:#0056a6;width:22%"></span><span class="ml-2" style="line-height:2.1">call me / Mail me and get to know for yourself. </span> <br><br></li>
					<!--<li><span class="mr-2">and my </span>
					<input id="form_email" required class="text_field" type="text" name="resume" placeholder="CV" style="color:#0056a6;width:40%"><span class="ml-2" style="line-height:2.1">call me and get to know for yourself. </span>  
					<br><br></li>-->
				</ul>	
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
					<input type="submit" class="btn" name="submit" value="APPLY NOW" style="color:black">
						<!--<ul class="list-unstyled list-inline">
							<li class="list-inline-item"><button class="btn mr-3" type="submit" name="submit" value="SUBMIT"><a>Contact Me &ensp;></a></button></li>
						</ul>-->
					</div>
						</form>
			</div>
						
					</div>
				</div>
			</div>
<!--Footer-->
<?php include("footer.php")?>
	<script>
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
	</script>