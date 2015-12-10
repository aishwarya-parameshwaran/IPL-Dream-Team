<html>
<head> <link rel="stylesheet" type="text/css" href="css/magnific-popup1.css"> </head>

<?php

$listarray = explode("\n", file_get_contents('batsmenoutput.txt'));
							echo "<h4><a href='#'>Batsmen</a></h4>";
							echo"<ul style='overflow-y: auto; height: 200px;'>";
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
							echo"<ul style='overflow-y: auto; height: 200px;'>";
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
							</html>
							