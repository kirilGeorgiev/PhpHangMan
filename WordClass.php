<?php
class WordHandle extends RandomWord{
	
	private $guessedPart;
	private $letterGuesses; 
	private $charInput;
	private $word; 
	
	function newWordHandle(){
		$word = new RandomWord;
		iniGuessPartString();
	}
	
	function iniGuessPartString(){
		for ($i=0; $i <strlen($this->word) ; $i++) { 
			$this->guessedPart[$i] = '_';
		}
	}
	
	function setCharInPut($inputChar){
		$inputChar = trim($inputChar);
		$inputChar = substr($input_string, 0 , 1); 
		$this->charInput = $inputChar ; 
	}
	function isGuessTrue(){
		
	}
	
} 
?>