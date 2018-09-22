<?php  
$db = mysql_connect("mysql17.000webhost.com","a6592088_root","lance123")   
    or die("failed！");  
  
mysql_select_db("a6592088_baby")  
    or die ("cannot cannot to the user".mysql_error());  
$email=$_POST['email'];  
$name=$_POST['name'];  
$password=$_POST['password'];  
$pwd_again=$_POST['pwd_again'];
$address=$_POST['address'];
$phone=$_POST['phone'];  
if($name==""|| $password==""||$pwd_again==""||$email==""||$address==""||$phone=="")  
{  
     echo " <script >alert('Please provide complete information!.');window.window.location.href='register.php';</script> ";
}  
else   
{  
    if($password!=$pwd_again)  
    {  
       echo " <script >alert('the two passwords are different!please re-enter.');window.window.location.href='register.php';</script> ";
          
    }  
    
    else  
    {  
        $user_id=hash('crc32',$email);
        $sql="insert into customers values('$user_id','$password','$name','$address','$phone','$email')";  
        $result=mysql_query($sql);  
        if(!$result)  
        {  
            echo "<script >alert('This email has aready been registered!.');window.window.location.href='register.php';</script> ";
         
        }  
        else   
        {  
            
            echo "<script >alert('Register successfully!');window.window.location.href='logIn.php';</script> ";  
        }  
    }  
}  
 
?>  