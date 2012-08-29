<?php

class Login extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->module('app/site');
   }

   public function index()
   {
   }

   public function login_page()
   {
      $ainfo['common'] = $this->common;
      $this->common->set_field_list(array('t'=>'title',"s"=>'status',"date"=>'date_created'),array('t'=>'desc'));
      //echo $this->common->sql_groupby();
      echo $this->common->sql_limit(300,10);
      $this->common->use_css('login/style');
      $this->site->header();
      $this->load->view('login-page',$ainfo);
      $this->site->footer();

   }
}