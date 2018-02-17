<?php // WMR

require dirname(__FILE__).'/../src/autoload.php';

$version = WMRVersion::get();

print_r($version);