#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
        $r = explode(" ", $str);
        sort($r);
		$ret = array();
		foreach ($r as $key)
		{
			if (!empty($key))
				$ret[] = $key;
		}
		unset($r);
		return ($ret);
    }
    $arrc = 0;
    $in = 1;
    while ($in < $argc)
    {
        $arr = ft_split($argv[$in]);
        $i = 0;
        while ($i <= sizeof($arr))
        {
            print_r($arr[$i]);
            print_r("\n");
            $i++;
        }
        $in++;
    }
?>