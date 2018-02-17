<?php 
class WMRGpx {
	public function __construct() {
		$bing_key='Amw2lh34kxU-6D0i5kpZjjsBw8HecF7ZjVDtSNixG3H2-MEOw-14JS-lgCT9W0BD';
		$points='43.77519,10.44467';
		$base_url = 'http://dev.virtualearth.net/REST/v1/Elevation/List';
		$url = "$base_url?points=$points&heights=ellipsoid&key=$bing_key";
		echo $url;
	}
}