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
    $myarr = array();
    $in = 1;
    while ($in < $argc)
    {
        $arr = ft_split($argv[$in]);
        $i = 0;
        while ($i <= sizeof($arr))
        {
            $myarr[$arrc] = $arr[$i];
            $i++;
            $arrc++;
        }
        $in++;
        unset($arr);
    }
    $i = 0;
    sort($myarr);
    while ($i < $arrc)
    {
        echo $myarr[$i];
        if ($myarr[$i] != '')
            echo "\n";
        $i++;
    }
?>