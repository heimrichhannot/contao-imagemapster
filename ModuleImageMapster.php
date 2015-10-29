<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

class ModuleImageMapster extends Module
{

	protected $strTemplate = 'mod_imagemapster';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### IMAGE MAPSTER ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	protected function compile()
	{
		$map = new ImageMapster($this->imagemapster_template, $this->imagemapster_active);

		$this->Template->map = $map->parseMap();
	}

}