<?php
use PHPUnit\Framework\TestCase;

class WMRVersionTest extends TestCase
{

    public function testVersion() {
    	$v = WMRVersion::get();
    	$this->assertTrue(array_key_exists('name', $v));
    	$this->assertTrue(array_key_exists('version', $v));
    	$this->assertTrue(array_key_exists('date', $v));
    	$this->assertTrue(array_key_exists('routes', $v));
    	$this->assertEquals('WMR - Webmapp REST',$v['name']);
    }
}
