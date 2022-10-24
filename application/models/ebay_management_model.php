<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ebay_management_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  //save seller details
  function saveseller($seller_arr)
  {

    $mdbstatus3true = true;
    $mdbstatus3false = false;

    $this->db->insert('seller_details', $seller_arr);

    $mafftectedRows3 = $this->db->affected_rows();

    if ($mafftectedRows3 > 0) {

      return $mdbstatus3true;
    } else {

      return $mdbstatus3false;
    }
  }

  //update seller details
  function updateseller($seller_arr, $id)
  {

    $mdbstatus3true = true;
    $mdbstatus3false = false;

    $this->db->where('id', $id);
    $this->db->update('seller_details', $seller_arr);

    $mafftectedRows3 = $this->db->affected_rows();

    if ($mafftectedRows3 > 0) {

      return $mdbstatus3true;
    } else {

      return $mdbstatus3false;
    }
  }

  //get all seller details
  function getallseller()
  {


    $response = array();
    $this->db->select('*');
    // $this->db->where('status', 1);
    $this->db->order_by('id', 'desc');
    $q = $this->db->get('seller_details');
    $response = $q->result_array();

    if ($response > 0) {
      return $response;
    } else {

      return $response;
    }
  }

   //get one seller details
   function getoneseller($id)
   {
 
 
     $response = array();
     $this->db->select('*');
     $this->db->where('id', $id);
     $q = $this->db->get('seller_details');
     $response = $q->result_array();
 
     if ($response > 0) {
       return $response;
     } else {
       return $response;
     }
   }


    //get all product details of one seller
    function getallproductofseller($id)
    {
  
  
      $response = array();
      $this->db->select('*');
      $this->db->where('seller_id', $id);
      $q = $this->db->get('product_details');
      $response = $q->result_array();
  
      if ($response > 0) {
        return $response;
      } else {
  
        return $response;
      }
    }


}
