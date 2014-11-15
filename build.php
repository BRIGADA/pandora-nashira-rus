<?php

@mkdir('build');
$dh = opendir('.');
$ta = 0;
$tt = 0;
while (($fn = readdir($dh)) !== false) {
    if (fnmatch("*.xml.txt", $fn)) {

        $fi = pathinfo($fn, PATHINFO_FILENAME);
	printf("%24s :", $fi);
        $f = file_get_contents($fn);
        $d = explode("\n\n---\n\n", $f);
        $o = array();
        $ct = 0;
        $o[] = '<?xml version="1.0" encoding="utf-8"?>';
        $o[] = '<language>';
        foreach ($d as $e) {
            $r = explode("\n\n", $e);
            if ($r[1] != $r[2]) {
                $ct++;
            }
            $o[] = "\t" . '<entry name="' . $r[0] . '" value="' . encode($r[2]) . '"/>';
        }
        $o[] = '</language>';
        $o[] = "\n";

        file_put_contents('build' . DIRECTORY_SEPARATOR . $fi, implode("\n", $o));
        if (count($d)) {
            printf(" %u/%u (%u%%)\n", $ct, count($d), 100 * $ct / count($d));
        }
        $ta += count($d);
        $tt += $ct;
    }
}

printf("-----------------------------------------------------------\n");
printf("%24s : %u/%u (%u%%)\n", 'Total', $tt, $ta, 100 * $tt / $ta);

function encode($str) {
    $str = str_replace('ç', 's', $str);
    $str = str_replace('é', 'e', $str);
    $str = str_replace('ö', 'o', $str);
    $str = str_replace('á', 'a', $str);
    $str = str_replace('ä', 'a', $str);

    if(@iconv("UTF-8", "CP1251", $str) === FALSE) {
	echo PHP_EOL;
	$s = preg_split('//u', $str);
	foreach($s as $i => $c) {
	    if(@iconv("UTF-8", "CP1251", $c) === FALSE){
		echo "Bad character '{$c}' on {$i}: '", substr($str, $i - 20, 40),"'", PHP_EOL;
		$s[$i] = '#';
	    }
	}
	$str = implode('', $s);
    }

    return iconv("CP1252", "UTF-8", iconv("UTF-8", "CP1251", $str));
}
