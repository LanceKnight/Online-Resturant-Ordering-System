<?php
//&#24050;&#30331;&#24405;&#39029;&#38754;&#65292;&#26174;&#31034;&#30331;&#24405;&#29992;&#25143;&#21517;
if(isset($_COOKIE['email'])){
    echo 'You are Logged as '.$_COOKIE['email'].'<br/>';
    echo '<a href="logOut.php"> Log Out('.$_COOKIE['email'].')</a>';
}
/**&#22312;&#24050;&#30331;&#24405;&#39029;&#38754;&#20013;&#65292;&#21487;&#20197;&#21033;&#29992;&#29992;&#25143;&#30340;cookie&#22914;$_COOKIE['username']&#12289;
 * $_COOKIE['email']&#23545;&#25968;&#25454;&#24211;&#36827;&#34892;&#26597;&#35810;&#65292;&#21487;&#20197;&#20570;&#22909;&#22810;&#22909;&#22810;&#20107;&#24773;*/
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
                <div id="ctl00_pnlBannerFrame" class="BannerFrame" >
	
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
                    
    

<div class="storemessage">
   


<div>
    <h1>Sign Up</h1>  
<form method="post" action="register_process.php">  
<div class="div"> 
	<table> 
    <tr>
    <td>email</td><td><input type="text" name="email" ></td>
    </tr>
      
    <tr>
    <td>password:</td><td><input type="password" name="password"></td>
    </tr>
    
    <tr>  
    <td>re-enter password:</td><td><input type="password" name="pwd_again"></td></tr>
    
    <tr>  
    <td>name:</td><td><input type="text" name="name"></td> </tr>
    
    <tr>  
    <td>address:</td><td><input type="text" name="address"></td> 
    </tr> 
     
     <tr><td>
    phone:</td><td><input type="text" name="phone"> </td></tr> 
    
    </table>

    
      
    <input type="submit" value="Submit">  
    <input type="reset" value="Reset">  
      
  
</div>  
  
</form>  
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
                                <nobr></nobr>
                          </p>
                            <p align="center">
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
