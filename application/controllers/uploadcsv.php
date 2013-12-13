<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploadcsv
 *
 * @author SistemasCompec
 */
class Uploadcsv extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('csvreader');
        $filePath = './uploads/products.csv';
        $data['csvData'] = $this->csvreader->parse_file($filePath);
        
        //var_dump($data['csvData']);
        
        $this->load->view('csv_view', $data);
    }

}
