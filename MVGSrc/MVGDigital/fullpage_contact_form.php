 <!-- The Modal -->
  <div class="modal fade" id="fullpage_contact_form">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="modal-dialog">
	
      <div class="modal-content">
        <!-- Modal body -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-0" id="fullpage_contact_us_form">
		<div class="row mx-0">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12" id="fullpage_contact_us_form_left_section">
				<h5 class="fullpage_form_connect_with_us_title">Connect <br>With<br> Us</h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12" id="fullpage_contact_us_form_right_section">
				
				<form method="post" name="form" action="mail-request.php">
				<ul class="list-unstyled">
					<li  ><span class="mr-2">I am the</span>
					 <div class="autocomplete" style="width:75%"><input id="myInput_1" style="width:90%" class="text_field" autocomplete="off" type="text" name="designation" placeholder="Chief Executive Officer (CEO)" required>
						<!--<select class="text_field" style="width:40%" name="positionlist" form="">
							<option value="">CEO</option>
							<option value="">CXO</option>
							<option value="">CFO</option>
						</select>--></div><span class="error_form" id="fname_error_message"></span>
					<br><br></li>
					
					<li><span class="mr-2">of a</span>
						<select class="text_field" style="width:60%" name="cmm_level" required>
							<option   value="Small / Start Up Firm">Small / Start Up Firm</option>
							<option  value="Medium Size Company">Medium Size Company</option>
							<option   value="Large Enterprise">Large Enterprise</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">looking for digital</span>
					<select class="text_field" style="width:35%" name="digital_section" required>
							<option value="Consulting">Consulting</option>
							<option value="Engagement">Engagement</option>
							<option value="Transformation">Transformation</option>
							<option value="Proximity Marketing">Proximity Marketing</option>
							<option value="B2B & B2C Prospecting">B2B & B2C Prospecting </option>
							<option value="Content Based Marketing">Content Based Marketing</option>
							<option value="Game-Based Learning">Game-Based Learning</option>
							<option value="Proximity Services">Proximity Services</option>
							<option value="Records Digitization">Records Digitization</option>
							<option value="Conversational AI">Conversational AI</option>
						</select>
					<br><br></li>
					<li><span class="mr-2">My email ID is</span><input id="form_email" required class="text_field" type="text" name="email" placeholder="Company email Id" style="color:#0056a6;width:52%">
					<span class="error_form" id="email_error_message"></span>
					<br><br></li>
					<li><span class="mr-2">My mobile number is</span><input required class="text_field" type="text" name="phone_no" placeholder="Phone number" style="color:#0056a6;width:45%"><br><br></li>
				</ul>	
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
					<input type="submit" class="btn" name="submit" value="Contact Me Now" style="color:black">
						<!--<ul class="list-unstyled list-inline">
							<li class="list-inline-item"><button class="btn mr-3" type="submit" name="submit" value="SUBMIT"><a>Contact Me &ensp;></a></button></li>
						</ul>-->
					</div>
						</form>
			</div>
			</div>
		</div>		
			<!--<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="fullpage_contact_us_form" style="margin-left:10%;margin-right:10%;">
			
				<h5 class="connect_with_us_title">Connect With Us</h5>
				<form method="post" name="form" action="mail-request.php">
				<ul class="list-unstyled">
					<li><span class="mr-2">I am </span><input class="text_field" type="text" name="name" placeholder="CEO" style="color:#0056a6;width:50%"><br><br></li>
					<li><span class="mr-2">of a</span><input class="text_field" type="email" name="email" placeholder="Medium Sized Company" style="color:#0056a6;width:60%"><br><br></li>
					<li><span class="mr-2">looking for digital</span><input class="text_field" type="text" name="Phone-No" placeholder="Transformation" style="color:#0056a6;width:45%"><br><br></li>
					<li><span class="mr-2">My email ID is</span><input class="text_field" type="text" name="Phone-No" placeholder="Enter your campany email id" style="color:#0056a6;width:55%"><br><br></li>
					<li><span class="mr-2">My mobile number is</span><input class="text_field" type="text" name="Phone-No" placeholder="Your Phone number" style="color:#0056a6;width:45%"><br><br></li>
				</ul>	
				</form>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_button_section px-0">
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item"><button class="btn mr-3" type="btn"><a href="">Contact Me &ensp;></a></button></li>
						</ul>	
					</div>
			</div>-->
       
      </div>
    </div>
  </div>
  
  <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var designation = ["Chief Technology Officer (CTO)","Director of Technology","IT Director","IT Manager","Management Information Systems Director","Technical Operations Officer","Information Security","Security Specialist","Senior Security Specialist","Application Developer","Applications Engineer","Associate Developer","Computer Programmer","Developer","Junior Software Engineer","Programmer","Programmer Analyst","Senior Applications Engineer","Senior Programmer","Senior Programmer Analyst","Senior Software Engineer","Senior System Architect","Senior System Designer","Senior Systems Software Engineer","Software Architect","Software Developer","Software Engineer","Software Quality Assurance Analyst","System Architect","Systems Software Engineer","Front End Developer","Senior Web Administrator","Senior Web Developer","Web Administrator","Web Developer","Webmaster","Chief Executive Officer (CEO)","Chief Financial Officer (CFO)","Chief Operating Officer (COO)","Chief Technical Officer (CTO)","Chief Experience Officer (CXO)","Chief Information Officer (CIO)","Chief Marketing Officer (CMO)","Project Manager","Project Coordinator","Team Leader"];

/*initiate the autocomplete function on the "myInput" element, and pass along the designation array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput_1"), designation);




$(document).ready(function(){
$("#fname_error_message").hide();
$("#email_error_message").hide();

$("#myInput_1").focusout(function(){
check_fname();
});

$("#form_email").focusout(function() {
check_email();
});

function check_fname() {
var pattern = /^[a-zA-Z]+$/;
var fname = $("#myInput_1").val();
if (pattern.test(fname) && fname !== '') {
$("#fname_error_message").hide();
$("#myInput_1").css("border-bottom","2px solid #34F458");
} else {
$("#fname_error_message").html("Should contain only Characters");
$("#fname_error_message").show();
$("#myInput_1").css("border-bottom","2px solid #F90A0A");
error_fname = true;
}
}




function check_email() {
var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]$/;
var email = $("#form_email").val();
if(pattern.test(email) && email !== '') {
$("#email_error_message").hide();
$("#form_email").css("border-bottom","2px solid #34F458");
} else {
$("#email_error_message").html("Invalid Email");
$("#email_error_message").show();
$("#form_email").css("border-bottom","2px solid #F90A0A");
error_email = true;
}
}


});
</script>