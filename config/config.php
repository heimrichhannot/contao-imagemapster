<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['imagemapster'] = 'ModuleImageMapster';


/**
 * jQLib HOOK (customize)
 */
$GLOBALS['TL_JQUERY'][] = '/system/modules/imagemapster/html/jquery.imagemapster.js';
$GLOBALS['TL_JQUERY'][] = '/system/modules/imagemapster/html/jquery.imagemapster-custom.js';