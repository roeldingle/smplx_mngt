<?php

class Front extends MX_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->module('site/site');
      $this->site->use_css('budget/jobert');
   }

   public function index()
   {
   }
}

