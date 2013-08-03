<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>InvestSure | Blog</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<link rel="stylesheet" type="text/css" href="lavalamp.css" media="screen">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp-1.3.5.js"></script>
<script type="text/javascript">
 
    $(function() {
        $('ul#menu1').lavaLamp({ startItem: 1 });
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
                <li><a class="current" href="blog.php" title="">Blog</a></li>
                <li><a href="life.php" title="">Life Insurance</a></li>
				<li><a href="general.php" title="">General Insurance</a></li>
                <li><a href="health.php" title="">Health Insurance</a></li>
				<li><a href="register.php" title="">Register</a></li>
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
    
<div id="left_content_blog">
        <h2>Topics</h2>
        <!-- <p>
InvestSure is an initiatice by Mrs. Veena Kamat and Mr. Naresh Natwal to provide professional and easy Insurance Advice to the public.	        
        </p><p class="clear">&nbsp;</p>
        <h2>Know About Insurance Policies</h2> -->
         <div id="left_nav_blog">
            <ul>                                        
                <li><a href="blog1.php" title="">Life Insurance in India</a></li>
                <li><a href="blog2.php" title="">Health Insurance in India</a></li>
                <li><a href="blog3.php" title="" class="current">Magic of Compounding</a></li>
                <li><a href="blog4.php" title="">Term Plan</a></li>
				<li><a href="blog5.php" title="">ULIP</a></li>
            </ul>
        </div>
        
          
        
        
        
        </div><!--end of left content-->

<h2 style = "margin-left: 15px;">Blog</h2>
    	<div id="wide_content">
        
        	
 <h3>Magic of Compunding</h3>  
            <p>         

			In our school days we have been taught about simple interest and compound
interest.<br /></p>
<center><h4>A = P(1+R)<sup>N</sup></h4></center>
<p>where,<br />
A = Accumulated Amount<br />
P = Principal Amount<br />
R = Rate of Interest<br />
N = Period of Investment<br /></p><br />
<p>
Not all of us use the power of compounding for our investment and do not
start early. For eg. if Mahesh starts saving an amount of Rs. 30,000/- every year
from the age of 21 years and saves for 30 years, then at the age of 51 he would
have accumulated an amount of Rs. 54 Lacs. Ramesh starts saving an amount
of Rs. 45,000/- at the age of 31 and saves for 20 years, then at the age of 51 he
would have accumulated an amount of 28 Lacs. Suresh starts saving an amount
of Rs. 60,000/- at the age of 36 and saves for 15 years, then at the age of 51 he
would have accumulated an amount of 21 Lacs. Thus, though everyone had
invested Rs. 9 lacs the accumulated amount is substantially different. This is
the magic of compounding.

			</p>
			<br />
           <div class="read_more_link_b"> <a href="dl/index.php?id=3">Know More About...</a> </div>
              <br />              
      
            
            
            
            
            
            
        
        </div><!--end of right content-->
    <br />
    <div style="clear:both;"></div>
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