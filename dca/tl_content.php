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


$GLOBALS['TL_DCA']['tl_content']['palettes']['heroimage'] = 'name,type,headline,singleSRC;{template_legend:hide},customTpl;{text_legend},text;{button_legend},buttonText,buttonClass,buttonJumpTo;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';


/**
 * Add fields to tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['buttonClass'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['buttonClass'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('maxlength' => 200),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['buttonText'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['buttonText'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('maxlength' => 200),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['buttonJumpTo'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['buttonJumpTo'],
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




