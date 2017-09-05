<?php

	function gBookAPI(isbn) {

  	$isbn = "YOUR_ISBN";
  	$key = "YOUR_API_KEY"
	$json = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:'.$isbn);
	$obj = json_decode($json, true);


	$title = $obj['items'][0]["volumeInfo"]["title"] ;
	$authors = $obj['items'][0]["volumeInfo"]["authors"][0] ;
	$printType = $obj['items'][0]["volumeInfo"]["printType"] ;
	$pageCount = $obj['items'][0]["volumeInfo"]["pageCount"] ;
	$publisher = $obj['items'][0]["volumeInfo"]["publisher"] ;
	$publishedDate = $obj['items'][0]["volumeInfo"]["publishedDate"] ;
	$description = $obj['items'][0]["volumeInfo"]["description"] ;
	$thumbnail = $obj['items'][0]["volumeInfo"]["imageLinks"]["thumbnail"] ;    

	}

	function gBookAPI(title) {
		//To be completed
	}
?>