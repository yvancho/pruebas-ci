<?php

$contador = 0;

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

    function listarUsuarios() {

        $index = ($this->input->get('jtStartIndex') ? $this->input->get('jtStartIndex') : 0);
        $pageSize = ($this->input->get('jtPageSize') ? $this->input->get('jtPageSize') : 20);
        
        error_reporting(0);

        $result = $this->user->numTotalObj();
//        $row = $result;
        $recordCount = $result->RecordCount; 

        $result2 = $this->user->listarTodosSorting($index, $pageSize);

        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['TotalRecordCount'] = $recordCount;
        $jTableResult['Records'] = $result2;

        echo json_encode($jTableResult);
    }

    function listarJtable() {
        $this->load->view('lista-jtable');
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

    function listarTablaPaginada2($nData = NULL, $suma = NULL) {
        global $contador;
        if ($nData == NULL) {
            $nData = 0;
        }
        if ($suma == null) {
            $suma = 0;
        }

        $contador += $suma; //la suma esta en cero, tiene que aumentar +10

        $nPagXview = 10; //set el numero de paginas a mostrar
        $nBotones = 10; //numero de botones mostrados
        $largo = $contador + $nBotones; //el contador empiza en 10;
        //$nBotonesVal = $suma + $nBotones;        

        $limite = $nPagXview * $nData;
        $data['usuarios'] = $this->user->listarPaginacion($limite, $nPagXview);
        $data['totalPagView'] = $this->user->numTotalPagView($nPagXview);
        $data['nBotones'] = $nBotones;
        $data['inicio'] = $largo - 10;
        $data['largo'] = $largo;

        $this->load->view('lista-usuarios', $data);
    }

}

?>
