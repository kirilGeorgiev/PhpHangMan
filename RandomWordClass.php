<?php
class RandomWord{
	private $randomWord ; 
	
	function newRandomWord(){
		$wordList = array("kolaa", "konn", "durvoo", "zemqq", "monitorr", "lutenicaa", "diagramaa"); 
		$randomWord = mt_rand(0,6); 
		$this->randomWord = $wordList[$randomWord];
	}
	function getRandomWord(){
		return $this.RandomWord;
	}
} 
?> 