<html>
<head>
.addslashes($string).''
</head>
<body>
<p name="id123" id="one">
Text1
</p>

<p name="ok">
Text2
</p>

<script>
var x=document.getElementById("one");
<?php
$string="Thisisa";
$string2="helloworld";

$output=shell_exec("java -jar C:\Users\sakhalkar_laptop\Documents\NetBeansProjects\JavaApplication8\dist\JavaApplication8.jar $string $string");
echo $output;

?>
</script>


<div id="phpdiv" style="display:none;">
<?php
$a=$_GET['SelectedPlayer'];
echo $a;
?>
</div>


<?php

$dochtml = new DOMDocument();
$dochtml->loadHTMLFile('services.html');

$elm = $dochtml->getElementById('SelectedPlayer');

// get the tag name, and content
$tag = $elm->tagName;
$cnt = $elm->nodeValue;

echo $tag. ' - '. $cnt;           
?>

</body>
</html>