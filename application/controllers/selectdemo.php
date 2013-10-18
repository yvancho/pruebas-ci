<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of selectdemo
 *
 * @author yvancho
 */
class Selectdemo extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    function index(){
        $usuarios=$this->user->listaSelect();
        $data['usuarios'] = $usuarios;
        $this->load->view('selects-chosen', $data);
    }
}

?>
