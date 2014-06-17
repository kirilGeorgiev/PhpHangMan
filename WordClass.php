<?php
class WordHandle{
	private $randomWord;
	private $guessedPart;
	private $letterGuesses; 
	private $charInput;
	
	function newWord(){
		getRandomWord();
		iniGuessPartString();
	}
	
	function iniGuessPartString(){
		for ($i=0; $i <strlen($this->randomWord) ; $i++) { 
			$this->guessedPart[$i] = '_';
		}
	}
	function getRandomWord(){
		$wordList = array("kolaa", "konn", "durvoo", "zemqq", "monitorr", "lutenicaa", "diagramaa"); 
		$randomWord = mt_rand(0,6); 
		$this->randomWord = $wordList[$randomWord];
	}
	function setCharInPut($inputChar){
		$inputChar = trim($inputChar);
		$inputChar = substr($input_string, 0 , 1); 
		$this->charInput = $inputChar ; 
	}
	
} 
?>