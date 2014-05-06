<?php

require_once __DIR__ . '/../classes/BookSearch.php';

class BookTest extends PHPUnit_Framework_TestCase {
	protected $books;
	
	public function setUp(){
		$this->books = [
			  [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
			  [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
			  [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
			  [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
			  [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
			  [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
			  [ 'title' => 'Head First Java', 'pages' => 200 ]
		];
	}

	public function test_search_javascript(){
	
		//Arrange
		$search = new BookSearch($this->books);
	

		//Act

		//$results = $search->find('javascript');
		$results = $search->find('javascript', false);
		$results2 = $search->find ('javascript web applications', true);
		$results3 = $search->find ('The Definitive Guide to Symfony', true);
		//Assert
		$this->assertEquals(true, $results);
		$this->assertEquals(true, $results2);
		$this->assertEquals(false, $results3);

	}




}