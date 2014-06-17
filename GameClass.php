<?php
class Game{
	private $win ; 
	private $lose;
	private $playedTime; 
	
	function start(){
		$this->win = FALSE ; 
		$this->lose = FALSE ;
		$this->playedTime = microtime(TRUE) ;
	}
	function setWin(){
		$this->win = TRUE;
	}
	function setLose(){
		$this->lose = TRUE;
	}
	function isGameOver(){
		if ($this->win) {
			return TRUE;
		}
		if ($this->lose) {
			return TRUE;
		}
		
		return FALSE;
	}
}
?>