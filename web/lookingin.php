<?php
$savefile = "ATT.txt";
$totalperwhile = "10000000";

$countingwhile = 0;
while (True) {
    $lists = file_get_contents('https://sylocet-tools.herokuapp.com/tes.php');
    $splitter = explode("|", $lists);
    $totalpernum = 0;
    while (True) {
        $generator = "$splitter[0]$splitter[1]".mt_rand(1000, 9999);
        echo "[$countingwhile] [$totalpernum] $generator\n";
        file_put_contents($savefile, $generator.PHP_EOL, FILE_APPEND);
        $totalpernum++;
        if ($totalpernum > 10) {
            break;
        }
    }
        $countingwhile++;
        if ($countingwhile > $totalperwhile) {
            break;
    }
}

function PecahNope($nope) {
$procnope = substr($nope, 0, 6);
$firstnope = substr($procnope, 0, 3);
$secondnope = substr($procnope, 3, 6);
$result = "$firstnope|$secondnope";

return $result;
}
