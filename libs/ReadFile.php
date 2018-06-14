<?php

class ReadFile
{
	private $file;
	public $path = '/home/user11/public_html/php/task3/';
	
	public function __construct($file) {
		if(is_file($file)) {
			$this->file = $file;
		} else {
			echo 'Can not open file';
		}
	}
	
	public function getFile() {
		return $this->file;
	}
	
	public function getStringFromFile($string) {
		$file = $this->getFile();
		$content = file($file);
		if($content[$string-1]) {
			return $content[$string-1];
		} else {
			echo "the file does not have as many rows";
		} 
	}
	
	public function getSymbolFromString($string, $symbol) {
		if($str = $this->getStringFromFile($string)) {
			return $str[$symbol];
		} else {
			echo "Enter Number of symbol, then Number of string and Name of file";
		}
	}
	
	public function printsAllString() {
		$file = $this->getFile();
		$string = file($file);
		foreach($string as $str) {
			echo $str . "<br>";
		}
	}
	
	public function printsAllSymbols() {
		$file = $this->getFile();
		$fileString = file_get_contents($file);
		$len = strlen($fileString);
		for($i = 0; $i <= $len; $i++) {
			echo $fileString[$i] . " ";
		}
		echo "<br>";
	}
	
	public function replaceString($string, $newStr) {
		$file = $this->getFile();
		$fileString = file_get_contents($file);
		$str = $this->getStringFromFile($string);
		$newText = str_replace($str, $newStr, $fileString);
		if(file_put_contents($this->path.'string_replace'.$file, $newText)) {
			return print('String replaced <br>');
		}
		
		return print('Can not replaced the string <br>');
	}
	
	public function replaceSymbol($symbol, $newSym) {
		$file = $this->getFile();
		$fileString = file_get_contents($file);
		$len = strlen($fileString);
		for($i = 0; $i <= $len; $i++) {
			if($fileString[$i] == $symbol) {
				$newText = str_replace($symbol, $newSym, $fileString);
			}
		}
		if(file_put_contents($this->path.'symbol_replace'.$file, $newText)) {
			return print('Symbol replaced <br>');
		}
		
		return print('Can not replaced the symbol <br>');

	}
}