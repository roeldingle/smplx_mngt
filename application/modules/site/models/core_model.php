<?php

class Core_Model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
   }

   public function get_token($stoken)
   {
       $this->db->select('token');
      $this->db->from('token_counter');
      $this->db->where('token',$stoken);
      $query = $this->db->get();
      return $query->rows();
   }
   
   

   public function insert_token($stoken)
   {
      $adata = array(
         'token' => $stoken
      );

      $this->db->insert('token_counter',$adata);
   }
   
   /*function to get the menu*/
    public function get_menu()
   {
	$sSql = "SELECT * FROM tb_modules";
	$mResult = $this->db->query($sSql);
	//return ($bRow == "row")?$mResult->row_array():$mResult->result_array();
	return $mResult->result_array();
   }
}