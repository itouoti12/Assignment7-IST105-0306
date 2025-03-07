<?php
$publicIpcmd = escapeshellcmd("ec2-metadata -v");
$publicIp = shell_exec($publicIpcmd);
?>
<html>
<h1>Assignment7</h1>
<h2>This application is hosted on my EC2 instance with Public IP:<?php echo $publicIp; ?></h2>
<h2>Kansuke Ito</h2>
<form action="process.php" method="post">

<label>Series of integers separated by commas: </label>
<input type="text" name="csv" required>
<br/>

<input type="submit" value="send">
</form>
</html>
