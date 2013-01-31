<?php
$autoloader = require_once('/Users/dbojdo/Sites/velageo/App/vendor/autoload.php');
use Webit\Parser\Apsv\Parser\Parser;

$parser = new Parser();
$apsv = $parser->parse('20121210_01.apv');
var_dump($apsv);
die();
$set = SpsSet::create($xps, $sps);

$xRows = array_values($xps->getRowsByType(RowInterface::ROW_TYPE_CROSS));
$sRows = array_values($sps->getRowsByType(RowInterface::ROW_TYPE_SOURCE));
$rRows = array_values($rps->getRowsByType(RowInterface::ROW_TYPE_RECIVE));

var_dump($xRows[0]);
die();
echo count($xRows) ."\n";
echo count($sRows) ."\n";
echo count($rRows) ."\n";
$s0 = $sps->getRowsFor($xRows[0]);
$r0 = $rps->getRowsFor($xRows[0]);

echo count($s0) ."\n";
echo count($r0) ."\n";