<?php

// set of functions used in handler and items plugins


//01/09/09: this 'if' statement MUST go around the whole contents of this file
if(!defined('FUNCTIONS_IS_INCLUDED')) {
 
define('FUNCTIONS_IS_INCLUDED', true) ;	
	
function getSearchString() {

	if (!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])) {
		return '';
	}

	$referrer=importVar($_SERVER['HTTP_REFERER'],'string');

	if (!empty($referrer)) {

		$aPath=parse_url($referrer);
		if(!isset($aPath['query'])){
			$aPath['query'] = '';
		}

		if ($aPath['host']==$_SERVER['HTTP_HOST']) {
			// Site search - in $search
			if (preg_match('/search=([^&]+)&*/',$aPath['query'],$aMatches)) {
				$searchString=$aMatches[1];
			} else {
				$searchString='';
			}
		} else {

			switch ($aPath['host']) {
				case (strpos($aPath['host'],'www.google.')===0):
					$searchString=getSearchEngineSearchString($aPath['query'],'q');
					break;
				case (strpos($aPath['host'],'search.yahoo.')!==false):
					$searchString=getSearchEngineSearchString($aPath['query'],'p');
					break;
				default:
					$searchString=getSearchEngineSearchString($aPath['query'],'q');
					break;
			}

		}
	} else {
		$searchString='';
	}

	$searchString=str_replace('+',' ',$searchString);
	return urldecode($searchString);

}


}
//01/09/09: this 'if' statement MUST go around the whole contents of this file


