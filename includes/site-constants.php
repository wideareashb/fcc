<?php

define('ENCODED_AREA_NAME', 'fortismere-community-choir') ;
define('ENCODED_AREA_NAME_OLD', 'fortismere-community-choir') ;
define ('_404_PAGE', "404.thtml");
define('AREAID',171);
define('AREAID_OLD',171);
define('SITE_NAME', 'fortismerecommunitychoir.org.uk') ;

define('SITE_NAME_COMPLETE', 'https://www.fortismerecommunitychoir.org.uk') ;

define('SITE_NAME_FULL', 'www.fortismerecommunitychoir.org.uk') ;
define('REDIRECT_301_QUESTIONNAIRE', 121983);

define('SITE_ID', 3) ;

define('MODULE_USER_COOKIE','WideArea-User');
define('MODULE_SESSION_COOKIE','WideArea-Session');



/** TEMPLATE **/
define('IT_CMS_DOC_ROOT', $_SERVER['DOCUMENT_ROOT']) ;
define('TEMPLATE_FILE_EXTENSION', '.thtml') ;
/** HANDLER **/
define('HANDLER_LOCAL', $_SERVER['DOCUMENT_ROOT'].'/../includes/HandlerLocal.php') ;
/** SEARCH **/
define('SEARCH_MIN_SCORE',0.05);

/** PAGINATION **/
define('ELEMENTS_DIR', $_SERVER['DOCUMENT_ROOT'].'/elements/');
define('PAGES_BAR_TEMPLATE', $_SERVER['DOCUMENT_ROOT'].'/elements/pages_bar.thtml') ;
define('PAGES_BAR_MAX', 10) ;
define('ARTICLE_PAGINATION_TEMPLATE', $_SERVER['DOCUMENT_ROOT'].'/elements/article-pagination.html') ;

/** EMAIL A FRIEND **/
define('SENDMAIL_TEMPLATE', $_SERVER['DOCUMENT_ROOT'].'/elements/email-a-friend/sendmail_template.txt') ;
define('EMAILAFRIEND_TEMPLATE', $_SERVER['DOCUMENT_ROOT'].'/elements/email-a-friend/email-a-friend_template.thtml') ;
define('MESSAGE_TO_FRIEND_TITLE', 'Message from www.widearea.co.uk') ;
define('EMAIL_A_FRIEND_MESSAGE', '<div class="emailbox"><p>&nbsp;</p><p align=center><b>Thank you.<br>Your friend has been sent a link to this article</b></p><p>&nbsp;</p></div>') ;


/** QUESTIONNAIRE V2 ON **/
define('USE_QUESTIONNAIRE_V2', true) ;		
define('QUESTIONNAIRE_OBJECT_INCLUDE_PATH', $_SERVER['DOCUMENT_ROOT'].'/../../common/includes/cms-items/') ;
define('CHECK_QUESTIONNAIRE_RESPONSES_FOR_SPAM', '122018') ;

#use sphinx search (ticket #101351)
define('USE_CONTENT_INDEXED_TABLE', true);
define('USE_SPHINX_INDEXED_TABLE', true);
define('SEARCH_MIN_SCORE',0.05);


define('ARTICLE_TAGS_TEMPLATE', $_SERVER['DOCUMENT_ROOT'].'/elements/article_tags.thtml');

?>
