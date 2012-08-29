<?php

class Test1 extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();   
      $this->load->module('site/site');	  
      $this->site->use_js('t1/admin');
   }
   
   public function index()
   {
      $this->load->view('test1');
   }
}