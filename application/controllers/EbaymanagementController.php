<?php


defined('BASEPATH') or exit('No direct script access allowed');


class EbaymanagementController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ebay_management_model');
        $this->load->helper('url');
    }

    
	public function  index()
    {
            $this->load->view('seller_page');

        }


        //Save & edit Seller Details
        public function saveseller()
        {


            $edit_status = $this->input->post('edit_status');


            $formarray = array();

            $formarray['seller_name'] = $this->input->post('name');
            $formarray['seller_email'] = $this->input->post('email');
            $formarray['status'] = $this->input->post('status_type_val');

            if( $edit_status == 1 ){

                $id = $this->input->post('s_id');
                $dbstatus = $this->ebay_management_model->updateseller($formarray,$id);
                
            }else{

                $dbstatus = $this->ebay_management_model->saveseller($formarray);
               
            }


            redirect(base_url());

        }

        //View product Details
        public function  product_view($id)
        {

            $data['product_details']  = $this->ebay_management_model->getallproductofseller($id);
            $seller_details  = $this->ebay_management_model->getoneseller($id);
            $data['seller_name']  = $seller_details[0]['seller_name'];

                $this->load->view('product_page',$data);
                $this->load->view('product_page_script',$data);
    
     
            }
    


}
