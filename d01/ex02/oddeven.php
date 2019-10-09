#!/usr/bin/php
<?php
$int = 0;
while ($int == 0)
{
	echo "Enter a number: ";
	$handle = fopen ("php://stdin","r");
	$line1 = fgets($handle);
	$line = trim($line1);
if (preg_match('/^-?[0-9]{1,4}$/', $line))
{
	if ($line % 2 == 0)
		echo "The number $line is even\n";
	else
		echo "The number $line is odd\n";
}
else
	echo "'$line' is not a number\n";
}
fclose($handle);
?>
