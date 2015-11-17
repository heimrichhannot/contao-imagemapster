<?php


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['imagemapster'] = 'HeimrichHannot\Imagemapster\ModuleImageMapster';


if(TL_MODE == 'FE')
{
// 	$GLOBALS['TL_JAVASCRIPT']['rwdImageMaps'] = '/system/modules/imagemapster/assets/js/jquery.rwdImageMaps.js|static';
	$GLOBALS['TL_JAVASCRIPT']['imagemapster'] = '/system/modules/imagemapster/assets/js/jquery.imagemapster.js|static';
	$GLOBALS['TL_JAVASCRIPT']['imagemapster-custom'] = '/system/modules/imagemapster/assets/js/jquery.imagemapster-custom.js|static';
}