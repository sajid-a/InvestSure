<?php

include_once"config.php";
$report = "Enter Details";
if(isset($_POST['register'])){
$name = $_POST['name'];
$passid = $_POST['passid'];
$uemail = $_POST['uemail'];
$pass2 = $_POST['pass2'];
$utele = $_POST['utele'];

if($name == NULL OR $passid == NULL OR $uemail == NULL OR $pass2 == NULL)
{
$report = "Please complete the form below.";

}else{
if(strlen($name) <= 2){
$report = "Your Name must be atleast 3 characters.";
}else{
$check_members = mysql_query("SELECT * FROM `members` WHERE `email` = '$uemail'");   
if(mysql_num_rows($check_members) != 0){
$report = "This Email is already Registered";

}else{ 
if(strlen($passid) <= 2){
$report = "Password must be atleast 3 characters.";

}else{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $uemail)){ 
$report = "email address not valid.";

}else{
if(!preg_match("/^[7-9][0-9]{9}$/i",$utele)){
$report = "enter valid mobile number.";

}else
if($passid != $pass2)
{
$report = "Passwords do not match.";

}else
{
$tbl_name='members';
$sql="INSERT INTO $tbl_name(name, email, pass, phone)VALUES('$name', '$uemail', '$passid', '$utele')";
$result=mysql_query($sql);
if($result)
{
$report = "Registration Successful. Please Proceed to login";
header( "refresh:2;url=login.php" );
}
}}}}}}}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>InvestSure | Register</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<link rel="stylesheet" type="text/css" href="lavalamp.css" media="screen">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp-1.3.5.js"></script>
<script type="text/javascript">
 
    $(function() {
        $('ul#menu1').lavaLamp({ startItem: 5 });
    });
 
</script> 
<script type="text/javascript" language="javascript" src="js/jquery.jcontent.0.8.js"></script>
        <link href="css/demo.css" rel="stylesheet" type="text/css"/>  
        <link href="css/jcontent.css" rel="stylesheet" type="text/css"/> 
		
		<script type="text/javascript" language="javascript">
		$("document").ready(function(){
		$("div#demo2").jContent({orientation: 'vertical', 
                                         easing: "easeOutCirc", 
                                         duration: 500}); 
		});								 
		</script>	
</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="home.php"><img src="images/logo.png" alt="" title="" border="0"></a>&nbsp;
		</div>
        <p style="margin-right: 0px">Welcome <?php if(!isset($_COOKIE['name'])){echo "Guest";} else {echo "<b> " . $_COOKIE['name'] . "</b> | <a href = 'logout.php' style = 'text-decoration: none; color: #416271;'>Logout</a>";} ?></p>
        <div id="menu">
            <ul id="menu1">                                        
                <li class="current"><a href="home.php" title="">Home</a></li>
                <li><a href="blog.php" title="">Blog</a></li>
                <li><a href="life.php" title="">Life Insurance</a></li>
				<li><a href="general.php" title="">General Insurance</a></li>
                <li><a href="health.php" title="">Health Insurance</a></li>
				<li><a href="register.php" title="" class="current">Register</a></li>
				<li><a href="login.php" title="">Login</a></li>
                <li><a href="contact.php" title="">Contact Us</a></li>
				
            </ul>
        </div>
        
    </div>
    
    <div class="box">
    	<div class="logo_1">
        <img src="images/logo_1.png" alt="" title="">             
        </div>
        <div class="text_content">
        <h1>What is InvestSure?</h1>
        <p class="green">
        InvestSure is an initiative by a group of professionals to provide professional
insurance and investment advice to the common mass. The purpose of this site is to
provide appropriate information related to insurance and investment to all people
enabling them to take informed investment and insurance decisions. 
        </p>
       <div class="read_more"><a href="about.php">Read More</a></div>
        </div>
        
        <div id="right_nav">
<div id="demo2" class="demo2">
            <a title="" href="#" class="prev"></a>
            <div class="slides">
                <div>
                    
                    <p class="txt">
						
						TERM PLAN is the most important Life Insurance Plan.</p>
                </div>
                <div>
                    
                    <p class="txt">
						
						Insure yourselves to 10 TIMES your Annual Income.</p>
                </div>
                
                <div>
                    
                    <p class="txt">
					
						Cover your entire family's health care expenses through "FAMILY FLOATER".</p>
                </div>
                <div>
                    
                    <p class="txt">
					
						Invest in ULIP only if you PLAN LONG TERM.</p>
                </div>  
				<div>
                    
                    <p class="txt">
					
						Never get carried away by what Insurance Advisor tells you. Do your home work.</p>
                </div> 
				<div>
                    
                    <p class="txt">
					
						As of now, the Net Returns in Insurance is never greater than 10%. However, it
does offer life cover along with investment.</p>
                </div> 
				<div>
                    
                    <p class="txt">
					
						Get INSURED early to take advantage of low mortality rate.</p>
                </div> 
				<div>
                    
                    <p class="txt">
					
						Start INVESTMENT early to use the Power of Compounding.</p>
                </div> 
				<div>
                    
                    <p class="txt">
					
						Lowest Premium Policy need not be the best Term Plan option. Look at the Claim
Settlement Ratio.</p>
                </div> 
				<div>
                    
                    <p class="txt">
					
						Live a "HEALTHY LIFE STYLE" but protect yourself against uncertainties through<br />
Life and Health Insurance.</p>
                </div> 
            </div>
            <a title="" href="#" class="next"></a>
        </div>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Welcome to InvestSure</h2>
        <!-- <p>
InvestSure is an initiatice by Mrs. Veena Kamat and Mr. Naresh Natwal to provide professional and easy Insurance Advice to the public.	        
        </p><p class="clear">&nbsp;</p>
        <h2>Know About Insurance Policies</h2> -->
         <div id="left_nav">
            <ul>                                        
                <li><a href="#" title="">Be Informed</a></li>
                <li><a href="#" title="">Insure on Time</a></li>
                <li><a href="#" title="">Invest on Time</a></li>
                <li><a href="#" title="">Feel Secure</a></li>
				<li><a href="#" title="">Make Secure</a></li>
            </ul>
        </div>
        
          
        
        
        
        </div><!--end of left content-->



    	<div id="right_content">
        <h2>Register Here</h2>

                 <form method = "post">
                    
                   <p style = "margin-left: 80px;"> <?php echo $report; ?><br /><br /> </p>
                    <label>Name:</label><input type="text" name="name" class="contact_input" />
                                        
                    <br /><br />
					
					<label>Email:</label><input type="text" name="uemail" class="contact_input" />
                                        
                    <br /><br />
                     
                    <label>Password:</label><input type="password" name="passid" class="contact_input" />
                                      
                    <br /><br />
					
					<label>ReType Password:</label><input type="password" name="pass2" class="contact_input" />
                                      
                    <br /><br />
					
					<label>Mobile:</label><input type="text" name="utele" class="contact_input" />
                                      
                    <br /><br />
                    

					<input type = "submit" value = "Submit" name = "register" class="send" />
            
                </form>
            
            
            
            
            
        
        </div><!--end of right content-->


    
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 

     <div id="footer">
     	
    	<div class="footer_links"> 
        ||<a href="blog.php">Blog</a>
		||<a href="register.php">Register</a>
        ||<a href="contact.php">Contact Us</a> ||
        &copy; InvestSure

        </div>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>