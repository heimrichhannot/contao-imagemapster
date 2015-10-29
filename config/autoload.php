<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Imagemapster
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ImageMapster'       => 'system/modules/imagemapster/ImageMapster.php',
	'ModuleImageMapster' => 'system/modules/imagemapster/ModuleImageMapster.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'imagemapster_saxony'                    => 'system/modules/imagemapster/templates',
	'imagemapster_saxony_big'                => 'system/modules/imagemapster/templates',
	'imagemapster_saxony_big_profile'        => 'system/modules/imagemapster/templates',
	'imagemapster_saxony_medium'             => 'system/modules/imagemapster/templates',
	'imagemapster_saxony_medium_eventsearch' => 'system/modules/imagemapster/templates',
	'imagemapster_saxony_profile'            => 'system/modules/imagemapster/templates',
	'imagemapster_tnu_netzwerk'              => 'system/modules/imagemapster/templates',
	'imagemapster_tnu_partner'               => 'system/modules/imagemapster/templates',
	'imagemapster_tnu_regions'               => 'system/modules/imagemapster/templates',
	'mod_imagemapster'                       => 'system/modules/imagemapster/templates',
));
