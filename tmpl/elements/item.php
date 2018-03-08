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

?>

<div class="news-item-container">
    <div class="row">
        <div class="col-sm-5">
            <?php
                $Images = json_decode($Item['images'], true);
            ?>
            <style>
                #news_img_<?php echo $Item['id']; ?>{ 
                    background: url('<?php echo JUri::base().$Images['image_intro']; ?>') no-repeat center center; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo JUri::base().$Images['image_intro']; ?>', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo JUri::base().$Images['image_intro']; ?>', sizingMethod='scale')";
		}
            </style>
            <img id="news_img_<?php echo $Item['id']; ?>" src="modules/mod_tsinews/assest/img.png" alt="<?php echo $Images['image_intro_alt']; ?>" />
        </div>
        <div class="col-sm-7">
            <div class="news-title">
                <h3><?php echo $Item['title']; ?></h3>
            </div>
            <div class="news-desc">
                <?php echo tsiNews::PrepareDesc($Item['introtext']); ?>
            </div>
            <div class="news-more">
		<?php
                    $Link = JRoute::_(ContentHelperRoute::getArticleRoute(  $Item['id'],  $Item['catid'] ));
		?>
		<a class="btn btn-default" href="<?php echo $Link; ?>"><?php echo $more; ?></a>
            </div>
        </div>
    </div>
</div>