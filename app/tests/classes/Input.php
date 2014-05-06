<?php


class Input{

	
	
	public function get($e, $d = 'standard'){
		if(!isset($_GET [$e])){
			if(func_num_args()==2){
			return $d;
			}
			else{
				return null;
			}
			
		}
		
		return $_GET [$e];
	}
	

	
	

}