<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/magnific-popup1.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

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

<style>
a:hover {
    color:#25BEA0;
}
 ul ul {
	display: none;
	left:0px;
	-webkit-transition: all 0.6s ease-in-out;
}

 ul li:hover  ul {
		
		display:block;
		margin-left:50px;
		position:absolute;
		left:120px;
		top:1px;
		
		
		} 
<!--ul li.dropdown:hover > ul.dropdown-menu{
    display: block;
	margin-left:20px;
	left:300px;
}-->

</style>


<!-- <script type="text/javascript">
function TestFunction()
{


alert(document.getElementById("PlayerMenu").option);
alert(document.getElementById("PlayerMenu").selectedIndex);
document.getElementById("SelectedPlayer").innerHTML="changed";


}
</script> -->

<script type="text/javascript">
    function lang1(event) {
        var target = event.target || event.srcElement;
        //alert(event.target.innerHTML);
		document.getElementById("SelectedPlayer").innerHTML=event.target.innerHTML;
		
    }
	
	function lang2(event) {
        var target = event.target || event.srcElement;
        //alert(event.target.innerHTML);
		document.getElementById("SelectedPlayer2").innerHTML=event.target.innerHTML;
    }
</script>







<script>
function lang3()
{
var hello=document.getElementById("SelectedPlayer").innerHTML;
var world=document.getElementById("SelectedPlayer2").innerHTML;
//alert(hello+" " +world);
window.location.href = "NewServices.php?w1=" +hello + "&w2=" + world;


}
</script>



</head>
<body>   


            <div class="header_bg">
			<div class="wrap">
			<div class="header">
				
                <div class="h_right">
			 <ul style="display: block;">		
				<li style="float:left;margin-right:10px;"><a onmouseover="this.style.color='#25BEA0';"style=";font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="index.html">Home</a></li>
				<li class="active" style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="services.html" >Negotiation</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="portfolio.html" >Portfolio</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="pricing.php" >Auction</a></li>
				<li style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="about.html" >Predictor</a></li>
				<li class="last" style="float:left;margin-right:10px;"><a style="font-size: 17px;text-decoration: none;color: #ffffff;text-transform: uppercase;font-family: 'Roboto', sans-serif;margin:0px 20px;font-weight: 100;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;" href="aboutUs.html">About Us</a></li>
			</ul>
			<!-- <div id="sb-search" class="sb-search">
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
			</script>-->
			<!-- start smart_nav * -->
			
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




<div  class="sevice"  style="background:#282A2E;padding:5% 0;">
	<div style="width: 80%;margin: 0px auto;">
		<div style="background:#282A2E;">
			<h2 style="text-align:center;margin: 0 0 5%;font-size: 1.8em;color: #ffffff;text-transform: uppercase;font-weight: 400;">NEGOTIATIONS</h2>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			
						<div style="display: block;float:left;margin-left:9%;text-align: center;width: 21.6%; ">
						<div class="dropdown">
					 		<img src="images/player4.jpg" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="max-width: 100%;margin-bottom: 23px;border-radius: 30em;-webkit-border-radius: 30em;-o-border-radius: 30em;-moz-border-radius: 30em;padding: 45px;background: #313338;cursor: pointer;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;">
							<h3 style="padding: 0em 0em 0em 0em;"><a href=# style="color:#ffffff;text-decoration: none;font-size:1.5em;font-weight :400;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;">Player</a></h3>				
						<p id="SelectedPlayer" style="color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;"><?php echo $_GET["w1"]; ?>  </p>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="PlayerMenu" onclick="lang1(event)">
								  <li role="presentation" id="Player1"><a role="menu" tabindex="-1" href="#">Rohit Sharma</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lasith Malinga</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kieron Pollard</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ambati Rayudu</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Harbhajan Singh</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Corey Anderson</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aditya Tare</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jasprit Bumrah</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Josh Hazelwood</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Merchant de Lange</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pawan Suyal</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shreyas Gopal</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lendl Simmons</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aaron Finch</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pragyan Ojha</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mitchell Mcclenaghan</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Abhimanyu Mithun</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nitish Rana</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Siddhesh Lad</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hardik Pandya</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jagdeesha Suchitch</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Unmukt Chand</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vinay Kumar</a></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Parthiv Patel</a></li>
								  <li role="presentation" class="divider"></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About The Team</a></li>
							</ul>
							

							
							</div>
					 					    
						</div>
					
						
						
						<div style="display: block;float:left;margin-left:9%;text-align: center;width: 21.6%; ">
						<div class="dropdown">
					 		<img src="images/player2.jpg" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="max-width: 100%;margin-bottom: 23px;border-radius: 30em;-webkit-border-radius: 30em;-o-border-radius: 30em;-moz-border-radius: 30em;padding: 45px;background: #313338;cursor: pointer;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;">
							<h3 style="padding: 0em 0em 0em 0em;"><a href=# style="color:#ffffff;text-decoration: none;font-size:1.5em;font-weight :400;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;">Opponent</a></h3>
							<p id= "SelectedPlayer2" style="color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;"> <?php echo $_GET["w2"]; ?> </p>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chennai Super Kings</a>
								  <ul class="dropdown-menu" onclick="lang2(event)">
									<li role="presentation"><a role="menuitem" href="#">M S Dhoni</a></li>
									<li role="presentation"><a role="menuitem" href="#">Baba Aparajith</a></li>
									<li role="presentation"><a role="menuitem" href="#">Brendon Mccullum</a></li>
									<li role="presentation"><a role="menuitem" href="#">Dwayne Bravo</a></li>
									<li role="presentation"><a role="menuitem" href="#">Dwayne Smith</a></li>
									<li role="presentation"><a role="menuitem" href="#">Francois du Plessis</a></li>
									<li role="presentation"><a role="menuitem" href="#">Ishwar Pandey</a></li>
									<li role="presentation"><a role="menuitem" href="#">Matt Henry</a></li>
									<li role="presentation"><a role="menuitem" href="#">Mithun Manhas</a></li>
									<li role="presentation"><a role="menuitem" href="#">Mohit Sharma</a></li>
									<li role="presentation"><a role="menuitem" href="#">Pawan Negi</a></li>
									<li role="presentation"><a role="menuitem" href="#">Ravichandran Ashwin</a></li>
									<li role="presentation"><a role="menuitem" href="#">Ravindra Jadeja</a></li>
									<li role="presentation"><a role="menuitem" href="#">Samuel Bedree</a></li>
									<li role="presentation"><a role="menuitem" href="#">Suresh Raina</a></li>
									<li role="presentation"><a role="menuitem" href="#">Ronit More</a></li>
									<li role="presentation"><a role="menuitem" href="#">Michael Hussey</a></li>
									<li role="presentation"><a role="menuitem" href="#">Rahul Sharma</a></li>
									<li role="presentation"><a role="menuitem" href="#">Kyle Abbott</a></li>
									<li role="presentation"><a role="menuitem" href="#">Eklavya Dwivedi</a></li>
								  </ul>
								  </li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kolkata Knight Riders</a>
								  <ul class="dropdown-menu" onclick="lang2(event)">
									<li role="presentation"><a role="menuitem" href="#">Gautam Gambhir</a></li>
									<li role="presentation"><a role="menuitem" href="#">Sunil Narine</a></li>
									<li role="presentation"><a role="menuitem" href="#">Robin Uthappa</a></li>
									<li role="presentation"><a role="menuitem" href="#">Piyush Chawla</a></li>
									<li role="presentation"><a role="menuitem" href="#">Yusuf Pathan</a></li>
									<li role="presentation"><a role="menuitem" href="#">Shakib Al Hasan</a></li>
									<li role="presentation"><a role="menuitem" href="#">Morne Morkel</a></li>
									<li role="presentation"><a role="menuitem" href="#">Umesh Yadav</a></li>
									<li role="presentation"><a role="menuitem" href="#">Manish Pandey</a></li>
									<li role="presentation"><a role="menuitem" href="#">Chris Lynn</a></li>
									<li role="presentation"><a role="menuitem" href="#">Pat Cummins</a></li>
									<li role="presentation"><a role="menuitem" href="#">Ryan Ten Doescate</a></li>
									<li role="presentation"><a role="menuitem" href="#">Suryakumar Yadav</a></li>
									<li role="presentation"><a role="menuitem" href="#">Andre Russell</a></li>
									<li role="presentation"><a role="menuitem" href="#">Veer Pratap Singh</a></li>
									<li role="presentation"><a role="menuitem" href="#">Kuldeep Yadav</a></li>
									<li role="presentation"><a role="menuitem" href="#">Jimmy Nesham</a></li>
									<li role="presentation"><a role="menuitem" href="#">Brad Hogg</a></li>
									<li role="presentation"><a role="menuitem" href="#">Sumit Narwal</a></li>
									<li role="presentation"><a role="menuitem" href="#">Sheldon Jackson</a></li>
									<li role="presentation"><a role="menuitem" href="#">KC Cariappa Vaibhav Rawal</a></li>
									</ul>
									</li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kings XI Punjab</a>
								  <ul class="dropdown-menu" onclick="lang2(event)">
									<li role="presentation"><a role="menuitem" href="#">George Bailey</a></li>
									<li role="presentation"><a role="menuitem" href="#">Axar Patel</a></li>
									<li role="presentation"><a role="menuitem" href="#">Anureet Singh</a></li>
									<li role="presentation"><a role="menuitem" href="#">Beuran Hendricks</a></li>
									<li role="presentation"><a role="menuitem" href="#">David Miller</a></li>
									<li role="presentation"><a role="menuitem" href="#">Glenn Maxwell</a></li>
									<li role="presentation"><a role="menuitem" href="#">Gurkeerat Mann Singh</a></li>
									<li role="presentation"><a role="menuitem" href="#">Karanveer Singh</a></li>
									<li role="presentation"><a role="menuitem" href="#">Manan Vohra</a></li>
									<li role="presentation"><a role="menuitem" href="#">Mitchell Johnson</a></li>
									<li role="presentation"><a role="menuitem" href="#">Shivam Sharma</a></li>
									<li role="presentation"><a role="menuitem" href="#">Thisara Perera</a></li>
									<li role="presentation"><a role="menuitem" href="#">Virender Sehwag</a></li>
									<li role="presentation"><a role="menuitem" href="#">Wriddhiman Saha</a></li>
									<li role="presentation"><a role="menuitem" href="#">Murali Vijay</a></li>
									<li role="presentation"><a role="menuitem" href="#">Nikhil Naik</a></li>
									<li role="presentation"><a role="menuitem" href="#">Yogesh Golwalker</a></li>
									<li role="presentation"><a role="menuitem" href="#">Parvinder Awana</a></li>
									<li role="presentation"><a role="menuitem" href="#">Rishi Dhawan</a></li>
									<li role="presentation"><a role="menuitem" href="#">Sandeep Sharma</a></li>
									<li role="presentation"><a role="menuitem" href="#">Shaun Marsh</a></li>
								  </ul>
								  </li>
								  <li role="presentation" class="divider"></li>
								  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About The Team</a></li>
							</ul>
							</div>
					 					    
						</div>
						
						<div style="display: block;float:left;margin-left:9%;text-align: center;width: 21.6%; ">
						<div>
					 		<img onclick="lang3()" src="images/compare3.png" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="max-width: 100%;margin-bottom: 23px;border-radius: 30em;-webkit-border-radius: 30em;-o-border-radius: 30em;-moz-border-radius: 30em;padding: 45px;background: #313338;cursor: pointer;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;">
							<h3 style="padding: 0em 0em 0em 0em;"><a href=# style="color:#ffffff;text-decoration: none;font-size:1.5em;font-weight :400;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;" onclick="lang3();">Compare</a></h3>
<?php
$string="this";
$string2="isa";
   

   if (isset($_GET["w1"]) && isset($_GET["w2"]))
{
 

    	
	$player1=$_GET["w1"];
	//$player1 = str_replace(' ', '', $player1);
	$player1=trim($player1,' ');

	$player2=$_GET["w2"];
	//$player2 = str_replace(' ', '', $player2);
	$player2=trim($player2,' ');
      	$hello = $_GET["w1"] . " " . $_GET["w2"];
		
	
 
	
     	//$output=shell_exec("java -jar C:\Users\sakhalkar_laptop\Documents\NetBeansProjects\JavaApplication9\dist\JavaApplication9.jar $player1");
	
	 
	 //$output2=shell_exec("java -jar C:\Users\sakhalkar_laptop\Documents\NetBeansProjects\JavaApplication9\dist\JavaApplication9.jar $player2");
	 
	 //include('negotiation.php');
	
	
	
	
	
	
	
	
	

    } 	
?>


							</div>					 					    
						</div>
						
	<?php


/*list($name, $career, $matches, $no, $runs, $hs, $ave, $ballsfaced, $SR) = split('-', $output);

$srcc="images/" . $name . ".png";
echo "<img src=$srcc style='position:absolute;top:580px;left:90px;margin-left:1px;'>";


echo "<table border='1' bordercolor='white' style='position:relative;top:20px; display:inline-table;margin-left:270px;border: 1px solid white;border-spacing:20px;color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>  <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Player </td><td style='padding:10px 10px 10px 10px ;'>" .$name. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Career </td> <td style='padding:10px 10px 10px 10px ;'>" .$career. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Matches </td> <td style='padding:10px 10px 10px 10px ;'>" .$matches. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Not Out </td> <td style='padding:10px 10px 10px 10px ;'>" .$no. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Runs </td> <td style='padding:10px 10px 10px 10px ;'>" .$runs. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> HS </td> <td style='padding:10px 10px 10px 10px ;'>" .$hs. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Average </td> <td style='padding:10px 10px 10px 10px ;'>" .$ave. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Balls faced </td> <td style='padding:10px 10px 10px 10px ;'>" .$ballsfaced. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Strike rate </td> <td style='padding:10px 10px 10px 10px ;'>" .$SR. "</td></tr>      </table>";

list($name, $career, $matches, $no, $runs, $hs, $ave, $ballsfaced, $SR) = split('-', $output2);
echo "<table border='1' bordercolor='white' style='position:relative;top:20px; display:inline-table;margin-left:40px;border: 1px solid white;border-spacing:20px;color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>  <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Player </td><td style='padding:10px 10px 10px 10px ;'>" .$name. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Career </td> <td style='padding:10px 10px 10px 10px ;'>" .$career. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Matches </td> <td style='padding:10px 10px 10px 10px ;'>" .$matches. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Not Out </td> <td style='padding:10px 10px 10px 10px ;'>" .$no. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Runs </td> <td style='padding:10px 10px 10px 10px ;'>" .$runs. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> HS </td> <td style='padding:10px 10px 10px 10px ;'>" .$hs. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Average </td> <td style='padding:10px 10px 10px 10px ;'>" .$ave. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Balls faced </td> <td style='padding:10px 10px 10px 10px ;'>" .$ballsfaced. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Strike rate </td> <td style='padding:10px 10px 10px 10px ;'>" .$SR. "</td></tr>      </table>";

$srcc="images/" . $name . ".png";
echo "<img src=$srcc style='position:absolute;top:580px;left:1020px;margin-left:1px;'>";*/
include('db.php');

$MySQLOutput1= mysqli_query($connection,'select `Name`, `Matches`, `Average`, `SR`, `T20 Average`, `T20 Strike Rate`,`BP` from `negotiation new`');
$MySQLOutput2= mysqli_query($connection,'select `Player`, `Matches`, `Ave`, `SR`, `T20 average`, `T20 statistics`, `Base Price` from `ipl batsmen dataset newer`');
$keepTrack1=0;
$keepTrack2=0;
								if (isset($MySQLOutput1))
								{
										$count2  =   mysqli_num_rows($MySQLOutput1);
										
										if($count2 > 0)
										{
											
											while($row=mysqli_fetch_array($MySQLOutput1))
											{
												$Name1 = $row['Name'];
												$Matches1= $row['Matches'];
												$Average1= $row['Average'];
												$SR1= $row['SR'];
												$TTaverage1=$row['T20 Average'];
												$TTstrikerate1=$row['T20 Strike Rate'];
												$BP1=$row['BP'];
													if ($Name1==$player1)
													{
													$keepTrack1=1;
													break;
													}											
											}
										}
								}
								
								if ($keepTrack1==0)
								{
								if (isset($MySQLOutput2))
								{
										$count2  =   mysqli_num_rows($MySQLOutput2);
										
										if($count2 > 0)
										{
											
											while($row=mysqli_fetch_array($MySQLOutput2))
											{
												$Name1 = $row['Player'];
												$Matches1= $row['Matches'];
												$Average1= $row['Ave'];
												$SR1= $row['SR'];
												$TTaverage1=$row['T20 average'];
												$TTstrikerate1=$row['T20 statistics'];
												$BP1=$row['Base Price'];
												
													if ($Name1==$player1)
													{
													$keepTrack1=1;
													break;
													}											
											}
										}
								}
								}
								
								if (isset($MySQLOutput1))
								{
										$count2  =   mysqli_num_rows($MySQLOutput1);
										
										if($count2 > 0)
										{
											
											while($row=mysqli_fetch_array($MySQLOutput1))
											{
												$Name2 = $row['Name'];
												$Matches2= $row['Matches'];
												$Average2= $row['Average'];
												$SR2= $row['SR'];
												$TTaverage2=$row['T20 Average'];
												$TTstrikerate2=$row['T20 Strike Rate'];
												$BP2=$row['BP'];
													if ($Name2==$player2)
													{
													$keepTrack2=1;
													break;
													}											
											}
										}
								}
								
								if($keepTrack2==0)
								{
								if (isset($MySQLOutput2))
								{
										$count2  =   mysqli_num_rows($MySQLOutput2);
										
										if($count2 > 0)
										{
											
											while($row=mysqli_fetch_array($MySQLOutput2))
											{
												$Name2 = $row['Player'];
												$Matches2= $row['Matches'];
												$Average2= $row['Ave'];
												$SR2= $row['SR'];
												$TTaverage2=$row['T20 average'];
												$TTstrikerate2=$row['T20 statistics'];
												$BP2=$row['Base Price'];
													if ($Name2==$player2)
													{
													$keepTrack2=1;
													break;
													}											
											}
										}
								}
								}
if ($keepTrack1==1)
{
$name=str_replace(' ', '', $player1);
$srcc="images/" . $name . ".png";
echo "<img src=$srcc style='position:absolute;top:500px;left:70px;margin-left:1px;'>";

echo "<table border='1' bordercolor='white' style='position:relative;top:20px; display:inline-table;margin-left:250px;border: 1px solid white;border-spacing:20px;color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>  <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Player </td><td style='padding:10px 10px 10px 10px ;'>" .$Name1. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Matches </td> <td style='padding:10px 10px 10px 10px ;'>" .$Matches1. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Average </td> <td style='padding:10px 10px 10px 10px ;'>" .$Average1. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Strike Rate </td> <td style='padding:10px 10px 10px 10px ;'>" .$SR1. " </td> </tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> T20 Average </td><td style='padding:10px 10px 10px 10px ;'>" .$TTaverage1. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> T20 Strike Rate </td><td style='padding:10px 10px 10px 10px ;'>" .$TTstrikerate1. "</td></tr> <tr> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Base Price </td><td style='padding:10px 10px 10px 10px ;'>" .$BP1. "</td> </tr></table>";
}
else
echo "Data not found";

if($keepTrack2==1)
{
$name2=str_replace(' ', '', $player2);
$srcc="images/" . $name2 . ".png";
echo "<img src=$srcc style='position:absolute;top:500px;left:1080px;margin-left:1px;'>";
echo "<table border='1' bordercolor='white' style='position:relative;top:20px; display:inline-table;margin-left:40px;border: 1px solid white;border-spacing:20px;color:#ffffff;text-decoration: none;font-size:1.3em;font-weight :100;transition: 0.5s all;-webkit-transition: 0.5s all;-moz-transition: 0.5s all;-o-transition: 0.5s all;'>  <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Player </td><td style='padding:10px 10px 10px 10px ;'>" .$Name2. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white;padding:10px 10px 10px 10px ;'> Matches </td> <td style='padding:10px 10px 10px 10px ;'>" .$Matches2. "</td></tr> <tr style='border: 1px solid white;'><td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Average </td> <td style='padding:10px 10px 10px 10px ;'>" .$Average2. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Strike Rate </td> <td style='padding:10px 10px 10px 10px ;'>" .$SR2. " </td> </tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> T20 Average </td><td style='padding:10px 10px 10px 10px ;'>" .$TTaverage2. "</td></tr> <tr style='border: 1px solid white;'> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> T20 Strike Rate </td><td style='padding:10px 10px 10px 10px ;'>" .$TTstrikerate2. "</td></tr> <tr> <td style='border: 1px solid white; padding:10px 10px 10px 10px ;'> Base Price </td><td style='padding:10px 10px 10px 10px ;'>" .$BP2. "</td> </tr></table>";
$BP1=str_replace(',','',$BP1);
$BP2=str_replace(',','',$BP2);
echo"</br></br><h3 style='text-align:center; color:white;'>Negotiation Amount: ".(intval($BP1)-intval($BP2))."</h3>";
}
else
echo "data not found";
?>
				
<script>
$("img").error(function(){$(this).hide();});
</script>
				
		<div class="clear"> </div>
		 </div>
</div>
</div>
<div class="message">
	<div class="wrap">
		
		<div class="buttons">
    <div class="span1">
    	<a href="#">
    		
    		<div class="clear"></div>
    	</a>
    </div>	
    <div class="span2">
    	<a href="#">
    	
    		<div class="clear"></div>
    	</a>
    </div>
    <div class="clear"></div>	
</div>	
</div>
</div>	

</body>
</html>