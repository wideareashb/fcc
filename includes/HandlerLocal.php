<?php
require_once($_SERVER['DOCUMENT_ROOT'].'../../../../common/includes/HandlerLocal_Common.php') ;
require_once('site-constants.php') ;
require_once('/usr/local/src/websites/utils/register-globals.php') ;
require_once('BreadcrumbMaker.php') ;


class HandlerLocal extends HandlerLocal_Common {
	
	protected function __setSiteAttributes() {
		  //set this to true if we have 'email a friend' on the site
	      $this->_setupEmailAFriend = true ;
	      //set this to true if users can register and login on the site
	      $this->_canLoginOnSite = true ;		
	}	
	
	protected function __setHandlerEnvironment() {
		$this->_debugObj->output(__METHOD__.' started with $this->_requestURI='.$this->_requestURI) ;  
		
		parent::__setHandlerEnvironment() ;
		
		$this->setActiveNavigationPill() ;
		
		$this->_debugObj->output(__METHOD__.' exited') ;  		
	}
	
	private function setActiveNavigationPill() {
	}
	
	
	protected function __setHandlerOptions($currentItemID=0) {	
		$this->_debugObj->output(__METHOD__.' started with $this->_requestURI='.$this->_requestURI) ;  
		
		parent::__setHandlerOptions($currentItemID) ;	
	
		$this->_debugObj->output(__METHOD__.' exited') ;  
	}
}

?>
