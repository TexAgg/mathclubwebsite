<?php

// Display output.
error_reporting(E_ALL);
ini_set("display_errors", 1);

$site_url = 'C:\Users\mgaik\Dropbox\Math\Pi Mu Epsilon\Website';

require $site_url . '\vendor\autoload.php';
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
// https://symfony.com/doc/current/components/filesystem/introduction.html#usage
$fs = new Filesystem();

$path = $fs->makePathRelative(
	'C:\Users\mgaik\Dropbox\Math\Pi Mu Epsilon\Website',
	'C:\Users\mgaik\Dropbox\Math\Pi Mu Epsilon\Website\utils'
);

echo $path;

?>