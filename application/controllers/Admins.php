<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	/**
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		// $this->load->view('stores/index');
        $this->load->view("admin/dashboard");
	}

    public function login(){
        $this->load->view("admin/login");
    }

    public function users(){
        $this->load->view("admin/users");
    }

    public function products(){
        $this->load->view("admin/products");
    }

    public function orders(){
        $this->load->view("admin/orders");
    }
}
