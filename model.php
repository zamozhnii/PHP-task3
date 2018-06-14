<?php
require_once 'libs/ReadFile.php';
	
	$file = new ReadFile('file.txt');
	echo "<strong>string - </strong>";
	echo $file->getStringFromFile(5);
	echo "<br>";
	echo "<strong>symbol - </strong>";
	echo $file->getSymbolFromString(5, 5);
	echo "<br>";
	echo "<hr><strong>PRINT BY STRING</strong> <br><hr>";
	$file->printsAllString();
	echo "<hr><strong>PRINT BY SYMBOL</strong><br><hr>";
	$file->printsAllSymbols();
	$file->replaceString(1, 'asdafdsfs dfadasd asdasdasd asdasd');
	$file->replaceSymbol('a', 'OOO');