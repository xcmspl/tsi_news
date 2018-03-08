<?php
	/**
	* @title	        TSI NEWS
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/
	defined('_JEXEC') or die('Restricted access');
	
    class tsiNews{
        
        
        public static function PrepareDesc($desc){
            $long = 155;
            $desc = strip_tags($desc);
            if(mb_strlen($desc) > $long){
                $desc = mb_substr($desc, 0, $long).'...';
            }
            return $desc;
        }
		
		public static function Footer(){
			$html = '';
			$html .= '<div style="';
			$html .= 'font-size:10px; color:#ddd; text-align:left;';
			$html .= '">';
			$html .= '<a style="color:#888;" href="https://www.designcart.pl" target="_blank">';
			$html .= '<img src="https://www.designcart.pl/images/dc_small.png" alt="designcart.pl" title="Author: Design Cart"/>';
			$html .= '</a>';
			$html .= '</div>';
			
			return $html;
		}
        
    }

?>