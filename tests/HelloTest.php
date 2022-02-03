<?php

namespace Zavy86\ComposerPackageTest\Test;

use Zavy86\ComposerPackageTest\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase{

	public function testHelloToWorld():void{
		$this->assertSame('Hello World!',Hello::to('World'));
	}

	public function testHelloToZavy86():void{
		$this->assertSame('Hello Zavy86!',Hello::to('Zavy86'));
	}

	public function testHelloToRandom():void{
		$random=md5(time());
		$this->assertSame('Hello '.$random.'!',Hello::to($random));
	}

}
