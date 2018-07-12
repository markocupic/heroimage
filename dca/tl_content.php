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


$GLOBALS['TL_DCA']['tl_content']['palettes']['heroimage'] = 'name,type,heroImageHeadline;{hero_image_legend:hide},addHeroImage;{template_legend:hide},customTpl;{text_legend},heroImageText;{hero_image_button_legend},heroImageButtonText,heroImageButtonClass,heroImageButtonJumpTo;{hero_image_background_legend:hide],heroImageBackgroundColor;{hero_content_box_legend},heroContentboxTextAlign,heroContentboxOpacity;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addHeroImage'] = 'singleSRC,size';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addHeroImage';


/**
 * Add fields to tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageHeadline'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroImageHeadline'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('maxlength' => 200, 'tl_class' => 'w50 clr'),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageText'] = array(
    'label'       => &$GLOBALS['TL_LANG']['tl_content']['heroImageText'],
    'exclude'     => true,
    'search'      => true,
    'inputType'   => 'textarea',
    'eval'        => array('mandatory' => false, 'rte' => 'tinyMCE', 'helpwizard' => true),
    'explanation' => 'insertTags',
    'sql'         => "mediumtext NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['addHeroImage'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addHeroImage'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('submitOnChange' => true),
    'sql'       => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonClass'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('maxlength' => 200),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonText'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonText'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('maxlength' => 200),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageButtonJumpTo'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroImageButtonJumpTo'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('mandatory' => true, 'rgxp' => 'url', 'decodeEntities' => true, 'maxlength' => 255, 'fieldType' => 'radio', 'filesOnly' => true, 'tl_class' => 'w50 wizard'),
    'wizard'    => array
    (
        array('tl_content', 'pagePicker'),
    ),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroImageBackgroundColor'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroImageBackgroundColor'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('maxlength' => 6, 'colorpicker' => true, 'isHexColor' => true, 'decodeEntities' => true, 'tl_class' => 'w50 wizard'),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroContentboxTextAlign'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroContentboxTextAlign'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('align-center','align-left', 'align-right'),
    'eval'      => array('tl_class' => 'w50 wizard'),
    'sql'       => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['heroContentboxOpacity'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['heroContentboxOpacity'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('0','0.1','0.2','0.3','0.4','0.5','0.6','0.7','0.8','0.9','1.0'),
    'eval'      => array('tl_class' => 'w50 wizard'),
    'sql'       => "varchar(255) NOT NULL default ''",
);






