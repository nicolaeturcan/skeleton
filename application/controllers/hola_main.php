<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( !class_exists('hola_main') ) {

class hola_main extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        //SKELETON THEMSELVES: necessary to load as thirdparty
        $this->load->add_package_path(APPPATH.'third_party/skeleton/application/');
        
        $params = array('model' => "skeleton_auth_model");
        $this->load->library('skeleton_auth',$params);
        
        //CONFIG skeleton_auth library:
        $this->skeleton_auth->login_page="skeleton_auth/auth/login";
        
        //LOAD SKELETON_AUTH MODEL
        $this->load->model('skeleton_auth_model');
        
        //GROCERY CRUD
        $this->load->add_package_path(APPPATH.'third_party/grocery-crud/application/');
        $this->load->library('grocery_CRUD');
        $this->load->add_package_path(APPPATH.'third_party/image-crud/application/');
        $this->load->library('image_CRUD');
               
        //Helpers
        $this->load->helper('url');
                
        /* Set language */
        /*$current_language=$this->session->userdata("current_language");
        if ($current_language == "") {
            $current_language= $this->config->item('default_language','skeleton_auth');
        }
        $this->grocery_crud->set_language($current_language);
        
        $this->lang->load('skeleton', $current_language);

        $this->lang->load($this->body_header_lang_file, $current_language);//*/
       
    }

    public function hola() {
        if (!$this->skeleton_auth->logged_in())
        {
            //redirect them to the login page
            redirect($this->skeleton_auth->login_page, 'refresh');
        }
        //redirect($this->skeleton_auth->login_page, 'refresh');
        
        //LOAD VIEW
        
        /*******************
        /*      HEADER     *
        /******************/
        $this->_load_html_header($this->_get_html_header_data());
        
        
        /*******************
        /*      BODY     *
        /******************/
        $this->_load_body_header();
        
        $this->_load_body();
        
         
        /*******************
        /*      FOOTER     *
        *******************/
        $this->_load_body_footer();     
    }
}


}




