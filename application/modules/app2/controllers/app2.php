<?php

class App2 extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->module('site/site');

   }

   public function index()
   {
      $this->load->view('header');
      $this->load->view('index');

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
      $this->load->view('header');
      $this->load->view($spage);
      $this->load->view('sub/hiddens');
      $this->site->footer('app1/footer');
   }

   public function gallery()
   {
      $ainfo['title'] = "Gallery Page";
      $this->_render('contents',$ainfo);
   }

   public function events()
   {
      $ainfo['title'] = "Events Page";
      $this->_render('sub/events',$ainfo);
   
   }
}