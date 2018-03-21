<?php

require 'Gacha.php';
use PHPUnit\Framework\TestCase;

class GachaMachineTest extends TestCase {

	public $GachaMachineInstance ;

	public function setUp()
	{
		$this -> GachaMachineInstance = new GachaMachine() ;
	}

	public function testMachineWorks()
	{
		// init set 100 Gachas
		$this -> GachaMachineInstance -> setGachas(100) ;
		// play one time
		$this -> GachaMachineInstance -> turnWheel() ;
		// it should -1 Gacha
		$this -> assertEquals( 99 , $this -> GachaMachineInstance -> getGachas() );

	}

}