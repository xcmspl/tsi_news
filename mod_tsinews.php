<?php
	/**
	* @title	        TSI NEWS
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined('_JEXEC') or die('Restricted access');
	
	require_once( dirname(__FILE__).'/helper.php' );
    require_once 'modules/mod_tsinews/lib/tsi_news.php';

    $categories = $params->get('category');
    if(is_array($categories)){
        $query = '';
        $i = 1;
        foreach ($categories as $category) {
            if($i != count($categories)){
                $query .= "catid = '$category' OR ";
            }else{
                $query .= "catid = '$category'";
            }
            $i = ++$i;
        }
    }  

    $count = $params->get('count');
    $columns = $params->get('columns');
    $theme = $params->get('theme');
	$more = $params->get('more');

	$document = JFactory::getDocument();
	$db = JFactory::getDbo();
	
	
	if($theme == 'carousel'){
		$document->addStyleSheet(Juri::base()."modules/mod_tsinews/assest/mod_tsinews.css");
		$document->addStyleSheet(Juri::base()."modules/mod_tsinews/assest/owl_carousel/owl.carousel.css");	
		$document->addStyleSheet(Juri::base()."modules/mod_tsinews/assest/owl_carousel/owl.theme.css");	
		$document->addScript(Juri::base()."modules/mod_tsinews/assest/owl_carousel/owl.carousel.min.js");
	}

	$query_text = "SELECT * FROM #__content WHERE ($query) AND state = '1' order by created DESC LIMIT 0, $count";
	$db->setQuery($query_text);
	$News = $db->loadAssocList(); 
	  
	require( JModuleHelper::getLayoutPath( 'mod_tsinews' ) );
	$document = JFactory::getDocument();
	
	
	

	
?>