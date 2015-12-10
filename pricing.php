<html style="background: #282A2E;">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/magnific-popup111.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<!--  jquery plguin -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!--start slider -->
	   <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
		
		
		
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
		
		<script>
		var j=0;
						function buyPlayers() {
						
						
						
						var nums = document.getElementById("ul");
						var listItem = nums.getElementsByTagName("li");
						var newNums1 = new Array();
						var newNums2 = [];
						var newNums3 = [];
						
						
						search:	for (var i = 0; i < listItem.length; i++) {
						
						
							
							newNums1[i] = document.getElementById("id"+i).value;
						//	alert("newnums"+newNums1[i]);
							if (newNums1[i] != "")
							{
							
							var items2=newNums1[i];
							
							newNums2[i]= document.getElementById("p"+i).innerHTML;
							var pos1 = newNums2[i].indexOf("<");
							var items = newNums2[i].substring(0,pos1-1);
							var items3= items+"  : $  ";
							
							
							/*newNums3[j] = document.getElementById("x"+j).innerHTML;
							while( newNums3[j] != "" )
							{
							j++;
							}
							*/
							document.getElementById("x"+j).innerHTML=(items3+items2);
							j++;
							
							items4=document.getElementById("d1").innerHTML;
							document.getElementById("d1").innerHTML = (items4 - items2);
							
							var elem = document.getElementById("t"+i);
							elem.parentNode.removeChild(elem);
							
							break search;
							
						
							}
							
						
						}
						
						}
						
						</script>
<body>








<div class="header_bg" >
<div class="wrap">
	<div class="header">
		
		<div class="h_right">
			 <ul style="display:bolder;display:block;">		
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="index.html">Home</a></li>
				<li class="active" style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="services.html" >Negotiation</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="portfolio.html" >Portfolio</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="pricing.php" >Auction</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="about.html" >Predictor</a></li>
				<li class="last" style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="aboutUs.html">About Us</a></li>
			</ul>
			
	        <nav class="nav">
	            <ul style="display:bolder;display:block;">		
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="index.html">Home</a></li>
				<li class="active" style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="services.html" >Services</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="portfolio.html" >Portfolio</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="pricing.php" >Auction</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="about.html">Predictor</a></li>
				<li class="last" style="float:left;margin-right:10px;"><a style="font-size: 17px;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="aboutUs.html">About Us</a></li>
			</ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="pricing-plans" id="pricing">
<div class="wrap">
					
						<h3>AUCTION</h3>
						<div class="pricing-grids">
					
						</div>
			
						<div class="pricing-grid">							
							<div class="price-value">
								<a href="#">BUDGET</a>
							</div>
							<h3><a id="d1" href="#">1100000000</a></h3>
							
							<!--<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	    -->
							</div>
						</div>
							<div class="clear"> </div>
							
							<div class="pricing-grids" style="margin-bottom: 20px;">
						<div class="pricing-grid1" style="width: 275px; margin-left: 20px; overflow-y:hidden;">							
							<div class="price-value">
							<h3><a href="#">PRESENT TEAM</a></h3>
							</div>
							
							
							<ul style="overflow-y:scroll; height: 350px;">
							<div>
								<li><a href="#">Rohit Sharma</a></li>
								<li><a href="#">Kieron Pollard</a></li>
								<li><a href="#">Aaron Finch</a></li>
								<li><a href="#">Pragyan Ojha</a></li>
								<li><a href="#">Harbhajan Singh</a></li>
								<li><a href="#">Lasith Malinga</a></li>
								<li><a href="#">Corey Anderson</a></li>
								<li><a href="#">Ambati Rayadu</a></li>
								<li><a href="#">Aditya Tare</a></li>
								<li><a href="#">Jasprit Bumrah</a></li>
								<li><a href="#">Vinay Kumar</a></li>
								<li><a href="#">Josh Hazlewood</a></li>
								<li><a href="#">Marchant de Lange</a></li>
								<li><a href="#">Shreyas Gopal</a></li>
								<li><a href="#">Lendl Simmons</a></li>
								<li><a href="#">Aiden Blizzard</a></li>
								<li><a href="#">Unmukt Chand</a></li>
								<li><a href="#">Parthiv Patel</a></li>
								<li><a href="#">Mitchell McClenaghan</a></li>
								</div>
								
								
								
								
							</ul>
							<!--<div class="cart1">
							<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><j></j></a>
							</div>
							</div>-->
						</div>!
						<div class="pricing-grid2" style="width: 275px; overflow-y:hidden;">
							<div class="price-value">
							<h3>	<a href="#">DREAM TEAM</a></h3>
							</div>
							
							<!--<ul>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>!-->
							<?php

$listarray = explode("\n", file_get_contents('batsmenoutput.txt'));
							echo "<h4><a href='#'>Batsmen</a></h4>";
							echo"<ul style='overflow-y:scroll; overflow-x:hidden; height: 150px;'>";
							for($i=0;$i<count($listarray)-1;$i++)
							{
								$listline = explode(",",$listarray[$i]);
								if($listline[2] == 'Positive' || $listline[2] == 'Neutral')
								{
							echo"<li><a href='#'>".$listline[0]."</a></li>";
								}
							}
							echo"</ul>";
							echo "</br>";
							echo "<h4><a href='#'>Bowlers</a></h4>";
							$listarray = explode("\n", file_get_contents('bowlersoutput.txt'));
							echo"<ul style='overflow-y:scroll; overflow-x:hidden; height: 120px;'>";
							for($i=0;$i<count($listarray)-1;$i++)
							{
								$listline = explode(",",$listarray[$i]);
								if($listline[2] == 'Positive' || $listline[2] == 'Neutral')
								{
							echo"<li><a href='#'>".$listline[0]."</a></li>";
								}
							}
												
							echo"</ul>";
							?>
							<div class="cart1">
							<!--	<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><k>Purchase</k></a>
							</div>		-->
							</div>
						</div>
						<div class="pricing-grid3" style="width: 275px; overflow-y:hidden;">							
							<div class="price-value">
								<h3><a href="#">TO BE AUCTIONED</a></h3>
							</div>
							<ul style='overflow-y:scroll; overflow-x:hidden; height:70%;'>
							<?php
echo"</br>";
							$dbhost = 'localhost';
							$dbuser = 'root';
							$dbpass = '';
							$connection = mysql_connect($dbhost,$dbuser,$dbpass);
							if(!$connection)
							{
								die('COuld not connect:'.mysql_error());
							}
							mysql_select_db('project');
							$query = "SELECT Player,BasePrice FROM `table 19`";
							$retval = mysql_query($query,$connection);
							$count=1;
							while(($row = mysql_fetch_array($retval)) && $count<75)
							{
								
								echo "<li><a href='#' class='disp' id='{$count}' data-doc_value='{$row[0]}'>{$row[0]}</br>Base Price:{$row[1]}</a></li>";
								$count = $count + 1;
							}
							$query = 'SELECT Player, BasePrice FROM `table 20`';
							$retval = mysql_query($query,$connection);
							
							while($row1 = mysql_fetch_array($retval))
							{
								
								echo "<li><a href='#' class='disp' id='{$count}' data-doc_value='{$row1[0]}'>{$row1[0]}</br>Base Price:{$row1[1]}</a></li>";
								$count = $count + 1;
							}
							mysql_close($connection);
							?>							
							</ul></br>
<div contenteditable='true' id='price'>Enter Price Here</div>							
							
							<!--<iframe src="/default.asp" width="200" height="200" scrolling="yes">
  
							</iframe>  -->
						<!--	<ul id="ul">
								<li><a></a></li>!-->
								
								<?php
							/*	$output2=shell_exec("java -jar JavaApplication11.jar");
								
								$list2 = explode("-", $output2);
								
								$length=count($list2);
								?>
								
								<!--<li id="t0"><a href="#" id="p0">Rohit Sharma <br> BASE PRICE = 5,00,00,000 <br> <input type="text" name="n0" size="3" id="id0"> </a></li>-->
								<?php
								$output=shell_exec("java -jar JavaApplication10.jar");
								
								$list = explode("-", $output);
								
								$length=count($list);
								$dom=new DOMDocument('1.0');
								
								for($i=0;$i<$length;$i++)
								{
								$li_value=$list[$i];
								$listelement=$dom->createElement('li',$li_value);
								$dom->appendChild($listelement);
								
								/*$avalue=$list[$i];
								$aelement=$dom->createElement('a',$avalue);
								$aattribute=$dom->createAttribute('href');
								$aattribute->value="#";
								$dom->appendChild($aelement);
								
								$inputvalue="";
								$inputelement=$dom->createElement('input');
								$inputattribute=$dom->createAttribute('type');
								$inputattribute->value="text";
								$dom->appendChild($inputelement);
								
								$br_value='BASE PRICE = 5,00,00,000';
								$brelement=$dom->createElement('br');
								$dom->appendChild($brelement);
								
								$br_value='BASE PRICE = 5,00,00,000';
								$brelement=$dom->createElement('b',$br_value);
								$dom->appendChild($brelement);
								
								$p_value='BASE PRICE = 5,00,00,000';
								$pelement=$dom->createElement('p');
								$dom->appendChild($pelement);
							
							
								$brelement=$dom->createElement('br');
								$dom->appendChild($brelement);
								
								
								
								}
								echo $dom->saveHTML();
								?>

								<?php
								$output2=shell_exec("java -jar JavaApplication11.jar");
								
								$list2 = explode("-", $output2);
								
								$length2=count($list2);
								$dom=new DOMDocument('1.0');
								
								for($i=0;$i<$length2;$i++)
								{
								$li_value=$list2[$i];
								$listelement=$dom->createElement('li',$li_value);
								$dom->appendChild($listelement);
								
								$inputvalue="";
								$inputelement=$dom->createElement('input');
								$inputattribute=$dom->createAttribute('type');
								$inputattribute->value="text";
								$dom->appendChild($inputelement);
								
								$br_value='BASE PRICE = 5,00,00,000';
								$brelement=$dom->createElement('br');
								$dom->appendChild($brelement);
								
								$br_value='BASE PRICE = 5,00,00,000';
								$brelement=$dom->createElement('b',$br_value);
								$dom->appendChild($brelement);
								
								$p_value='BASE PRICE = 5,00,00,000';
								$pelement=$dom->createElement('p');
								$dom->appendChild($pelement);
							
							
								$brelement=$dom->createElement('br');
								$dom->appendChild($brelement);
								
								$brvalue='BASE PRICE : 5,00,00,000';
								$brelement=$dom->createElement('br',$brvalue);
								$dom->appendChild($brelement);
								
								}
								echo $dom->saveHTML();*/
								?>
															
								
								<!-- <li id="t1"><a href="#" id="p1">Virat Kohli <br> BASE PRICE = 7,00,00,000 <br><input type="text" name="n1" size="3" id="id1"></a></li>
								<li id="t2"><a href="#" id="p2">M.S.Dhoni  <br> BASE PRICE = 8,00,00,000 <br><input type="text" name="n2" size="3" id="id2"></a></li>
								<li id="t3"><a href="#" id="p3">Suresh Raina <br> BASE PRICE = 4,00,00,000 <br><input type="text" name="n3" size="3" id="id3"></a></li>
								<li id="t4"><a href="#" id="p4">Narine <br> BASE PRICE = 5,00,00,000 <br><input type="text" name="n4" size="3" id="id4"></a></li>
								<li id="t5"><a href="#" id="p5">Maxwell  <br> BASE PRICE = 4,00,00,000 <br><input type="text" name="n5" size="3" id="id5"></a></li>   -->
								
							
							
						<!--	<div class="cart1">!-->
								
								
								
							<!--<div class="span3"><a class="popup-with-zoom-anim" id="demo" href="#small-dialog" onclick="buyPlayers()"><l>BuyPlayer</l></a>
							</div> !-->
							
						<!--	</div>!-->
						</div>
						
						
						
						
						<script>
						
						
						$(document).ready(function() {
							
        $('.disp').click(function(){
			var nameid = $(this).attr('id');
			var batsmanname= $(this).data('doc_value');
			
			var price = parseInt(document.getElementById("price").innerHTML);
			var budget = parseInt(document.getElementById("d1").text);
			var finalprice = (budget - price).toString();
            $.ajax({

                type: "GET",
                url: "replacelist.html",
               // data: 'ip=' + $('#searchip').val(),
                success: function(msg){
					
                    $('#' + nameid).replaceWith("<a style='background:#353A42; color:#B6C380;'>"+batsmanname+"</a>");
					$('#price').replaceWith("<div contenteditable='true' id='price'>0</div>");
					$('#p2').append('<li><a href="#">'+batsmanname+'</a></li>');
					$('#d1').replaceWith('<a id="d1" href="#">'+finalprice+'</a>');
                }

            }); // Ajax Call
        }); //event handler
						
	}); //document.ready
						
	
</script>
							<div class="pricing-grid4" style="width: 275px; overflow-y:hidden;">							
							<div class="price-value">
							<h3>	<a href="#">BOUGHT PLAYERS</a></h3>
							</div>
							
							<ul id="p2" style='overflow-y:scroll; height:350px'>
							
								
							<!--
								<li><a href="#" id="x0"></a></li>
								<li><a href="#" id="x1"></a></li>
								<li><a href="#" id="x2"></a></li>
								<li><a href="#" id="x3"></a></li>
								<li><a href="#" id="x4"></a></li>
								<li><a href="#" id="x5"></a></li>!-->
							</ul>
							<div class="cart1">
							<!--	<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><m>Purchase</m></a>
							</div>	-->
							</div>
						</div>
						
						
						
						
						
						
						
						</body>
						</html>
						
						