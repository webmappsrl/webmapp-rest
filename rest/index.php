<?php
require dirname(__FILE__).'/../src/autoload.php';
echo json_encode(WMRVersion::get());