<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['imagemapster'] = '{title_legend},name,headline,type;{config_legend},imagemapster_active;{template_legend:hide},imagemapster_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


$GLOBALS['TL_DCA']['tl_module']['fields']['imagemapster_template'] = array
(
		'label'										=> &$GLOBALS['TL_LANG']['tl_module']['imagemapster_template'],
		'default'									=> 'imagemapster_saxony',
		'exclude'									=> true,
		'inputType'								=> 'select',
		'options_callback'				=> array('tl_module_imagemapster', 'getMapTemplates'),
		'eval'										=> array('tl_class'=>'w50', 'chosen' => true),
		'sql'											=> "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['imagemapster_active'] = array
(
		'label'										=> &$GLOBALS['TL_LANG']['tl_module']['imagemapster_active'],
		'exclude'									=> true,
		'inputType'								=> 'text',
		'eval'										=> array('tl_class'=>'w50'),
		'sql'											=> "varchar(128) NOT NULL default ''"
);


class tl_module_imagemapster extends Backend
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getMapTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if ($this->Input->get('act') == 'overrideAll')
		{
			$intPid = $this->Input->get('id');
		}

		return $this->getTemplateGroup('imagemapster_', $intPid);
	}
}