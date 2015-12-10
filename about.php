<?PHP
session_start();
?>
<html>
<html style="Background:#282A2E;">
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/magnific-popup1.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<!--  jquery plguin -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
		 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
	<!--end slider -->
	 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- Add fancyBox light-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
		</script>
		<!-- //End fancyBox light-box -->
		<script>
		function function1()
		{
		var hello=document.getElementById("SelectedPlayer").innerHTML;
	var world=document.getElementById("SelectedPlayer2").innerHTML;
alert(hello+" " +world);
window.location.href = "NewServices.php?w1=" + hello + "&w2=" + world;
		}
		</script>
		
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
    <script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
		
		
</head>




<?php

include('db.php');
if($_POST)
{
	
    mysqli_real_escape_string($connection,$_POST['amount']);
    $values = str_replace(' ','',$_POST['amount']);
    $values = str_replace('$','',$values);
    $values = explode('-',$values);
	$min = $values[0];
    $max = $values[1];
	$res = mysqli_query($connection,'select `Player`,`Ave`,`SR`,`T20 average`,`T20 statistics` from `table 9` where `Ave` BETWEEN "'.$min.'" AND "'.$max.'"');
	
	
	
	mysqli_real_escape_string($connection,$_POST['amount2']);
    $values2 = str_replace(' ','',$_POST['amount2']);
    $values2 = str_replace('$','',$values2);
    $values2 = explode('-',$values2);
	$min2 = $values2[0];
    $max2 = $values2[1];
	
	
	
	mysqli_real_escape_string($connection,$_POST['amount3']);
    $values3 = str_replace(' ','',$_POST['amount3']);
    $values3 = str_replace('$','',$values3);
    $values3 = explode('-',$values3);
	$min3 = $values3[0];
    $max3 = $values3[1];
	
	
	
	mysqli_real_escape_string($connection,$_POST['amount4']);
    $values4 = str_replace(' ','',$_POST['amount4']);
    $values4 = str_replace('$','',$values4);
    $values4 = explode('-',$values4);
	$min4 = $values4[0];
    $max4 = $values4[1];
	
	
	
	mysqli_real_escape_string($connection,$_POST['amount5']);
    $values5 = str_replace(' ','',$_POST['amount5']);
    $values5 = str_replace('$','',$values5);
    $values5 = explode('-',$values5);
	$min5 = $values5[0];
    $max5 = $values5[1];
	
	mysqli_real_escape_string($connection,$_POST['amount6']);
    $values6 = str_replace(' ','',$_POST['amount6']);
    $values6 = str_replace('$','',$values6);
    $values6 = explode('-',$values6);
	$min6 = $values6[0];
    $max6 = $values6[1];
	
	mysqli_real_escape_string($connection,$_POST['amount7']);
    $values7 = str_replace(' ','',$_POST['amount7']);
    $values7 = str_replace('$','',$values7);
    $values7 = explode('-',$values7);
	$min7 = $values7[0];
    $max7 = $values7[1];
	
	mysqli_real_escape_string($connection,$_POST['amount8']);
    $values8 = str_replace(' ','',$_POST['amount8']);
    $values8 = str_replace('$','',$values8);
    $values8 = explode('-',$values8);
	$min8 = $values8[0];
    $max8 = $values8[1];
	
	
	
	
	$i=1;
    $count  =   mysqli_num_rows($res);
    $HTML='';
    if($count > 0)
    {
        while($row=mysqli_fetch_array($res))
        {
            $Name       = $row['Player'];
            $Average    = $row['Ave'];
			$SR			= $row['SR'];
			$TTAve		= $row['T20 average'];
			$TTS		= $row['T20 statistics'];
            
           
			
							if($i==1)
							{
							$HTML .=$Name;
							$i=$i+1;
							}
							else
							$HTML .= "-" .$Name;
							//$HTML .= '<br />Player Name: '.$product;
							//$HTML .= '<br />Number of matches: '.$price;
	
            
        }
    }
	
    else
    {
        $HTML='No Data Found';
    }
	$i=1;
	$res2 = mysqli_query($connection,'select `Name`,`Average`,`Economy`,`T20Average`,`T20StrikeRate` from `table 10` where `Average` BETWEEN "'.$min5.'" AND "'.$max5.'"');
    $count2  =   mysqli_num_rows($res2);
    $HTMLnew='';
    if($count2 > 0)
    {
        while($row=mysqli_fetch_array($res2))
        {
            $Name       = $row['Name'];
            $Average    = $row['Average'];
			$Economy	= $row['Economy'];
			$TTAve		= $row['T20Average'];
			$TTS		= $row['T20StrikeRate'];
            
           
			
							if($i==1)
							{
							$HTMLnew .=$Name;
							$i=$i+1;
							}
							else
							$HTMLnew .= "-" .$Name;
							//$HTMLnew .= "-" .$Name;
							//$HTML .= '<br />Player Name: '.$product;
							//$HTML .= '<br />Number of matches: '.$price;
	
            
        }
    }
	
    else
    {
        $HTMLnew='No Data Found';
    }
	
	}	else
{
    $min = 10;
    $max = 120;
    $HTMLnew='Search Players in range.';
}

?>



</head>
<script type="text/javascript">
		
		
		
		
$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 50,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
	  });  
	  
	  
	 $(function() { 
	  $( "#slider-range2" ).slider({
      range: true,
      min: 0,
      max: 200,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount2" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount2" ).val( "" + $( "#slider-range2" ).slider( "values", 0 ) +
      " - " + $( "#slider-range2" ).slider( "values", 1 ) );
	    });
	  
	  
  $(function() { 
	  $( "#slider-range3" ).slider({
      range: true,
      min: 0,
      max: 50,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount3" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount3" ).val( "" + $( "#slider-range3" ).slider( "values", 0 ) +
      " - " + $( "#slider-range3" ).slider( "values", 1 ) );
	    });
		
		
	
	$(function() { 
	  $( "#slider-range4" ).slider({
      range: true,
      min: 0,
      max: 200,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount4" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount4" ).val( "" + $( "#slider-range4" ).slider( "values", 0 ) +
      " - " + $( "#slider-range4" ).slider( "values", 1 ) );
	    });
		
		
	$(function() { 
	  $( "#slider-range5" ).slider({
      range: true,
      min: 0,
      max: 50,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount5" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount5" ).val( "" + $( "#slider-range5" ).slider( "values", 0 ) +
      " - " + $( "#slider-range5" ).slider( "values", 1 ) );
	    });


	$(function() { 
	  $( "#slider-range6" ).slider({
      range: true,
      min: 0,
      max: 15,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount6" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount6" ).val( "" + $( "#slider-range6" ).slider( "values", 0 ) +
      " - " + $( "#slider-range6" ).slider( "values", 1 ) );
	    });
		
		
	$(function() { 
	  $( "#slider-range7" ).slider({
      range: true,
      min: 0,
      max: 50,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount7" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount7" ).val( "" + $( "#slider-range7" ).slider( "values", 0 ) +
      " - " + $( "#slider-range7" ).slider( "values", 1 ) );
	    });
		
		
	$(function() { 
	  $( "#slider-range8" ).slider({
      range: true,
      min: 0,
      max: 15,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount8" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount8" ).val( "" + $( "#slider-range8" ).slider( "values", 0 ) +
      " - " + $( "#slider-range8" ).slider( "values", 1 ) );
	    });

</script>
<body style="background:black;">
  
  
 
  		<div class="header_bg">
			<div class="wrap">
			<div class="header">
				
                <div class="h_right">
			 <ul style="display: block;">		
				<li style="float:left;margin-right:10px;"><a onmouseover="this.style.color='#25BEA0';"style=";font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="index.html">Home</a></li>
				<li class="active" style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="services.html" >Negotiation</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="portfolio.html" >Portfolio</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="pricing.php" >Auction</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="about.html" class="scroll">Predictor</a></li>
				<li class="last" style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="aboutUs.html"  class="scroll">About Us</a></li>
			</ul>
		
	      <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="index.html" class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">Home</a></li>
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="services.html" class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">Negotiation</a></li>
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="portfolio.html" class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">Portfolio</a></li>
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="pricing.php" class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">Auction</a></li>
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="about.html" class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">Predictor</a></li>
	                <li class="nav-item" style="float:left;margin-right:10px;"><a href="aboutUs.html"  class="scroll" style="font-size: 0.8725em;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 300;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">About Us</a></li>
	                 <div class="clear"></div> 
	            </ul>

	        </nav>
	        </nav>
			
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
	<div class="clear"></div>
	</div>
</div>
</div>

		<div class="clear"></div>
						<h3></h3>
						<div class="pricing-grids">
					<!--	<div class="pricing-grid">							
							<div class="price-value">
								<a href="#">DREAM TEAM</a>
							</div>
							<h3><a href="#"></a></h3>
							<ul>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
							<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>  -->
						</div>
				<!--		<div class="pricing-grid">
							<div class="price-value">
								<a href="#">TO BE AUCTIONED</a>
							</div>
							<h3><a href="#"></a></h3>
							<ul>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
							<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>    -->
						
						
							<div class="clear"> </div>
							
							<div class="pricing-grids">
						<div class="pricing-grid1">							
							<div class="price-value">
								<a href="#">AVAILABLE PLAYERS</a>
							</div>
							
							<ul>
							<div id="batsmenlist">
								<li><a href="#" style="display:inline; font-size=1.3em; color:black; padding:1%; margin-left:0%;"> Batsmen
								<?php
								include('NBBatsmen.php');
								/*$output=shell_exec("java -jar C:\Users\sakhalkar_laptop\Documents\NetBeansProjects\JavaApplication10\dist\JavaApplication10.jar");
								
								$list = explode("-", $output);
								
								$length=count($list);
								echo "<table border='1' bordercolor='black' style='position:relative;top:20px; display:inline-table;margin-left:7px;border: 1px solid white;border-spacing:20px;color:#OOOOOO;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>
								<tr style='border: 1px solid black;'>";
								for ($i=0;$i<$length;$i++)
								{
								if($i%9==0)
								{
								echo "</tr> <tr style='border: 1px solid black;'>";
								}
								echo "<td style='border: 1px solid black; padding:10px 10px 10px 10px ;'>".$list[$i]." </td> ";
								
								}
								echo "</tr> </table>";*/
								
								?>
								</a></li> </div>
								
								<li> <a href="#">
								</a></li>
								
								<li> <a href="#">
								</a></li>
								<div id="bowlerlist">
								<li> <a href="#" style="display:inline; font-size=1.3em; color:black"> Bowlers
								
								<?php
								
								/*$output=shell_exec("java -jar C:\Users\sakhalkar_laptop\Documents\NetBeansProjects\JavaApplication11\dist\JavaApplication11.jar");
								
					
								$list = explode("-", $output);
								
								$length=count($list);
								echo "<table border='1' bordercolor='black' style='position:relative;top:20px; display:inline-table;margin-left:7px;border: 1px solid white;border-spacing:20px;color:#OOOOOO;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>
								<tr style='border: 1px solid black;'>";
								for ($i=0;$i<$length;$i++)
								{
								if($i%9==0)
								{
								echo "</tr> <tr style='border: 1px solid black;'>";
								}
								echo "<td style='border: 1px solid black; padding:10px 10px 10px 10px ;'>".$list[$i]." </td> ";
								
								}
								echo "</tr> </table>";*/
								include('NB.php');
								?>
								</a></li>
								</div>
								
								
								
								
								
								
								
								
							</ul>
							<!-- <div class="cart1">
								<div class="span3"><a onclick="function1();" href="about.php"><j>View Available Players</j></a>
							</div>	
							</div>
						</div>-->
						
						<div class="clear"> </div>
													
						<div class="clear"> </div> 
						
						<div class="pricing-grids">
						<div class="pricing-grid1">	
						<div class="price-value">
								<a href="#">OWNER'S PARAMETERS FOR BATSMEN</a>
							</div>
							<ul> <li> <a>
					 	 <!--<div class="pricing-grid4" style="position:relative;margin-left:300px;margin-top:40px;">	-->
							<form id="products" action="" method="post">
							
								<div style="margin-left:20px">
									<label for="amount"> Average Filter:</label>
									<input type="text" id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount2"> Strike Rate Filter:</label>
									<input type="text" id="amount2" name="amount2" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range2" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount3"> International Average Filter:</label>
									<input type="text" id="amount3" name="amount3" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range3" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount4"> International Strike Rate Filter:</label>
									<input type="text" id="amount4" name="amount4" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range4" style="width:80%;"></div>
									<br><br>
									<!--<input type="submit" value=" Show players " />-->
									<br><br>
								</div>
							
							
							
							<?php
							require 'tmhOAuth-master/app_tokens.php';
require 'tmhOAuth-master/tmhOAuth.php';
$connection1 = new tmhOAuth(array(
    'consumer_key' => $consumer_key,
    'consumer_secret' => $consumer_secret,
    'user_token' => $user_token,
    'user_secret' => $user_secret
	));
							$file2 = "list1.txt";
    $fh2 = fopen($file2, 'w+') or die("can't open file");
							if (isset($HTML))
									{
										
									
									fwrite($fh2,"list1,".$HTML."\n");
									?>
									<div id="batsmenlist">
									<?php
									//fclose($fh2);
									$list1 = explode("-", $HTML);
									$length=count($list1);
								echo "<table border='1' bordercolor='black' style='position:relative;top:20px; display:inline-table;margin-left:7px;border: 1px solid white;border-spacing:20px;color:#OOOOOO;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>
								<tr style='border: 1px solid black;'>";
								for ($i=0;$i<$length;$i++)
								{
								if($i%9==0)
								{
								echo "</tr> <tr style='border: 1px solid black;'>";
								}
								echo "<td style='border: 1px solid black; padding:10px 10px 10px 10px ;'>".$list1[$i]." </td> ";
								
								}
								echo "</tr> </table>";
									
									
						
						unlink('batsmenoutput.txt');
								
$file1 = "batsmenoutput.txt";

    $fh1 = fopen($file1, 'a+') or die("can't open file");								
								
								for($cnt=0;$cnt<$length;$cnt++)
								{
								
								set_time_limit(0);
								unlink('tweets.txt');

$file = "tweets.txt";
    $fh = fopen($file, 'a+') or die("can't open file");
$query = htmlspecialchars($list1[$cnt]);
if(isset($query))
{
$sinceid = '0';
//if (empty($query)) {
  //  $query = "html5";
//}
 

// Get the timeline with the Twitter API
$args = array('q' => $query, 'count' => 100, 'lang' => 'en', 'result_type' => 'popular');
$http_code = $connection1->request('GET',
    $connection1->url('1.1/search/tweets'), $args);

	
// Request was successful
if ($http_code == 200) {
    // Extract the tweets from the API response
    $response = json_decode($connection1->response['response'],true);
    $tweet_data = $response['statuses'];
	
    // Accumulate tweets from results
    $tweet_stream = '[';
    foreach ($tweet_data as $tweet) {
        // Add this tweet's text to the results
     $tweet_stream .= ' { "tweet": ' . json_encode($tweet['text']) . ' },';
	
    }
	

  $tweet_stream = substr($tweet_stream, 0, -1);
    $tweet_stream .= ']';

    // Send the tweets back to the Ajax request
   // print $tweet_stream;
	
    fwrite($fh, $tweet_stream);
    
}

// Handle errors from API request
else {
    if ($http_code == 429) {
        print 'Error: Twitter API rate limit reached';
    }
    else {
        print 'Error: Twitter was not able to process that request';
    }
}

							
fclose($fh);
$output1 = "";
exec("java FileExtract", $output1);
//print_r($output1);

	$finalstr = implode(",",$output1);
	fwrite($fh1, $query.",".$finalstr."\n");
	
								}
							}}
								
								?>
									</div>
								</a> </li> </ul>
								</div>
								
							<div class="clear"></div>
						 
						<div class="price-value">
								<a href="#">OWNER'S PARAMETERS FOR BOWLERS</a>
							</div>
							<ul> <li> <a>
					 	 <!--<div class="pricing-grid4" style="position:relative;margin-left:300px;margin-top:40px;">	-->
							
							
								<div style="margin-left:20px">
									<label for="amount5"> Economy Filter:</label>
									<input type="text" id="amount5" name="amount5" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range5" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount6"> Average Filter:</label>
									<input type="text" id="amount6" name="amount6" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range6" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount7"> International Economy Filter:</label>
									<input type="text" id="amount7" name="amount7" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range7" style="width:80%;"></div>
									<br><br>
								</div>
								
								<div style="margin-left:20px">
									<label for="amount8"> International Average Filter:</label>
									<input type="text" id="amount8" name="amount8" style="border:0; color:#f6931f; font-weight:bold;" readonly/>
									<br><br>
									<div id="slider-range8" style="width:80%;"></div>
									<br><br>
									<div class="span3">
									<input type="submit" value="Show Players"/>
								</div>	<br><br>
								</div>
							
							
							
							
							
							
								<?php
								
								if (isset($HTMLnew))
									{
									
									
									fwrite($fh2,"list2,".$HTMLnew);
									
									fclose($fh2);
									?>
									<div id="bowlerlist">
									<?php
								$list2 = explode("-", $HTMLnew);
								$length=count($list2);
								echo "<table border='1' bordercolor='black' style='position:relative;top:20px; display:inline-table;margin-left:7px;margin-bottom:50px;border: 1px solid white;border-spacing:20px;color:#OOOOOO;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>
								<tr style='border: 1px solid black; margin-bottom:100px;'>";
								for ($i=0;$i<$length;$i++)
								{
								if($i%9==0)
								{
								echo "</tr> <tr style='border: 1px solid black;'>";
								}
								echo "<td style='border: 1px solid black; padding:10px 10px 10px 10px ;'>".$list2[$i]." </td> ";
								
								}
echo "</tr> </table>";
								
unlink('bowlersoutput.txt');			
								
$file1 = "bowlersoutput.txt";

    $fh1 = fopen($file1, 'a+') or die("can't open file");								
			/*					require 'tmhOAuth-master/app_tokens.php';
require 'tmhOAuth-master/tmhOAuth.php';
$connection = new tmhOAuth(array(
 'consumer_key' => $consumer_key,
'consumer_secret' => $consumer_secret,
'user_token' => $user_token,
'user_secret' => $user_secret
));*/
								for($cnt=0;$cnt<$length;$cnt++)
								{
								
								set_time_limit(0);
								unlink('tweets.txt');

$file = "tweets.txt";
    $fh = fopen($file, 'a+') or die("can't open file");
$query = htmlspecialchars($list2[$cnt]);
if(isset($query))
{
$sinceid = '0';
//if (empty($query)) {
  //  $query = "html5";
//}
 

// Get the timeline with the Twitter API
$args = array('q' => $query, 'count' => 100, 'lang' => 'en', 'result_type' => 'popular');
$http_code = $connection1->request('GET',
    $connection1->url('1.1/search/tweets'), $args);

	
// Request was successful
if ($http_code == 200) {
    // Extract the tweets from the API response
    $response = json_decode($connection1->response['response'],true);
    $tweet_data = $response['statuses'];
	
    // Accumulate tweets from results
    $tweet_stream = '[';
    foreach ($tweet_data as $tweet) {
        // Add this tweet's text to the results
     $tweet_stream .= ' { "tweet": ' . json_encode($tweet['text']) . ' },';
	
    }
	

  $tweet_stream = substr($tweet_stream, 0, -1);
    $tweet_stream .= ']';

    // Send the tweets back to the Ajax request
   // print $tweet_stream;
	
    fwrite($fh, $tweet_stream);
    
}

// Handle errors from API request
else {
    if ($http_code == 429) {
        print 'Error: Twitter API rate limit reached';
    }
    else {
        print 'Error: Twitter was not able to process that request';
    }
}

							
fclose($fh);
$output1 = "";
exec("java FileExtract", $output1);
//print_r($output1);

	$finalstr = implode(",",$output1);
	fwrite($fh1, $query.",".$finalstr."\n");
	
									}}}				
						
									?>
									<!--	<script>
								$(document).ready(function() {
        $('#showplayers').click(function(){
            $.ajax({

                type: "GET",
                url: "batsmenfilter.php",
               // data: 'ip=' + $('#searchip').val(),
                success: function(msg){
                    $('#batsmenlist').replaceWith(msg);
                }

            }); // Ajax Call
        }); //event handler
    }); //document.ready
	
	$(document).ready(function() {
        $('#showplayers').click(function(){
            $.ajax({

                type: "GET",
                url: "bowlerfilter.php",
               // data: 'ip=' + $('#searchip').val(),
                success: function(msg){
                    $('#bowlerlist').replaceWith(msg);
                }

            }); // Ajax Call
        }); //event handler
    }); //document.ready
</script> !-->
								</form>
								</div>
								</a> </li> </ul>
								
								</div>
							
						 </div>
						</div> 
						
						
						
									<div class="pricing-grid4" style="position:relative;margin-left:90px;margin-top:40px;">							
							<!--<div class="price-value">
								<a href="#"></a>
								
							</div>-->
							<!--
							<h3><a href="#">Owner's Parameters</a></h3>
							<ul>
								<li><a href="#">Bowling Filter</a> 
								<form action="" method="post" id="products">
								<div style="margin-left:20px">
									<label for="amount">Filter:</label>
									<input type="text" id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range" style="width:80%;"></div>
									<br><br>
									<input type="submit" value=" Show products " />
									<br><br>
									
								</div>
								</form>
								</li>
								<li><a href="#">Strike Rate</a></li>
								<li><a href="#">Average</a></li>
								<li><a href="#">International average</a></li>
								<li><a href="#">International Strike rate</a></li>   
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><j>Generate</j></a>
							</div>	   
							</div>-->
						</div>
						
							<div class="clear"> </div>
							
						
						<div class="clear"> </div> 
						
							<!--<div class="pricing-grid4" style="position:relative;margin-left:300px;margin-top:40px;">							
							<div class="price-value">
								<a href="#"></a>
							</div>
							<h3><a href="#">Bought Players</a></h3>
							<ul>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><j>Purchase</j></a>
							</div>	
							</div>
						</div>-->
						
						
					
						
									<div class="pricing-grid4" style="position:relative;margin-left:280px;margin-top:40px;">							
							<div class="price-value">
								<a href="#"></a>
								
							</div>
							<?php
							
							
							echo "<h3><a href='#'>Popularity Filter</a></h3>";
							echo"</br>";
							$listarray = explode("\n", file_get_contents('batsmenoutput.txt'));
							echo "<h4><a href='#'>Batsmen</a></h4>";
							echo"<ul style='overflow-y: auto; height: 200px;'>";
							for($i=0;$i<count($listarray)-1;$i++)
							{
								$listline = explode(",",$listarray[$i]);
								
							echo"<li><a href='#'>".$listline[0]."</a></li>";
								
							}
							echo"</ul>";
							echo "</br>";
							echo "<h4><a href='#'>Bowlers</a></h4>";
							$listarray = explode("\n", file_get_contents('bowlersoutput.txt'));
							echo"<ul style='overflow-y: auto; height: 200px;'>";
							for($i=0;$i<count($listarray)-1;$i++)
							{
								$listline = explode(",",$listarray[$i]);
								
							echo"<li><a href='#'>".$listline[0]."</a></li>";
								
							}
												
							echo"</ul>";
							?>
							<div class="cart1">
								<div class="span3"><a id="sentiment" class="popup-with-zoom-anim" href="#small-dialog"><j>Generate</j></a>
							</div>	   
							</div>
						</div>
					
						
									<div class="pricing-grid4" style="position:relative;margin-left:100px;margin-top:40px;">							
							<div class="price-value">
							<a href="#"></a>
							</div>
							<h3><a href="#">Dream Selection</a></h3>
							</br>
							<div id="dreamteam">
							<script>
							$(document).ready(function() {
        $('#sentiment').click(function(){
            $.ajax({

                type: "GET",
                url: "dreamteam.php",
               // data: 'ip=' + $('#searchip').val(),
                success: function(msg){
                    $('#dreamteam').replaceWith(msg);
                }

            }); // Ajax Call
        }); //event handler
    }); //document.ready
</script>
</div>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="pricing.php"><j>Generate</j></a>
							</div>
								
						
						
						
						</body>
						</html>