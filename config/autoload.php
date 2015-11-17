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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'HeimrichHannot\Imagemapster\ImageMapster'       => 'system/modules/imagemapster/classes/ImageMapster.php',

	// Modules
	'HeimrichHannot\Imagemapster\ModuleImageMapster' => 'system/modules/imagemapster/modules/ModuleImageMapster.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'imagemapster_saxony'        => 'system/modules/imagemapster/templates/maps',
	'imagemapster_saxony_big'    => 'system/modules/imagemapster/templates/maps',
	'imagemapster_saxony_medium' => 'system/modules/imagemapster/templates/maps',
	'mod_imagemapster'           => 'system/modules/imagemapster/templates/modules',
));
