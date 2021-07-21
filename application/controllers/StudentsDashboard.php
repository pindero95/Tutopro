<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentsDashboard extends CI_Controller {


    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 2){
            redirect(base_url()."welcome");
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_student');
        $this->load->view('layout/content_students');
        $this->load->view('layout/footer');


    }

}
