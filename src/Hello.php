<?php
/**
 * Hello
 *
 * @package Zavy86\ComposerPackageTest\
 * @author Manuel Zavatta <manuel.zavatta@gmail.com>
 */

namespace Zavy86\ComposerPackageTest;

class Hello{
	/**
	 * Say hello to ...
	 *
	 * @param string $name
	 * @return string
	 */
	public static function to(string $name):string{
		return 'Hello '.$name.'!';
	}
}
