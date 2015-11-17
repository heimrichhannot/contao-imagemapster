<?php

namespace HeimrichHannot\Imagemapster;


class ImageMapster extends \Frontend
{

	protected $strTemplate = 'imagemapster_saxony';

	protected $active = null;

	public function __construct($strTemplate='', $active=null)
	{
		parent::__construct();
		$this->loadLanguageFile('imagemapster');

		$this->strTemplate = $strTemplate;

		$this->active = $active;
	}

	public function parseMap()
	{

		$objT = new \FrontendTemplate($this->strTemplate);

		$objT->setData($GLOBALS['TL_LANG']['imagemapster']);

		$objT->active = $this->active;

		return $objT->parse();

	}

}