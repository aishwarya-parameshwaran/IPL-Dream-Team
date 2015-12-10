<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php 
					$player1 = $_POST['player'];
					$file = "playername.txt";
					$fh = fopen($file, 'w') or die("can't open file");
					fwrite($fh, $player1);
					fclose($fh);
					exec("java PlayerStats",$output); 
				//	print_r($output);
					?>
<html style="background: #282A2E;">
<head>
<style type="text/css">

th
{
	text-align: center;
	border-width: 5px;
	border-style: solid;
	border-color: white;
	color: #25BEA0;
	background:black;
	
}

tr
{
	text-align: center;
	box-shadow: 1px 2px 4px 1px white;
	border-width: 5px;
	border-style: solid;
	border-color: white;-
	
}

</style>
 <link rel="stylesheet" type="text/css" href="c3.css">
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
</head>
<body style="background: #282A2E;"> 
  
  
 
  		<div id="cbp-so-scroller" class="cbp-so-scroller">
        <!--Portfolio-->
        <div id="portfolio" class="clearfix">
            <div class="portfolio-bg"> </div>
            <div class="typo1">
                <div class="wrapper clearfix">
                 <div class="h_right">
			<ul class="menu">		
				<li><a  href="index.html">Home</a></li>
				<li><a href="services.html" >Negotiation</a></li>
				<li class="active"><a href="portfolio.html" >Portfolio</a></li>
				<li><a href="pricing.php" >Auction</a></li>
				<li><a href="about.html" class="scroll">Predictor</a></li>
				<li class="last"><a href="aboutUs.html"  class="scroll">About Us</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.html">Home</a></li>
	                <li class="nav-item"><a href="services.html" class="scroll">Negotiation</a></li>
	                <li class="nav-item"><a href="portfolio.html" class="scroll">Portfolio</a></li>
	                <li class="nav-item"><a href="pricing.php" class="scroll">Auction</a></li>
	                <li class="nav-item"><a href="about.html" class="scroll">Predictor</a></li>
	                <li class="nav-item"><a href="aboutUs.html"  class="scroll">About Us</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
                    <div class="section-title">
                       <h3 class="heading">Portfolio</h3>					  
					   <h6> </h6>
                    </div><!--end:section-title-->
					
					<?php 
					if($player1 == "Aditya Tare") { ?>
					<form><input type="hidden" value="1" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" name="1"> Aditya Tare </h1>
					<img src="images/1.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Ambati Rayudu") { ?>
					<form><input type="hidden" value="2" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="2"> Ambati Rayudu </h1>
					<img src="images/2.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Harbhajan Singh") { ?>
					<form><input type="hidden" value="3" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="3"> Harbhajan Singh </h1>
					<img src="images/3.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					
					<?php 
					if($player1 == "Pawan Suyal") { ?>
					<form><input type="hidden" value="4" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="4"> Pawan Suyal </h1>
					<img src="images/4.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Rohit Sharma") { ?>
					<form><input type="hidden" value="5" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="5"> Rohit Sharma </h2>
					<img src="images/5.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Marchant De Lange") { ?>
					<form><input type="hidden" value="6" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="6"> Marchant De Lange </h2>
					<img src="images/6.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Keiron Pollard") { ?>
					<form><input type="hidden" value="7" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="7"> Keiron Pollard </h2>
					<img src="images/7.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Lasith Malinga") { ?>
					<form><input type="hidden" value="8" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="8"> Lasith Malinga </h2>
					<img src="images/8.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
                   
				   <?php 
					if($player1 == "Lendl Simmons") { ?>
					<form><input type="hidden" value="9" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="9"> Lendl Simmons </h2>
					<img src="images/9.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					
					 <?php 
					if($player1 == "Josh Hazlewood") { ?>
					<form><input type="hidden" value="10" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="10"> Josh Hazlewood </h2>
					<img src="images/10.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Corey Anderson") { ?>
					<form><input type="hidden" value="11" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="11"> Corey Anderson </h2>
					<img src="images/11.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					
					<?php 
					if($player1 == "Jasprit Bumrah") { ?>
					<form><input type="hidden" value="12" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="12"> Jasprit Bumrah </h2>
					<img src="images/12.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Shreyas Gopal") { ?>
					<form><input type="hidden" value="13" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="13"> Shreyas Gopal </h2>
					<img src="images/13.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<div>
					
					
		</br></br></br>
<table style="width: 70%; height: 20%; border: 1px solid white; float: centre; padding: 20px; box-shadow: 2px 2px 8px 2px gray;">
					
					

		<?php for($i=0;$i<count($output);$i++)
					{
						
						$record[$i]= explode("	",$output[$i]);
						//print_r($record[$i]);
					}
					if(isset($record))
					{
					
					if($record[0][6] == 'batsman')
					{
						echo "<tr style='border: 1px solid white; color: white;'>";
					echo "<th style='border: 1px solid white;'> Year </th>";
					echo "<th style='border: 1px solid white;'> Matches </th>";
					echo "<th style='border: 1px solid white;'> Runs </th>";
					echo "<th style='border: 1px solid white;'> Average </th>";
					echo "<th style='border: 1px solid white;'> Strike Rate </th>";
					echo "<th style='border: 1px solid white;'> Balls Faced </th>";
					echo"</tr>";
					}
					
					if($record[0][6] == 'bowler')
					{
						echo "<tr style='border: 1px solid white; color: white;'>";
					echo "<th style='border: 1px solid white;'> Year </th>";
					echo "<th style='border: 1px solid white;'> Matches </th>";
					echo "<th style='border: 1px solid white;'> Balls </th>";
					echo "<th style='border: 1px solid white;'> Wickets </th>";
					echo "<th style='border: 1px solid white;'> Average </th>";
					echo "<th style='border: 1px solid white;'> Economy </th>";
					echo"</tr>";
					}
					?>
					
					<?php for($i=0;$i<count($output);$i++)
					{
						echo "<tr style='border: 1px solid white; color: white;'>";
					echo "<td style='border: 1px solid white; color:white;'>".$record[$i][0]."</td>";
					echo "<td style='border: 1px solid white; '>".$record[$i][1]."</td>";
					echo "<td style='border: 1px solid white; '>".$record[$i][2]."</td>";
					echo "<td style='border: 1px solid white; '>".$record[$i][3]."</td>";
					echo "<td style='border: 1px solid white; '>".$record[$i][4]."</td>";
					echo "<td style='border: 1px solid white; '>".$record[$i][5]."</td>";
					echo"</tr>";
					} 
					
					?>
					
					
					
					
					
					
					
					</table>
					<?php 
					}
					else{
						echo "<h1 style='color: white; text-align: center;'>Sufficient Data Unavailable</h1>";
					}
					?>
					</div>
					</br>
					</br></br></br></br></br></br></br>
					<fieldset style="border: 1px solid white; width:790px; height: 500px; float:center; padding: 20px; box-shadow: 1px 2px 7px 2px  gray;" ><legend style="color: white; text-align: center;">Graphical Representation of Statistics</legend>			
					 <div id="chart" style="width: 740px; height: 420px; float:center; padding: 20px;" ></div>

    <script src="d3.min.js" charset="utf-8"></script>
    <script src="c3.js"></script>
    <script>
    var imgid = document.getElementById("pl").value;
    
    if(imgid == "1")
    {
      var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993'],
            ['matches', 10, 2, 5],
			['average', 12, 20, 10],
			['balls_faced', 70, 66, 23],
			['runs', 87, 22, 40],
			['strike_rate', 111, 145, 100]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10],
	    ['average', 46, 66, 20]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33, 100, 10],
			['runs', 34, 11, 67],
			['strike_rate', 110, 34, 88]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2010'],
            ['matches', 15, 5, 7],
			['average', 15.75, 24.6, 12.5],
			['balls_faced', 98, 84, 36],
			['runs', 126, 123, 50],
			['strike_rate', 128.57, 146.42, 138.88]
          ]
        })
      }, 1000);
    }
    
    else if(imgid == "2")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993','1990','1998'],
            ['matches', 10, 2, 5,20,33],
			['average', 12, 20, 10,10,4],
			['balls_faced', 70, 66, 23,89,100],
			['runs', 87, 22, 40,45,88],
			['strike_rate', 111, 145, 100,122,45]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10,12,33],
	    ['average', 46, 66, 20,32,70]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33,45, 100, 10,23],
			['runs', 34, 11, 67,12,56],
			['strike_rate', 110, 34, 88,121,67]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2012','2011','2010'],
            ['matches', 15,19,17,16,14],
			['average', 25.78,18.92,37,28.21,27.38],
			['balls_faced',287,231,252,350,246],
			['runs', 361,265,333,395,356],
			['strike_rate', 125.78,114.71,132.14,112.85,144.71]
          ]
        })
      }, 1000);
    }      
    
	else if(imgid == "3")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014', '2013', '2012'],
            ['matches', 18,10,40],
			['balls', 300,500,104],
			['wickets', 20,50,36],
			['average', 42,29,94],
			['economy', 9,10,8]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 18,30,39],
	    ['wickets', 10,2,36]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2014', '2013', '2012']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls', 300,120,222],
			['average', 25,30,100],
			['economy', 7,10,11]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
		  ['x', '2014', '2013', '2012'],
            ['matches', 14,19,17],
			['balls', 330,420,324],
			['wickets', 14,24,6],
			['average', 25.42,19,64],
			['economy', 6.47,6.51,7.11]
            
          ]
        })
      }, 1000);
    }   

else if(imgid == "4")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2015', '2014', '2013'],
            ['matches', 18,10,40],
			['balls', 300,500,104],
			['wickets', 20,50,36],
			['average', 42,29,94],
			['economy', 9,10,8]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 18,30,39],
	    ['wickets', 10,2,36]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2014', '2013']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls', 300,120,222],
			['average', 25,30,100],
			['economy', 7,10,11]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
		  ['x', '2015', '2014', '2013'],
            ['matches', 1,1,1],
			['balls', 18,18,18],
			['wickets', 0,1,1],
			['average', 0,35,21],
			['economy', 7.33,11.66,7]
            
          ]
        })
      }, 1000);
    } 

else if(imgid == "5")
    {
	 document.write("<h1 style='color: white; text-align: center;'>Sufficient Data Unavailable</h1>");
    } 	
	
	else if(imgid == "6")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014', '2012'],
            ['matches', 18,10],
			['balls', 300,500],
			['wickets', 20,50],
			['average', 42,29],
			['economy', 9,10]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 18,30],
	    ['wickets', 10,2]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2014', '2012']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls', 300,120],
			['average', 25,30],
			['economy', 7,10]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
		  ['x', '2014', '2012'],
            ['matches', 1,3],
			['balls', 24,60],
			['wickets', 2,3],
			['average',16,35.66],
			['economy', 8,10.7]
            
          ]
        })
      }, 1000);
    } 
	
    else if(imgid == "7")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993','1990','1998'],
            ['matches', 10, 2, 5,20,33],
			['average', 12, 20, 10,10,4],
			['balls_faced', 70, 66, 23,89,100],
			['runs', 87, 22, 40,45,88],
			['strike_rate', 111, 145, 100,122,45]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10,12,33],
	    ['average', 46, 66, 20,32,70]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33,45, 100, 10,23],
			['runs', 34, 11, 67,12,56],
			['strike_rate', 110, 34, 88,121,67]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2012','2011','2010'],
            ['matches', 15,18,14,16,14],
			['average', 34.12,42,24.44,14.6,22.75],
			['balls_faced',203,281,159,133,147],
			['runs', 273,420,220,146,273],
			['strike_rate', 134.48,149.46,138.36,109.77,185.71]
          ]
        })
      }, 1000);
    }      
	
	else if(imgid == "8")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014', '2013', '2012'],
            ['matches', 18,10,40],
			['balls', 300,500,104],
			['wickets', 20,50,36],
			['average', 42,29,94],
			['economy', 9,10,8]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 18,30,39],
	    ['wickets', 10,2,36]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2014', '2013', '2012']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls', 300,120,222],
			['average', 25,30,100],
			['economy', 7,10,11]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
		  ['x', '2014', '2013', '2012'],
            ['matches', 10,17,14],
			['balls', 235,392,333],
			['wickets', 16,20,22],
			['average', 15.81,23.4,15.9],
			['economy', 6.45,7.16,6.3]
            
          ]
        })
      }, 1000);
    }   

	 else if(imgid == "9")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014'],
            ['matches', 8],
			['average', 56.28],
			['balls_faced', 291],
			['runs', 394],
			['strike_rate',135.39]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      
    } 

	else if(imgid == "10")
    {
	 document.write("<h1 style='color: white; text-align: center;'>Sufficient Data Unavailable</h1>");
    } 
	
	else if(imgid == "11")
	{
		var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014'],
            ['matches', 12],
			['average', 29.44],
			['balls_faced', 181],
			['runs', 265],
			['strike_rate',146.4]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
}

else if(imgid == "5")
    {
	 document.write("<h1 style='color: white; text-align: center;'>Sufficient Data Unavailable</h1>");
    } 	
	
	else if(imgid == "12")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014', '2013'],
            ['matches', 18,10],
			['balls', 300,500],
			['wickets', 20,50],
			['average', 42,29],
			['economy', 9,34]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 18,30],
	    ['wickets', 10,2]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2014', '2013']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls', 300,120],
			['average', 25,30],
			['economy', 7,18]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
		  ['x', '2014', '2013'],
            ['matches', 11,2],
			['balls', 238,42],
			['wickets', 5,3],
			['average',60.2,23.33],
			['economy', 7.58,10]
            
          ]
        })
      }, 1000);
    } 
	
	else if(imgid == "13")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2014'],
            ['matches', 4],
			['balls', 84],
			['wickets', 6],
			['average', 18.83],
			['economy', 8.07]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
	}
    </script>
			</fieldset>		
					
				</body>
				</html>