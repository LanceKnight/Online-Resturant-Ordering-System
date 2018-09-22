<?php

require_once 'connectvars.php';

$error_msg = "";

if(!isset($_COOKIE['email'])){
    if(isset($_POST['submit'])){
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $user_username = mysqli_real_escape_string($dbc,trim($_POST['username']));
        $user_password = mysqli_real_escape_string($dbc,trim($_POST['password']));

        if(!empty($user_username)&&!empty($user_password)){
            
            $query = "SELECT email FROM customers WHERE email = '$user_username' AND "."user_psw = '$user_password'";
            
            $data = mysqli_query($dbc,$query);
            
            if(mysqli_num_rows($data)==1){
                $row = mysqli_fetch_array($data);
                setcookie('email',$row['email']);
                //setcookie('username',$row['username']);
                $home_url = 'loged.php';
                header('Location: '.$home_url);
            }else{
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
        }else{
            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
    }
}else{
    $home_url = 'loged.php';
    header('Location: '.$home_url);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Group Project Demo - Chinese Resturant
</title><meta http-equiv="x-ua-compatible" content="IE=9" /><style type="text/css">@import "http://www.xiaowaifood.com/App_Themes/_Default/s_default.css";</style><meta name="keywords" content="Yu's Asian Diner, Plano, 75075, Chinese, restaurant, discount, coupon, coupons, delivery, pickup, catering" /><meta name="description" content="View Yu's Asian Diner menu, Order Chinese Food Delivery Catering Online from Yu's Asian Diner, Best Chinese Delivery Catering in Plano, TX." /><style type="text/css">@import "http://www.xiaowaifood.com/CommonControl/UI/Message/jquery.jgrowl.css";</style></head>
<body>
    <center>
        
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMzE5MzU3OTAwZGRYDUhu6vNCoLYUKH/wGYYIdwSVJQ==" />
</div>


<script src="http://www.xiaowaifood.com/js/jquery-1.4.2.min.js" type="text/javascript"></script>

<script src="http://www.xiaowaifood.com/js/mobile.js" type="text/javascript"></script>
<script src="http://www.xiaowaifood.com/js/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="http://www.xiaowaifood.com/js/jquery.jgrowl.js" type="text/javascript"></script>
<script src="http://www.xiaowaifood.com/js/storemessage.js" type="text/javascript"></script>
            <div class="body">
                <div id="ctl00_pnlBannerFrame" class="BannerFrame">
	
                    <div id="ctl00_pnlBannerStarter" class="logo" style="background-image: url(banner.gif);">
		
                        <div style='float: left;'></div>
                    
	</div>
                    <div class="clear">
                    </div>
                    
                
</div>
                <div class="menubar">
                    <table style='width: 100%; text-align: center;' cellpadding='0px' cellspacing='0px'>
                        <tr>
                            <td style="width:200px;">
                            <ul>
                              <li><a href="http://projectdomo.comule.com" title="homepage"><span>Homepage</span></nobr></a></li></ul>
                        </td> 
                        
                        <td style="width:200px;">
                            <ul>
                              <li><a href="menu.html" title="menu"><span>Menu</span></nobr></a></li></ul>
                        </td> 
                        <td style="width:200px;">
                            <ul><li><a href="history.html"><span>Order History</span></nobr></a></li></ul>
                        </td> 
                        
                        <td style="width:200px;">
                            <ul><li><a href="reservation.php"><span>Reservation</span></nobr></a></li></ul>
                        </td> 
                        <td style="width:200px;">
                            <ul><li><a href="register.php" title="Sign Up"><span>Sign Up</span></nobr></a></li></ul>
                        </td> 
                            
                        <td style="width:200px;">
                            <ul><li><a href="logIn.php" title="Log In"><span>Log In</span></nobr></a></li></ul>
                        </td>
                        
                       
                        </tr>
                    </table>
                </div>
                <div id="contentdiv">
                    
    


   
<h1>Log In</h1>
        <!--&#36890;&#36807;$_COOKIE['email']&#36827;&#34892;&#21028;&#26029;&#65292;&#22914;&#26524;&#29992;&#25143;&#26410;&#30331;&#24405;&#65292;&#21017;&#26174;&#31034;&#30331;&#24405;&#34920;&#21333;&#65292;&#35753;&#29992;&#25143;&#36755;&#20837;&#29992;&#25143;&#21517;&#21644;&#23494;&#30721;-->
        <?php
        if(empty($_COOKIE['email'])){
            echo '<p class="error">'.$error_msg.'</p>';
        ?>
        <!-- $_SERVER['PHP_SELF']&#20195;&#34920;&#29992;&#25143;&#25552;&#20132;&#34920;&#21333;&#26102;&#65292;&#35843;&#29992;&#33258;&#36523;php&#25991;&#20214; -->
        <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset  style="width:250px;">
                <legend>Log In</legend>

                <label for="username">email:</label></br>
                <!-- &#22914;&#26524;&#29992;&#25143;&#24050;&#36755;&#36807;&#29992;&#25143;&#21517;&#65292;&#21017;&#22238;&#26174;&#29992;&#25143;&#21517; -->
                <input type="text" id="username" name="username"
                value="<?php if(!empty($user_username)) echo $user_username; ?>" />
                <br/>
                <label for="password">Password:</label></br>
                <input type="password" id="password" name="password"/>
            </fieldset>    
            <br/>
            <input type="submit" value="Log In" name="submit"/>
        </form>
        <?php
        }
        ?>
</div>

<script type="text/javascript"> 
 
$(document).ready(function() {
    $('.slideshowrol').cycle({
		speed:    600,
		timeout:  5000,
		shuffle:  {left:-300, top:30},
		clip:     'zoom',
		fx:       'fade',
		before:   function(c,n,o) {$(o.caption).html(o.currFx);},
		caption:  '#caption1'
    });
});
</script>



<div id="message" style="display: none;">
    
</div>

<script type="text/javascript"> 
		(function($){
			$(document).ready(function(){
				$.jGrowl.defaults.closer = false;
				if ( !$.browser.safari ) {
					$.jGrowl.defaults.animateOpen = {
						width: 'show'
					};

					$.jGrowl.defaults.animateClose = {
						width: 'hide'
					};
				}
                var message = $.trim($('#message')[0].innerHTML);
                if (message != '')
                {
				    $.jGrowl(message, { sticky: true, position: 'bottom-right'});
				}
			});

		})(jQuery);
</script>



                </div>
                
                <div id="ctl00_pnlFooterSimple" class="footerrol">
	
                    
                
</div>
            </div>
            <div style="clear: both;">
            </div>
            <div id="ctl00_pnlFooter" class="footer">
	
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 210px; text-align: left;">
                            <nobr>
                                
                                </nobr>
                        </td>
                        <td>
                            <p align="center" class="sitemap">
                                <nobr>
                                    </p>
                            <p align="center">
                            <div id = "hello"></div>
                               group project for web programming language 2014 fall</p>
                        </td>
                        <td style="width: 210px;">
                        </td>
                    </tr>
                </table>
            
</div>
            <div id="dock" visible="false" style="display: none;">
                <ul>
                    
                </ul>
            </div>
        
    </center>
    <div style="display: none;">

        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8074181-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

        </script>

        <script src="http://s7.addthis.com/js/250/addthis_widget.js#username=flyskylf"></script>

    </div>
</body>
</html>
