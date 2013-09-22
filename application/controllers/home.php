<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('home_view', $data);
        } else {
            redirect('login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

    function listarTabla() {
        $data['usuarios'] = $this->user->listarTodos();
        $this->load->view('lista-usuarios', $data);
    }

    function listarTablaPaginada() {
        $nPagXview = 50;
        $data['usuarios'] = $this->user->listarPaginacion($nPagXview);
        $data['totalPagView'] = $this->user->numTotalPagView($nPagXview);
        $this->load->view('lista-usuarios', $data);
    }

    function listarTablaPaginada2($nData) {
        $nPagXview = 10; //set el numero de paginas a mostrar        
        $limite = $nPagXview * $nData;
        $data['usuarios'] = $this->user->listarPaginacion($limite, $nPagXview);
        $data['totalPagView'] = $this->user->numTotalPagView($nPagXview);
        $this->load->view('lista-usuarios', $data);
    }

}

?>
