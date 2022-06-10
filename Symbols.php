<?php

public function checkSymbols($string){
  $array = str_split(string);
  $stack = [];
  $openSymbols = ['{', '[', '('];
  $closeSymbols = [
	'}' => '{',
	']' => '[',
	')' => '('
	];
  	foreach( $array as $key => $value ){
    	if(in_array($value, $openSymbols)){
    		array_push($stack, $value);
    	} else {
    		if(array_slice($stack, -1, 1)[0] === $closeSymbols[$value]){
    			array_pop($stack);
    		} else {
	    		break;
  	  	}
	    }
	}
	if (count($stack) > 0){
		echo 'is not valid';
	}
	else{
		echo 'is valid';
	}
}

