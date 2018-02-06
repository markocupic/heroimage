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

        if ($this->heroImageButtonJumpTo === '')
        {
            //return '';
        }

		if ($this->singleSRC == '')
		{
			return '';
		}

		$objFile = \FilesModel::findByUuid($this->singleSRC);

		if ($objFile === null)
		{
			if (!\Validator::isUuid($this->singleSRC))
			{
				return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
			}

			return '';
		}

		if (!is_file(TL_ROOT . '/' . $objFile->path))
		{
			return '';
		}

		$this->singleSRC = $objFile->path;

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
            $this->heroImageText = \StringUtil::toXhtml($this->heroImageText);
        }
        else
        {
            $this->heroImageText = \StringUtil::toHtml5($this->heroImageText);
        }

		$this->addImageToTemplate($this->Template, $this->arrData, null, null, $this->objFilesModel);

        // Add image as background-image
        $this->Template->backgroundImage = 'none';
        if($this->addHeroImage)
        {
            $this->Template->backgroundImage =  "url('" . $this->Template->picture['img']['src'] . "')";
        }

		$this->Template->heroImageText = \StringUtil::encodeEmail($this->heroImageText);
        $this->Template->heroImageButtonJumpTo = $this->heroImageButtonJumpTo;

    }
}