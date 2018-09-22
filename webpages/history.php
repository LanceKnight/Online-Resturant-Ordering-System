<?php  
//echo json_encode($_POST);  
$con = mysql_connect("mysql17.000webhost.com","a6592088_root","lance123");
if(!$con){
	die("error:can not connect to MySql");
}
mysql_select_db("a6592088_baby",$con);
//$uid = $_POST['uid'];
$email = $_COOKIE[email];
$r = mysql_query("SELECT user_id FROM customers WHERE email = '$email'");
while($r1 = mysql_fetch_row($r)){
	$uid = $r1[0];
	//echo $uid;
}
$result = mysql_query("SELECT order_id,amount FROM my_order WHERE user_id = '$uid'");
$arr = array();
$i=0;
while($row=mysql_fetch_row($result)){
	$arr[$i][0] = $row[0];
	$arr[$i][1] = $row[1];
	$i = $i+1;

}
echo json_encode($arr);


?>  