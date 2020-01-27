<html>
<body>
<?php
$json='{"Name":"Devanshi","City":"Jnd"}';
$a=JSON_decode($json,true);
echo $a["Name"];
echo "<br>";
echo $a["City"];
?>
</body>
</html>