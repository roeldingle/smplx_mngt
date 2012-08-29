<?php

class App1 extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->module('site/site');
      $this->site->use_css('app1/style');
      $this->site->use_js('app1/app1');
   }
                                                
   public function index()
   {
      $this->site->header('app1/header');
      $this->load->view('index');
      $this->load->view('sidebar');
      $this->load->view('sub/hiddens');
      $this->site->footer('app1/footer');
   }

   public function about()
   {
      $ainfo['title'] = "About Page";
      $this->_render('app1/about',$ainfo);
   }

   private function _render($spage,$ainfo)
   {
      $this->load->vars($ainfo);
      $this->site->header('app1/header');
      $this->load->view($spage);
      $this->load->view('sub/hiddens');
      $this->site->footer('app1/footer');
   }

   public function gallery()
   {
      $ainfo['title'] = "Gallery Page";
	        $this->site->use_js('app1/reload');
      $this->_render('contents',$ainfo);
   }

   public function events()
   {
      $ainfo['title'] = "Events Page";
      $this->_render('sub/events',$ainfo);
   
   }
}