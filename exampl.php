<?php
/*
Author : uev1
Copyrights 2017
This file is under MIT license
https://opensource.org/licenses/MIT
*/

	require "gBookAPI";

  	$isbn = "9781438076324";
  	gBookAPI();


	echo $title. '<br />';
	echo $authors. '<br />';
	echo $printType. '<br />';
	echo $pageCount. '<br />';
	echo $publisher. '<br />';
	echo $publishedDate. '<br />';
	echo $description. '<br />';
	echo $thumbnail. '<br />';

?>