<?php

include_once"config.php";

if (!isset($_COOKIE['admin']))
{
echo "<script>alert('You are not authorized to view this page');document.location.href='../index.php';</script>";
}

$report = "Edit Blog Data";

if (isset($_POST['login']) && $_FILES["file"]["error"] == 0)
{

$title = $_POST['title'];
$content = $_POST['content'];
$date = date("Y-m-d");
$result = mysql_query("INSERT INTO blog (title, content, date) VALUES ('$title','$content','$date')") or die(mysql_error());
$report = "Blog Updated Successfully.";


if ($_FILES["file"]["error"] > 0)
    {
    echo "No File attached<br />";
    }
  else
    {
   
    if (file_exists("../dl/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../dl/" . $_FILES["file"]["name"]);
   
	  $str = "../dl/".$_FILES["file"]["name"]."";
	  $str1 = "../dl/".$title.".pdf";
	  rename($str,$str1);
      }
    }
	
}

if (isset($_POST['login']) && $_FILES["file"]["error"] > 0)
{
$title = $_POST['title'];
$content = $_POST['content'];
$report = "Please check file that has been attached. There appears to be some error in it.";
}

?>

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
        $('ul#menu1').lavaLamp({ startItem: 0 });
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
        <p style="margin-right: 0px">Welcome <?php if(!isset($_COOKIE['admin'])){echo "Guest";} else {echo "<b> " . $_COOKIE['admin'] . "</b> | <a href = 'logout.php' style = 'text-decoration: none; color: #416271;'>Logout</a>";} ?></p>
        <div id="menu">
            <ul id="menu1">                                        
                <li class="current"><a  class="current" href="admin.php" title="">Add Blog</a></li>
                <li><a href="view.php" title="">View Blogs</a></li>
                <li><a href="add.php" title="">Add Admin</a></li>				
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
                Any Content that you may need to add.
            </ul>
        </div>
        
          
        
        
        
        </div><!--end of left content-->

<h2 style = "margin-left: 15px;">Add Blog</h2>
    	<div id="wide_content">
        
        	

            
                       
 <form method = "post" enctype="multipart/form-data">
                    
                  <p style = "margin-left: 80px;"> <?php echo $report; ?><br /><br /> </p>
				  <table>
                    <tr><td><label>Title:</label></td><td><input type="text" name="title" class="contact_inputa" value = "<?php if(isset($_POST['title'])){echo $title; }else {echo "Enter Blog Title";}?>"/></td></tr>
                                        
                    
                     
                    <tr><td><label>Content:</label></td><td><textarea rows=10 cols = 40 name="content" class="contact_textareaa" ><?php if(isset($_POST['content'])){echo $content; }else {echo "Enter Blog Content Here";}?></textarea></td></tr>
                                      
                    
                    
					<tr><td><label>File:</label></td><td><input type="file" name="file" id = "file" class="contact_inputa" value = "Enter Blog Title"/></td></tr>
                                      
                    

					<tr><td colspan = 2 align = right><input type = "submit" value = "Submit" name = "login" class="send" /></td></tr>
					</table>
            
                </form>
            
            
            
        
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