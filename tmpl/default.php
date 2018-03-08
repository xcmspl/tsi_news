<?php
    /**
    * @title			TSIMAP
    * @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
    * @license   		GNU General Public License version 3 or later.
    * @author url   	http://www.tsi.info.pl
    * @developers   	Design Studio WWW
    */

    // No direct access
    defined('_JEXEC') or die('Restricted access');

    if($theme == 'grid'){
        include 'modules/mod_tsinews/tmpl/theme/grid.php';
    }
    
    if($theme == 'carousel'){
        include 'modules/mod_tsinews/tmpl/theme/carousel.php';
    }
	echo tsiNews::Footer(); 
?>


