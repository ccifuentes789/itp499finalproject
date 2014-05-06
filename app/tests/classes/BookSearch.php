<?php


class BookSearch{

	
	protected $books;

	public function __construct($b){
		$this->books = $b;
		
	}

	public function find($string, $e){
		$found = false;
		$exact = $e;
		
		
		
		foreach($this->books as $book){
			
			$pos = stripos($book['title'], $string);
			$exactpos = strcasecmp($book['title'], $string);
			
			if($exact=== false){
				if($pos!=false){
					$found= true;
					
				}
			}
			else{
				if($exactpos===0){
					$found = true;
				
				}
			}
			
			
		}
		
		return $found;
		
	}

}