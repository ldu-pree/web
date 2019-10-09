#!/usr/bin/php
<?PHP

$count = 0;

while ($count < 1000)
{
	echo "X";
	$count++;
	if ($count % 100 == 0)
		echo "\n";
}

?>
