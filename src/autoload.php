<?php // autoload

// LIBRARIES NEED

// WMR Autoload
$path = dirname(__FILE__);
$d = dir($path.'/classes');
while (false !== ($entry = $d->read())) {
	if (preg_match('/\.php/', $entry)) {
		require "$path/classes/$entry";
	}
}
$d->close();