<html>
<head>
	<title>example 1 securify user input text</title>
	<style type="text/css">
	.bar{
		background: green;
		height: 20px;
	}
	table{
		
	}
	</style>
</head>
<body>

	<table border="1px">
		<tr>
			<th>securified text</th>
			<th>securifing bar</th>
			<th>securifing percent</th>
		</tr>
		<?php 
			if(isset($_POST['string']) && $_POST['string']){
				require_once("../../Securify.php");
				$str = $_POST['string'];
				$securify = new Securify;
				for($i = 0; $i <= 100; $i+=10):
				?>
					<tr>
						<td><?php echo $securify($str,$i) ?></td>
						<td>
							<div class="bar" style="width:<?php echo $i."px" ?>"></div>
						</td>
						<td><?php echo $i ?>%</td>
					</tr>
				<?php
				endfor;
			}
		?>
	</table>
	<form action="" method="post">
		<input type="text" name="string" value="<?php echo isset($_POST["string"])?$_POST["string"]:""; ?>">
		<input type="submit" value="submit new text for securifing" >
	</form>
</body>
</html>
