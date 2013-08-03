<? 
session_start();
session_unset('user');
session_unset('name');
session_unset('pass');
session_destroy();
setcookie("user", "", time()-3600);
setcookie("name", "", time()-3600);
header( "refresh:0;url=home.php" );
?> 

