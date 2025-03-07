<?php

$csv = escapeshellarg($_POST['csv']);

$command = escapeshellcmd("python3 bitwise_operations.py $csv");

$output = shell_exec($command);

$publicIpcmd = escapeshellcmd("ec2-metadata -v");
$publicIp = shell_exec($publicIpcmd);
$host = escapeShellarg($_SERVER['HTTP_HOST']);

echo "$output";
?>

<h2>This result was processed on my EC2 instance with Public IP:<?php echo $publicIp; ?></h2>
<h2>Access the application via Load Balancer URL: http://<?php echo $host; ?>/process.php</h2>