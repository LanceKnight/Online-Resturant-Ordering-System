<?php
$db = mysql_connect("mysql17.000webhost.com","a6592088_root","lance123")   
    or die("failed！");  
  
mysql_select_db("a6592088_baby")  
    or die ("cannot cannot to the user".mysql_error());  
  $email=$_COOKIE['email'];
  $Egg_roll=$_POST['Egg_roll'];
  $Steamed_Dumpling=$_POST['Steamed_Dumpling'];
  $Fried_Dumpling=$_POST['Fried_Dumpling'];
  $Crab_Ragoon=$_POST['Crab_Ragoon'];
  $Chicken_Wing=$_POST['Chicken_Wing'];
  /*
  $Hot_Sour_Soup=$_POST['Hot Sour Soup'];
  $Wonton_Soup=$_POST['Wonton Soup'];
  $Miso_Soup=$_POST['Miso Soup'];
  $Soda=$_POST['Soda'];
  $Ice_Tea=$_POST['Ice Tea'];
  $Hot_Tea=$_POST['Hot Tea'];
  $HAPPY_FAMILY_NEST=$_POST['HAPPY FAMILY NEST'];
  $GENERAL_TSAO_CHICKEN=$_POST['GENERAL TSAO CHICKEN'];
  $WALNUT_HONEY_MAYO_CHICKEN=$_POST['WALNUT HONEY MAYO CHICKEN'];
  $SESAME_CHICKEN=$_POST['SESAME CHICKEN'];
  $ORANGE_CHICKEN=$_POST['ORANGE CHICKEN'];
  $CHICKEN_FRIED_RICE=$_POST['CHICKEN FRIED RICE'];
  $BEEF_FRIED_RICE=$_POST['BEEF FRIED RICE'];
  $SHRIMP_FIRED_RICE=$_POST['SHRIMP FIRED RICE'];
  $Fired_Rice=$_POST['Fired Rice'];
  $Steamed_Rice=$_POST['Steamed Rice'];
  $Steamed_Noodle=$_POST['Steamed Noodle'];
  */
  $total = $Egg_roll*1.25+$Steamed_Dumpling*4.99+$Fried_Dumpling*4.99+$Crab_Ragoon*4.99+$Chicken_Wing*4.99;
//echo $total;
  $u_id=hash('crc32',$email);
  $sql0="INSERT INTO my_order(user_id, amount) values('$u_id','$total')";
  //$sql0="INSERT INTO order(user_id, total_amount) values('234',123)";
  $result0 = mysql_query($sql0);
 $order_id = mysql_insert_id();
echo mysql_error();

  echo "Your order has been placed";
  
  $sql1 = "INSERT INTO order_details(order_id, dish_id,quantity) values('$order_id', '1','$Egg_roll')";
  $sql2 = "INSERT INTO order_details(order_id,dish_id,quantity) values('$order_id','2','$Steamed_Dumpling')";
  $sql3 = "INSERT INTO order_details(order_id,dish_id,quantity) values('$order_id','3','$Fried_Dumpling')";
  $sql4 = "INSERT INTO order_details(order_id,dish_id,quantity) values('$order_id','4','$Crab_Ragoon')";
  $sql5 = "INSERT INTO order_details(order_id,dish_id,quantity) values('$order_id','5','$Chicken_Wing')";
  
  $result = mysql_query($sql1);
 $result = mysql_query($sql2);
 $result = mysql_query($sql3);
 $result = mysql_query($sql4);
 $result = mysql_query($sql5);
  echo mysql_error();




?>		