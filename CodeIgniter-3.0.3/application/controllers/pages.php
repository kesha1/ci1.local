<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}

		public function index()
	{
		$data['products'] = $this->products_model->get();
		$this->load->view('index', $data);
	}
}


//---------------------------------------------------------------------------------------------------//
// дн хглемемхъ
/*defined('BASEPATH') OR exit('No direct script access allowed');

        class Pages extends CI_Controller {


        * Index Page for this controller.
        *
        * Maps to the following URL
        * 		http://example.com/index.php/welcome
        *	- or -
        * 		http://example.com/index.php/welcome/index
        *	- or -
        * Since this controller is set as the default controller in
        * config/routes.php, it's displayed at http://example.com/
        *
        * So any other public methods not prefixed with an underscore will
        * map to /index.php/welcome/<method_name>
        * @see http://codeigniter.com/user_guide/general/urls.html

        public function index()
        {
        $this->load->view('index');
        }
        }     */

