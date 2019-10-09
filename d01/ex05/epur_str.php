#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$r = explode(" ", $str);
		$ret = array();
		foreach ($r as $key)
		{
			if (!empty($key))
				$ret[] = $key;
		}
		unset($r);
		return ($ret);
    }
    $arr = ft_split($argv[1]);
    $i = 0;
    while ($i <= sizeof($arr))
    {
        print_r($arr[$i]);
        print_r(" ");
        $i++;
    }
    echo "\n";
?>