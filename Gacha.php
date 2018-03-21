<?php

class GachaMachine {
	
	private $Gachas;

	/*
	* @brief return the num of Gacha in machine
	*
	*/

	public function getGachas()
	{
		return $this -> Gachas ;
	} 

	/*
	* @brief set the num of Gacha in machine
	* @param num: a number of Gachas
	*/

	public function setGachas( $num )
	{
		$this -> Gachas = $num;
	}

	/*
	* @brief turn one time , and Gacha will -1 in machine
	*
	*/

	public function turnWheel()
	{
		$this->setGachas( $this -> getGachas() -1 );
	}

}