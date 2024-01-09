<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
body
{
	background:#f1f2f3;
}
.header-logo
{
	padding:2% 0 2% 6%;
}
.echo-message
{
	text-align:center;
	margin-top:10%;
	
}
.submisson-logo
{
	
}
</style>
</head>
<body>
<header>
	<div class="head-logo">
		<a href=""><img class="header-logo img-fluid" src="images/mvg-head-logo.png" alt="" name=""></a>
	</div>
</header>
<?php 
	echo "<meta http-equiv='Refresh' content='5;url=http://mvgdigital.com/staging/
	'>";
	if(isset($_POST['submit'])){
		$experience_catagory=$_POST['experience_catagory'];
		$job_catagory=$_POST['job_catagory'];
		$rewards_catagory=$_POST['rewards_catagory'];
		$learning_catagory=$_POST['learning_catagory'];
		$employee_name=$_POST['employee_name'];
		$phone_no=$_POST['phone_no'];
		$email = $_POST['email'];
		
	require 'phpmailer/PHPMailerAutoload.php';
	//we need to create an instance of PHPMailer
    $mail = new PHPMailer();	
	//Server settings
    $mail->SMTPDebug = 0;                                 
    $mail->isSMTP();                                     
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                               
    $mail->Username = 'ravitestphp24@gmail.com';                
    $mail->Password = 'phptest123';                           
    $mail->SMTPSecure = 'tls';                          
    $mail->Port = 587;                                  
	//Recipients
    $mail->setFrom('ravitestphp24@gmail.com', 'MVG Digital');
    $mail->addAddress('ravishankar.pmo@gmail.com');
	$mail->addCC('');
	
	    
	//Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Website Enquiry';
    $mail->Body    ="<h4>Hii,<br> We got new request from our website..<br><br>
	<table>
	<tr>
		<td>
		Fresher/Experience :$experience_catagory
		</td>
	</tr>
	<tr>
		<td>
		Designation :$job_catagory
		</td>
	</tr>
	<tr>
		<td>
		Rewards :$rewards_catagory
		</td>
	</tr>
	<tr>
		<td>
		Purpose Of Working :$learning_catagory
		</td>
	</tr>
	<tr>
		<td>
		Name :$employee_name
		</td>
	</tr>
	<tr>
		<td>
		Contact Number :$phone_no
		</td>
	</tr>
	<tr>
		<td>
		Email :$email
		</td>
	</tr>
	
	
	</table><br><br>
	MVG DIGITAL
	</h4>";
	$mail->Headers = '';
	//send an email
    if (!$mail->send())
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    else
        echo "<h1 class='echo-message'> Sent Successfully! <br>Thank you"." ".$designation.", We will contact you shortly!</h1>";
	}
?>



</body>	
</html>