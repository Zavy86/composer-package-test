<?php
/**
 * Examples - Index
 *
 * @package Zavy86\ComposerPackageTest\Examples
 * @author Manuel Zavatta <manuel.zavatta@gmail.com>
 */

use Zavy86\ComposerPackageTest\Hello;

require_once __DIR__.'/../vendor/autoload.php';

$name=$_GET['name']??'Zavy86';

echo Hello::to($name);
