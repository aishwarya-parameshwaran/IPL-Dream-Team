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
	//$min=0;
	//$max=120;
    $res = mysqli_query($connection,'select `Position`,`Name`,`Matches` from bowlers where `matches` BETWEEN "'.$min.'" AND "'.$max.'"');
    $count  =   mysqli_num_rows($res);
    $HTML='';
    if($count > 0)
    {
        while($row=mysqli_fetch_array($res))
        {
            $id         = $row['Position'];
            $product    = $row['Name'];
            $price      = $row['Matches'];
            
            
            $HTML .= '<div>';
            $HTML .= 'Player Position: '.$id;
            $HTML .= '<br />Player Name: '.$product;
            $HTML .= '<br />Number of matches: '.$price;
            
        }
    }
    else
    {
        $HTML='No Data Found';
    }
}
else
{
    $min = 10;
    $max = 120;
    $HTML='Search Products in range.';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
    <script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  </head>
  
<script type="text/javascript">
$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
  });
</script>
<body>
    <div>
      <!-- <h2>How to create Price Range Slider in jQuery & PHP with MySQL Example&nbsp;&nbsp;&nbsp;=> <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>-->

<form action="" method="post" id="products">
<div style="margin-left:20px">
    <label for="amount">Filter:</label>
    <input type="text" id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;" readonly>
    <br><br>
    <div id="slider-range" style="width:80%;"></div>
    <br><br>
    <input type="submit" value=" Show products " />
    <br><br>
    <?php echo $HTML; ?>
</div>
</form>
               
</body>
</html>