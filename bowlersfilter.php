<?php 
set_time_limit(0);
sleep(60);
$newlist = explode("\n", file_get_contents('list1.txt'));
	$HTMLlist = explode(",", $newlist[1]);
$HTML = $HTMLlist[1];	
								if(isset(HTMLnew))
								{									
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
								}
						
							
								 ?>