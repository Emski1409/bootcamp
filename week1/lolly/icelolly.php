<?php

class Lolly{
	
	private $flavour;
	private $bitesRemaining;

	function __construct($requestedFlavour, $requestedNumberOfBites) {
		$this->flavour = $requestedFlavour;
		$this->bitesRemaining = $requestedNumberOfBites;
	}


	function getFlavour() {
		return $this->flavour;
	}

	
	function takeBite() {
	
		$this->bitesRemaining = $this->bitesRemaining - 1;
	} 

	
	function getBitesRemaining() {
		return $this->bitesRemaining;
	}

}

class LargeLolly extends Lolly{

}

Class LargeChocolateMagnum extends Lolly{
		public function __construct()
		{
				parent::__construct ("Chocolate", 10);
		}

}
?>