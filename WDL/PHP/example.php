<!-- <?php
  //$var=array('Azam','Haris','Shadab','PK');
 // echo $var[0].'<br />'.$var[1].'<br />'.$var[2].'<br />'.$var[3].'<br />';

  //$var[0]=str_pad($var[0],6,'#',STR_PAD_LEFT);
  //$var[1]=str_pad($var[1],6,'#',STR_PAD_LEFT);
  //$var[2]=str_pad($var[2],6,'#',STR_PAD_LEFT);
  //$var[3]=str_pad($var[3],6,'#',STR_PAD_BOTH);

 // echo $var[0].'<br />'.$var[1].'<br />'.$var[2].'<br />'.$var[3].'<br />';

  // echo '<br />'.$var;

?> -->
<!DOCTYPE html>
<html>
<head>
	<title>My Php Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<?php
		echo"<h1>Welcome to php</h1>";
		if($_POST){
			$username=$_POST['username'];
			$brand=$_POST['brand'];
			echo"Thank you,<b>$username</b> You have voted for <b>$brand</b>";
		}
		else{
		echo <<<_END
		<form method="post" action="example.php">
		<br><label for="user">User Name:</label>
		<input type="text" name="username" id="username"/><br>
		<br><label>Please Vote for your favorite Mobile Brand </label><br>
		<br><label><Input type="radio" name="brand" value="Nokia"/>Nokia</label><br>
		<label><Input type="radio" name="brand" value="Apple"/>Apple</label>
		<br><label><Input type="radio" name="brand" value="Samsung"/>Samsung</label>
		<br><label><Input type="radio" name="brand" value="Mi"/>Mi</label>
		<br><label><Input type="radio" name="brand" value="HTC"/>HTC</label>
		<br><label><Input type="radio" name="brand" value="Asus"/>Asus</label>
		<br><br><input type="submit" value="Vote"/>
		</form>
_END;
}
?>
</body>
</html>