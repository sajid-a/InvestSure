<?php

include_once"config.php";
$x=0;
$final_report= "Please complete the form below..";
if(isset($_POST['submit'])){
$yop = $_POST['yop'];
$comp = $_POST['comp'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$stream = $_POST['stream'];
$job = $_POST['job'];
$c1 = $_POST['c1'];
$s_name = 'NA';
if($_POST['s_name']!=null)
{
$s_name = $_POST['s_name'];
}

if($yop == NULL OR $name == NULL OR $mobile == NULL OR $email == NULL OR $job == NULL OR $c1 == NULL OR $comp == NULL OR $stream == NULL)
{
$final_report= "Please complete the form below..";
echo "<script>alert('Please complete the form below..');</script>" ;
}else{
if(strlen($name) <= 2){
$final_report="Your Name must be atleast 3  characters..";
echo "<script>alert('Your Name must be atleast 3  characters..');</script>" ;
}else{
$check_members = mysql_query("SELECT * FROM `registration` WHERE `email_id` = '$email'");   
if(mysql_num_rows($check_members) != 0){
$final_report="This Email ID is Already Registered."; 
echo "<script>alert('This Email ID is Already Registered.');</script>" ; 
}else{ 
if(strlen($email) <= 2){
$final_report="Your email must be atleast 3 characters..";
echo "<script>alert('Your email must be atleast 3 characters..');</script>" ;
}else{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){ 
$final_report="Your email address was not valid..";
echo "<script>alert('Your email address was not valid..');</script>" ;
}
else{
if(!preg_match("/^[7-9][0-9]{9}$/i",$mobile)){
$final_report="Enter a valid mobile number..";
echo "<script>alert('Enter a valid mobile number..');</script>" ;
}else
{
$flag = 0;
while($flag==0)
{
$ai = rand();
$ai = $ai + 1;
$uid = "Recon".$ai;
$check_members = mysql_query("SELECT * FROM `registration` where uid = '$ai'");
if(mysql_num_rows($check_members)==0) 
{
$flag = 1;
}
}


$to = $email;
$subject = "Registration Successful";
$message = "<html><body><p>You have succesfully registered for Reconnect.<br /><br />Unique ID: ".$uid.". <br />Name: ".$name."<br />Mobile: ".$mobile."<br /><br />We look forward to seeing you on the day. Visit reconnect.cosweb.in for more details.<br /><br /><b>Please present a print copy of this mail at the registration desk on the day.</b><br/><br />Regards, <br />Reconect Team</body></html>";
$from = "no-reply@reconnect.com";
$headers = "From: Reconnect <no-reply@reconnect.com>\n" .
    "MIME-Version: 1.0\n" .
    "Content-type: text/html; charset=iso-8859-1"; 


$sql="INSERT INTO registration (uid,year_of_passing,name,email_id,mobile,stream,company,job,spouse,s_name)VALUES('$uid','$yop','$name','$email','$mobile','$stream','$comp','$job','$c1','$s_name')";
$result=mysql_query($sql) or die(mysql_error());
if($result){

echo "<script>alert('Registration Successful!! Your Unique ID is ".$uid." Please Check your E-Mail for the confirmation mail and bring a printout of the same');</script>" ;
$final_report= "Registration Successful!! Your Unique ID is ".$uid."<br />Please Check your E-Mail for the confirmation mail and bring a printout of the same during the day of the event.";
mail($to,$subject,$message,$headers);
$x=1;
}


}}}}}}}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reconnect SIESGST</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<style>
 #appear_div {
display: block;
 }
</style>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

function enable_area(opt)
{
	document.forms[0].s_name.disabled = (opt == "Yes" ? false : true);
document.forms[0].s_name.value = (opt == "Yes" ? "" : "NA");

}

 </script>
</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    <div id="site_title">
            <a href=""><span>A Portal for SIESGST Alumni</span></a>
        </div> <!-- end of site_title -->
        
        <div id="social_box">
        	
            <a href="#"><img src="images/2.png" alt="feed" /></a>
        </div>
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="registration.php" class="current">Registration</a></li>
              
                <li><a href="contact.html">Contact</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    
    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
    	<div id="templatemo_content">
        <h2>Please register yourself so that we can confirm your presence<br />All Fields are Mandatory<br /><?echo $final_report;?></h2>
            <div class="content_box"><?php if($x!=1){?>
			<div id="contact_form">
                <form method="post" name="contact" action="registration.php" id = "contact">
                                
								<table>
                                <tr>
								<td>
								<label for="author">Name:</label> </td><td><input type="text" id="author" name="name" class="required input_field" />
                                <div class="cleaner_h10"></div></td></tr>
								<tr><td>
								<label for="author">Mobile:</label></td><td><input type="text" id="author" name="mobile" class="required input_field" />(Do not enter a leading 0)
                                <div class="cleaner_h10"></div></td></tr>
                                
								<tr><td>
                                <label for="email">Email:</label></td><td> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div></td></tr>
                                
								<tr><td>
								<label for="email">Year of passing:</label></td><td>
								<select name="yop" class="required input_field">
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								
								</select>
		<div class="cleaner_h10"></div></td></tr>
		                                <tr><td><label for="email">Stream:</label></td><td>
								<select name="stream" class="required input_field">
								<option value="Computers">Computers</option>
								<option value="IT">Information Technology</option>
								<option value="EXTC">Electronics and Telecommunication</option>
								<option value="PPT">Printing and Packaging Technology</option>
								<option value="BT">Bio - Technology</option>
								
								</select>
		<div class="cleaner_h10"></div></td></tr>
								<tr><td><label for="author">Company's Name</label> </td><td><input type="text" id="text" name="comp" class="required input_field" />
                                <div class="cleaner_h10"></div></td></tr>
								<tr><td>
                                <label for="text">Job Description:</label> </td><td><textarea id="text" name="job" rows="5" class="required input_field" /></textarea>
                                <div class="cleaner_h10"></div></td></tr>
								<tr><td>
								<label for="author">Will your spouse be joining us:</label>
								</td><td>
								<input type="radio" name="c1" value = "Yes" onClick="enable_area(this.value);">Yes<input type="radio" name="c1" value = "No" onClick="enable_area(this.value);">No
								<div class="cleaner_h10"></div></td></tr>
								<tr><td><div id = "appear_div">
								<label for="author">Spouse Name:</label> </div></td><td><div id = "appear_div"><input type="text" id="authors" name="s_name" class="required input_field" /></div>
                                <div class="cleaner_h10"></div></td></tr>
                               <tr><td>
                                <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" /></td><td>
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" /></td></tr>
                            
                            </form></table>
							</div><?php }?>
            </div>
            
            <div class="last_content_box">
              
            </div>
        	
        </div> <!-- end of content -->
        
 
    <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
        
    <center>
            <h4>Designed By Sajid and Srinivasan</h4>
            <h4>Powered by <a href="http:\\www.cosweb.in">Cosweb</a></h4>          
        
       
    </center>
		<div class="cleaner"></div>
    </div> <!-- end of templatemo_footer -->
</div><!-- end of templatemo_footer -->
</div> <!-- end of templatemo_footer wrapper -->

</body>
</html>