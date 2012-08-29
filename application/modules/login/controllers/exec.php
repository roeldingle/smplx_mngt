<?php

class Exec extends MX_Controller
{
   public function __construct()
   {
       parent::__construct();
       $this->load->model('login_model');
   }

   public function save()
   {
     $this->login_model->save();
   }
}