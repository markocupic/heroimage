<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package Gallery Creator
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['heroimage'] = 'name,type,headline;{hero_image_legend:hide},addHeroImage;{template_legend:hide},customTpl;{text_legend},text;{hero_image_button_legend},heroImageButtonText,heroImageButtonClass,heroImageButtonJumpTo;{hero_image_background_legend:hide],heroImageBackgroundColor,heroImageTextClass;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addHeroImage'] = 'singleSRC';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addHeroImage';


/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['addHeroImage'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addHeroImage'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonClass'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonClass'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('maxlength' => 200),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonText'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonText'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('maxlength' => 200),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonJumpTo'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonJumpTo'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('mandatory' => true, 'rgxp' => 'url', 'decodeEntities' => true, 'maxlength' => 255, 'fieldType' => 'radio', 'filesOnly' => true, 'tl_class' => 'w50 wizard'),
    'wizard' => array
    (
        array('tl_content', 'pagePicker')
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageBackgroundColor'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_content']['heroImageBackgroundColor'],
	'exclude' => true,
	'search' => true,
	'inputType' => 'text',
	'eval' => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageTextClass'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['heroImageTextClass'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'select',
    'options' => array('heroBrightText', 'heroDarkText'),
    'eval' => array('tl_class'=>'w50 wizard'),
    'sql' => "varchar(255) NOT NULL default ''"
);






