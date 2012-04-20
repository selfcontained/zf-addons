<?php
//Checkout ZF into vendors directory for travis-ci
$target = __DIR__."/Zend";

if(!file_exists($target)) {
	$zfRepo = 'http://framework.zend.com/svn/framework/standard/tags/release-1.11.11/library/Zend';
	$cmd = "svn export $zfRepo $target";
	echo "Checking out ZF: $cmd";
	exec($cmd);
}
