<?php
$csv = escapeshellarg($_POST['csv']);

$command = escapeshellcmd("python3 bitwise_operations.py $csv");

$output = shell_exec($command);

echo "$output";
?>