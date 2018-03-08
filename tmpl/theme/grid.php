<?php
    /**
    * @title			TSINEWS
    * @copyright   		Copyright (C) 2011-2017 Design Studio WWW, All rights reserved.
    * @license   		GNU General Public License version 3 or later.
    * @author url   	http://www.tsi.info.pl
    * @developers   	Design Studio WWW
    */

    // No direct access
    defined('_JEXEC') or die('Restricted access');
    
    switch ($columns) {
        case 1:
            $column_class = 'col-sm-12';
            break;
    
        case 2:
            $column_class = 'col-sm-6';
            break;
        
        case 3:
            $column_class = 'col-sm-4';
            break;
        
        case 4:
            $column_class = 'col-sm-3';
            break;

        default:
            $column_class = 'col-sm-12';
            break;
    }
    
    $CountNews = count($News);

?>


<div class="news-grid-container">
    <div class="news-grid">
	<?php
            
        
        
            $i = 1;
            
            foreach($News as $Item){ 
                
                
                if($i == 1){
                    echo '<div class="row">';
                }
                echo '<div class="'.$column_class.'">'; 
                    include 'modules/mod_tsinews/tmpl/elements/item.php'; 
                echo '</div>';
                
                if($i%$columns == 0 AND $i != $CountNews){
                    echo '</div><div class="row">';
                }
                
                if($i == $CountNews){
                    echo '</div>';
                }
                    
                $i = ++$i;   
            } 
	?>
    </div>
</div>



