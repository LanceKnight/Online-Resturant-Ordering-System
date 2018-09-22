<?php  
// connect to DB  
function(){  
      
$db = mysql_connect("mysql17.000webhost.com","a6592088_root","lance123","a6592088_baby")   
    or die("failed");  
  
mysql_select_db("user")  
    or die ("cannot cannot to the user".mysql_error());  
      
      
}  
      
?>  