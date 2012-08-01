<?php 
require_once("../Securify.php");


if(isset($_POST['string']) && $_POST['string']){
	$str = $_POST['string'];
	$securify = new Securify;
	for($i = 0; $i <= 100; $i+=10)
		echo $securify($str,$i) . " -- with $i persent of securification <br />" . PHP_EOL; 
}
?>
<form action="" method="post">
	<input type="text" name="string">
	<input type="submit">
</form>
