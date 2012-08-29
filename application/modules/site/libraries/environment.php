<?php

class Environment
{
   public $assets_path;
   public $asset_path;
   public $exec_path;
   public $ajax_path;
   public $sjquery_js;
   public $sjquery_ui_js;
   public $sjquery_css;

   public function __construct()
   {
      $this->assets_path = base_url() . 'site/request/assets/';
      $this->asset_path = base_url() . 'site/request/assets';
      $this->ajax_path = base_url() . 'site/request/ajax/';
      $this->exec_path = base_url() . 'site/request/exec/';
      $this->sjquery_js_url = $this->assets_path . "site/plugins/jquery/js/jquery-1.7.1.min.js";
      $this->sjquery_ui_js_url = $this->assets_path . "site/plugins/jquery/js/jquery-ui-1.8.17.custom.min.js";
      $this->sjquery_ui_css_url = $this->assets_path . "site/plugins/jquery/css/smoothness/jquery-ui-1.8.17.custom.css";
      $this->ssite_js = $this->assets_path . "site/js/site.js";
      $ainfo['assets_path'] = $this->assets_path;
      $ainfo['exec_path'] = $this->exec_path;
      $ainfo['ajax_path'] = $this->assets_path;
   }
}
