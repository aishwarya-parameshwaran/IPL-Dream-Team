
<?php
//require('db.php');
$MySQLOutput1= mysqli_query($connection,'select `Acceptable` from `training dataset for bowlers`');
								if (isset($MySQLOutput1))
								{
										$count2  =   mysqli_num_rows($MySQLOutput1);
										$HTMLn='';
										$yes=0;
										$no=0;
										if($count2 > 0)
										{
											
											while($row=mysqli_fetch_array($MySQLOutput1))
											{
												$Acceptable = $row['Acceptable'];
													if ($Acceptable=='Yes')
													{
													$yes=$yes+1;
													
													}
													else
													$no=$no+1;
												
											}
										}
								}
								//echo $yes . " ". $no;
								//echo "<br>";
								
$MySQLOutput2= mysqli_query($connection,'select `Name`, `Average`, `Economy`,`SR`, `T20 Average`, `T20 Economy`, `T20 Strike Rate` from `ipl bowlers dataset`');
$i=1;
$averageyes=0;
$averageno=0;
$NameList='';
if (isset($MySQLOutput3))
	{
		$count3  =   mysqli_num_rows($MySQLOutput3);
	}
								if (isset($MySQLOutput2))
								{
										$count2  =   mysqli_num_rows($MySQLOutput2);
										if($count2 > 0)
										{
											while($row=mysqli_fetch_array($MySQLOutput2))
											{
												$Name=$row['Name'];
												
												$Average = $row['Average'];
												$Economy = $row['Economy'];
												$Strike  = $row['SR'];
												$T20Average = $row['T20 Average'];
												$T20Economy = $row['T20 Economy'];
												$T20Strike = $row['T20 Strike Rate'];
												
															$MySQLOutput3= mysqli_query($connection,'select `Average`, `Acceptable` from `training dataset for bowlers`');
															$count3  =   mysqli_num_rows($MySQLOutput3);
															$averageyes=0;
															$averageno=0;
															$economyyes=0;
															$economyno=0;
															$strikeyes=0;
															$strikeno=0;
															$T20averageyes=0;
															$T20averageno=0;
															$T20economyyes=0;
															$T20economyno=0;
															$T20strikeyes=0;
															$T20strikeno=0;
															while($row2=mysqli_fetch_array($MySQLOutput3))
															{
															$AverageTraining=$row2['Average'];
															$Acceptable = $row2['Acceptable'];
															if ($Average==$AverageTraining)
															{
																if ($Acceptable=="Yes")
																{
																	$averageyes=$averageyes+1;
																}
																else
																$averageno=$averageno+1;
															}
															}
															
															$MySQLOutput4= mysqli_query($connection,'select `Economy Rate`, `Acceptable` from `training dataset for bowlers`');
															$count4  =   mysqli_num_rows($MySQLOutput4);
															$economyyes=0;
															$economyno=0;
															while($row3=mysqli_fetch_array($MySQLOutput4))
															{
															$EconomyTraining=$row3['Economy Rate'];
															$Acceptable = $row3['Acceptable'];
															if ($Economy==$EconomyTraining)
															{
															if ($Acceptable=="Yes")
															{
															$economyyes=$economyyes+1;
															}
															else
															$economyno=$economyno+1;
															}
															}
															
															$MySQLOutput5= mysqli_query($connection,'select `Strike Rate`, `Acceptable` from `training dataset for bowlers`');
															$count5  =   mysqli_num_rows($MySQLOutput5);
															$strikeyes=0;
															$strikeno=0;
															while($row4=mysqli_fetch_array($MySQLOutput5))
															{
															$StrikeTraining=$row4['Strike Rate'];
															$Acceptable = $row4['Acceptable'];
															if ($Strike==$StrikeTraining)
															{
															if($Acceptable=="Yes")
															{
															$strikeyes=$strikeyes+1;
															}
															else
															$strikeno=$strikeno+1;
															}
															}
															
															$MySQLOutput6= mysqli_query($connection,'select `T20 Average`, `Acceptable` from `training dataset for bowlers`');
															$count6  =   mysqli_num_rows($MySQLOutput6);
															$T20averageyes=0;
															$T20averageno=0;
															while($row5=mysqli_fetch_array($MySQLOutput6))
															{
															$T20AverageTraining=$row5['T20 Average'];
															$Acceptable = $row5['Acceptable'];
															if ($T20Average==$T20AverageTraining)
															{
															if($Acceptable=="Yes")
															{
															$T20averageyes=$T20averageyes+1;
															}
															else
															$T20averageno=$T20averageno+1;
															}
															}
															
															
															$MySQLOutput7= mysqli_query($connection,'select `T20 Economy R`, `Acceptable` from `training dataset for bowlers`');
															$count7  =   mysqli_num_rows($MySQLOutput7);
															$T20economyyes=0;
															$T20economyno=0;
															while($row6=mysqli_fetch_array($MySQLOutput7))
															{
															$T20EconomyTraining=$row6['T20 Economy R'];
															$Acceptable = $row6['Acceptable'];
															if ($T20Economy==$T20EconomyTraining)
															{
															if($Acceptable=="Yes")
															{
															$T20economyyes=$T20economyyes+1;
															}
															else
															$T20economyno=$T20economyno+1;
															}
															}
															
															$MySQLOutput8= mysqli_query($connection,'select `T20 Strike Rate`, `Acceptable` from `training dataset for bowlers`');
															$count7  =   mysqli_num_rows($MySQLOutput8);
															$T20strikeyes=0;
															$T20strikeno=0;
															while($row7=mysqli_fetch_array($MySQLOutput8))
															{
															$T20StrikeTraining=$row7['T20 Strike Rate'];
															$Acceptable = $row7['Acceptable'];
															if ($T20Strike==$T20StrikeTraining)
															{
															if($Acceptable=="Yes")
															{
															$T20strikeyes=$T20strikeyes+1;
															}
															else
															$T20strikeno=$T20strikeno+1;
															}
															}
															
															//echo $averageyes. " ". $averageno. " ". $economyyes. " ". $economyno. " ", $strikeyes. " ". $strikeno. " ".$T20averageyes. " ". $T20averageno. " ".$T20economyyes. " " .$T20economyno. " " .$T20strikeyes. " ". $T20strikeno;															
															//echo "<br>";
															
															$probYes = ($yes/($yes+$no));
															$probNo  = ($no/($yes+$no));
															//echo $yes. " ". $no;
															//echo "<br>";
															//echo $probYes. " ". $probNo;
															//echo "<br>";
															$acceptableYes = ( ($averageyes * $economyyes * $strikeyes * $T20averageyes * $T20economyyes * $T20strikeyes)/ pow($yes ,6) ) * $probYes;
															$acceptableNo = ( ($averageno * $economyno * $strikeno * $T20averageno * $T20economyno * $T20strikeno)/ pow($no , 6) ) * $probNo;
															
															//echo $acceptableYes. " ". $acceptableNo;
															//echo "<br>";
															if($acceptableYes>=$acceptableNo)
															{
															if ($i==1)
															{
															$NameList.=$Name;
															$i=$i+1;
															}
															else
															$NameList.="-".$Name;
															
															
															}
															
															
						
												
														
											}
											
										//echo $NameList;
										$list = explode("-", $NameList);
								
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
								echo "</tr> </table>";
										
											
										}
								}
								
								
								
?>
