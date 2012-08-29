<?php

class Sample extends MX_Controller
{	
	private $sModule;
	
	public function __construct()
	{
		/*init site module*/
		parent::__construct();
		$this->load->module('site/site');
		$this->load->model('getModel');
		
		$this->sModule = strtolower(__CLASS__); #class || module name
	}

	public function index()
	{
		/*sample data*/
		$aData['sTitle'] = "Sample Title";
		$aData['sSubTitle'] = "sample subtitle";
		$aData['menu'] = $this->getModel->test();
		/*set data*/
		$this->load->vars($aData);
		
		/*load views*/
		$this->site->header();
		$this->site->get_menu(); 
		$this->site->content($this->sModule.'/v_'.$this->sModule); #content file
		$this->site->footer();
	}
}