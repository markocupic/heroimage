<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Markocupic;


/**
 * Front end content element "service_link".
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ContentHeroimage extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_heroimage';

    /**
     * Check whether the target page and the article are published
     * @return string
     */
    public function generate()
    {

        if ($this->buttonJumpTo === '')
        {
            return '';
        }

        return parent::generate();

    }


    /**
     * Generate the content element
     */
    protected function compile()
    {
        global $objPage;

        // Clean the RTE output
        if ($objPage->outputFormat == 'xhtml')
        {
            $this->text = \StringUtil::toXhtml($this->text);
        }
        else
        {
            $this->text = \StringUtil::toHtml5($this->text);
        }
        $this->Template->singleSRC = null;
        if(\Validator::isUuid($this->singleSRC))
        {
            $objFile = \FilesModel::findByUuid($this->singleSRC);
            if($objFile !== null ){
                if(is_file(TL_ROOT . '/' . $objFile->path))
                {
                    $this->Template->singleSRC =  $objFile->path;
                }
            }
        }


        $this->Template->text = \StringUtil::encodeEmail($this->text);
        $this->Template->buttonJumpTo = $this->buttonJumpTo;

    }
}