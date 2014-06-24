<?php
class WordHandle extends RandomWord{
	
	private $guessedPart;
	private $letterGuesses; 
	private $charInput;
	private $word; 
	private $lastGuess; 
	
	function newWordHandle(){
		$word = new RandomWord;
		iniGuessPartString();
	}
	function iniGuessPartString(){
		for ($i=0; $i <strlen($this->word) ; $i++) { 
			$this->guessedPart[$i] = '_';
		}
	}
	function getGuessedPart(){
		return $this->guessedPart; 
	}
	function getLastGuessResult(){
		return $this->lastGuess; 
	}
	
	function setCharInPut($inputChar){
		$inputChar = trim($inputChar);
		$inputChar = substr($input_string, 0 , 1); 
		$this->charInput = $inputChar ;
	}
	function isGuessTrue(){
		
		for($i = 0 ; i < strlen($this->word); $i++){
			if($this->word[$i] == $this->charInput){
				$this->lastGuess = TRUE;
				$this->guessedPart[$i] = $this->charInput; 
			}
			else{
				$this->lastGuess = FALSE; 
				$this-> letterGuesses = $this->letterGuesses.$this->charInput; 
			}
		}
		
	}
	
} 
?>