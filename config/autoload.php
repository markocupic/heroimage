<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Markocupic',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Src
	'Markocupic\ContentHeroimage' => 'system/modules/heroimage/src/elements/ContentHeroimage.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_heroimage' => 'system/modules/heroimage/templates',
));
